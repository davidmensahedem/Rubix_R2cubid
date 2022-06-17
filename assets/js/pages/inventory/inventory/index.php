<?php

session_start();

include 'utilities/includes.php';


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}

//If the user isn't logged in, force the user to login

if ( !isset($_SESSION['is_valid_admin']) ) {
    $action = 'login';
}






switch ($action) {

    // Handle Home

    case 'home':
        if( isset( $_SESSION['admin_role']  ) ){

            if(  $_SESSION['admin_role'] == "Admin" ){

                include './view/workers_view.php';

            }else{

                include './view/dashboard.php';

            }

        }
        
        break;

    // Handle Create Administrator Page

    case 'create_admin_page':
        include './view/create_admin.php';
        break;


    // Handle Section View Page

    case 'section_view_page':
        include './view/workers_view.php';
        break;


    // Handle Section Information Page

    case 'section_info_page':
        include './view/section_info.php';
        break;
        
    // Handle Section Information Page

    case 'addsupplies':
        include './view/add_supplies.php';
        break;

    // Handle Workers Submissions Page

    case 'submissions':
        include './view/workers_submissions.php';
        break;


    // Handle Status Update


    case 'serverAllItems':




        $arrayOfItemObjects = array();

        // all_activities
        foreach (get_all_items() as $item) {
           array_push($arrayOfItemObjects,array(
                $item['itemsID'],
                $item['name'],
                get_department_by_id($item['departmentID'])['name'],
                get_section_by_id($item['sectionID'])['section'],
                render_section( $item['sectionID'], $item['itemsID'] ),
                $item['date'],
                $item['status'],
                $item['status']
               
           ));
        }
        // end 

        $jsonData = array(
            "data"=>$arrayOfItemObjects
        );

        echo json_encode($jsonData);

        break;  












    case 'update_item_status':

        $itemsID = $_POST['itemsID'];

        $status = "Approved";

        if( update_status($itemsID,$status) == true ){

           header("Location:.?action=home");        

        }
        
        break;

    // Handle Create Work Info

    case 'create_works_item':
        
        $worksinfo = filter_input(INPUT_POST, 'workinfo');
        
        $sectionID = 1;

        $itemsID = create_item( $_SESSION['admin_name'], intval( $_SESSION['admin_id'] ), intval( $_SESSION['admin_department']),$sectionID);

        if( $itemsID != false  ){
        
            if( create_works($itemsID,$worksinfo) == true  ){

                header("Location:.?action=section_view_page"); 

            }else{
                return;
            }


        }else{
            return;
        }

        break;



    
    
    // Handle Create Suppies

    case 'create_supplies_item':
        
        $supplesitem = filter_input(INPUT_POST, 'supplesitem');
        $suppliesquantity = filter_input(INPUT_POST, 'suppliesquantity');
        $suppliesremark = filter_input(INPUT_POST, 'suppliesremark');
        
        $sectionID = 2;

        

        



        $itemsID = create_item( $_SESSION['admin_name'], intval( $_SESSION['admin_id'] ), intval( $_SESSION['admin_department']),$sectionID);
      

        if( $itemsID != false  ){
        
            if( create_supplies($itemsID,$supplesitem,$suppliesquantity,$suppliesremark) == true  ){

                $selecteditem = get_item_by_name($supplesitem);

                $remainingquantity = $selecteditem['quantity'] - $suppliesquantity;

                if( $remainingquantity == 0  ){

                    update_selected_supplies_quantity($supplesitem,$remainingquantity,"Finished");
                }else{

                    update_selected_supplies_quantity($supplesitem,$remainingquantity);
                }


                header("Location:.?action=section_view_page"); 

            }else{
                return;
            }


        }else{
            return;
        }

        break;
    // Handle Create Bookings
    case 'add_supplies_item':
        
        $itemname = filter_input(INPUT_POST, 'itemname');
        $racknumber = filter_input(INPUT_POST, 'racknumber');
        $shelfnumber = filter_input(INPUT_POST, 'shelfnumber');
        $itemquantity = intval(filter_input(INPUT_POST, 'itemquantity'));
        
            if(  add_supplies_item($itemname,$racknumber, $shelfnumber,$itemquantity) == true  ){

                header("Location:.?action=addsupplies"); 

            }else{
                return;
            }

        break;
    // Handle Create Bookings

    case 'create_bookings_item':
        
        $bookingspurpose = filter_input(INPUT_POST, 'bookingspurpose');
        $bookingsdate = filter_input(INPUT_POST, 'bookingsdate');
        $bookingstime = filter_input(INPUT_POST, 'bookingstime');
        $endbookingstime = filter_input(INPUT_POST, 'endbookingstime');

        
        $sectionID = 3;

        $itemsID = create_item( $_SESSION['admin_name'], intval( $_SESSION['admin_id'] ), intval( $_SESSION['admin_department']),$sectionID);
      

        if( $itemsID != false  ){
        
            if( create_bookings($itemsID,$bookingspurpose,$bookingsdate,$bookingstime,$endbookingstime) == true  ){

                header("Location:.?action=section_view_page"); 

            }else{
                return;
            }


        }else{
            return;
        }

        break;
    
    // Handle Create bookings

    case 'check_booking_details':
        
        $from = $_REQUEST['fromBookingTime'];
        $to = $_REQUEST['endBookingTime'];
        $bookingsdate = $_REQUEST['bookingsdate'];

        // $bookingspurpose = filter_input(INPUT_POST, 'bookingspurpose');
        // $bookingsdate = filter_input(INPUT_POST, 'bookingsdate');
        // $bookingstime = filter_input(INPUT_POST, 'bookingstime');
        // $endbookingstime = filter_input(INPUT_POST, 'endbookingstime');


      

        $bookings = check_bookings_availability($from,$bookingsdate);        
        
        if(  $bookings == false  ){

            $bookingsCheckData = array(
                "info"=>array(
                    "success"=>true,
                    "message"=>"Available"
                )
            );

            header("Content-type:application/json");
        
             echo json_encode($bookingsCheckData);

        }else{
            foreach($bookings as $booking){
                $message = "Choose an appointment beyound ".$booking['start_time']." to ".$booking['end_time'];
            }
            

            $bookingsCheckData = array(
                "info"=>array(
                    "success"=>false,
                    "message"=>$message
                )
            );

            header("Content-type:application/json");
        
            echo json_encode($bookingsCheckData);


        }

        
    
        
        break;

    // handle bookings check

    case 'create_admin':

        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $departmentID = filter_input(INPUT_POST, 'departmentID');
        
        
        if( create_admin($name,$email, $password,$departmentID) == true ){
            header("Location:.?action=create_admin_page"); 
        }else{
            return;
        }

        
        break;

    
    
    // handle delete Admin

    case 'delete_admin':

        $adminID = filter_input(INPUT_POST, 'adminID');

        if( delete_admin($adminID) ){
            header("Location:.?action=create_admin_page"); 
        }else{
            return;
        }



        
        break;
    
    
    // handle update Admin

    case 'update_admin':

        // store the posted values

        $adminID = filter_input(INPUT_POST, 'adminID');
        $name = filter_input(INPUT_POST, 'updatename');
        $email = filter_input(INPUT_POST, 'updateemail');
        $password = filter_input(INPUT_POST, 'updatepassword');

       
        if(  update_admin($adminID,$name,$email,$password) == true  ){

            header("Location:.?action=create_admin_page");           
        }else{
            return;
        }
    



        
        break;

    
    case 'getAdminDetails':
        $admin_id = filter_input(INPUT_POST, 'adminID');
        $admin = get_admin_by_id($admin_id);
        

        $jsonData = array(
            "info"=>array(
                "success"=>true,
                "name"=>$admin['name'],
                "email"=>$admin['email'],
                "password"=>$admin['password'],

            )
        );
        
        
        header("Content-type:application/json");
        
        echo json_encode($jsonData);
    

        break;




    // Handle getAdminDetails





    case 'getItemDetails':
        
        $supplesitem = filter_input(INPUT_POST, 'supplesitem');

        $item = get_item_by_name($supplesitem);

        if($item != false){

            $jsonData = array(
                "info"=>array(
                    "success"=>true,
                    "name"=>$item['name'],
                    "quantity"=>$item['quantity']
                )
            );

        }else{
            $jsonData = array(
                "info"=>array(
                    "success"=>false,
                    "name"=>"no name",
                    "quantity"=>""
                )
            );
        }

        header("Content-type:application/json");
        
        echo json_encode($jsonData);
    
        break;

    // Handle getItemDetails



    case 'checkQuantity':
        
        $supplesitem = trim($_REQUEST['item']);
        
        $selectedQuantity = trim($_REQUEST['selectedQuantity']);

        $selectedQuantity = intval($selectedQuantity);      

        $item = get_item_by_name($supplesitem);

       

        if($item != false){

            if( $item['quantity'] > $selectedQuantity ){
                $exceeded = true;
            }else{
                $exceeded = false;
            }

            $jsonData = array(
                "info"=>array(
                    "success"=>true,
                    "name"=>$item['name'],
                    "quantity"=>$item['quantity'],
                    "exceeded"=>$exceeded
                )
            );

        }else{
            $jsonData = array(
                "info"=>array(
                    "success"=>false,
                    "name"=>"no name",
                    "quantity"=>""
                )
            );
        }

        header("Content-type:application/json");
        
        echo json_encode($jsonData);
    
        break;

    // Handle getItemDetails







    case 'login':
        // store the posted values
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        if(empty($email) && empty($password)){

        return include('view/login.php');
        }


        // validate the credentials

        if (is_valid_admin_login($email, $password) ) {
        // valid credentials

        // get the admin using his email
        $admin = get_admin_by_email($email);

        // check if the results is not null and set session variables
        if($admin != false){
        $_SESSION['is_valid_admin'] = true;
        $_SESSION['admin_name'] = $admin['name'];
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_email'] = $admin['email'];
        $_SESSION['admin_role'] = $admin['role'];
        $_SESSION['admin_department'] = $admin['departmentID'];
        }

        // $row_count = get_activity_count();
        // $activities = get_all_activites();
        // include 'view/dashboard.php';

        header("Location:.?action=home");

        } else {
        $login_message = 'Invalid Email or Password';
        include('view/login.php');
        }
        break;





    // Handle Logout

        
    
    // Handle Logout

    case 'logout':
        $_SESSION = array();
        session_destroy();
        header("Location:.");
        break;

       
}



?>