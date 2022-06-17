<?php

session_start();

include 'includes/main.php';




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
    // Home page
    case 'home':
        // prevent access to home if you are not an Admin

        if($_SESSION['admin_type'] == 'Marketer' ){
            header("Location:.?action=marketer_home_page");
        }

        include './view/dashboard.php';

        break;

    case 'testview':
        include './view/testingView.php';

    // Create Marketer Page
    case 'create_marketer_page':
        // get variables from the activities model
        // $row_count = get_activity_count();
        // $activities = get_all_activites();

        // prevent access to home if you are not an Admin

        if($_SESSION['admin_type'] == 'Marketer' ){
            header("Location:.?action=marketer_home_page");
        }

        include './view/create_marketer.php';

        break;

    // Update Marketer Page
    case 'update_marketer_page':
        // get variables from the activities model
        // $row_count = get_activity_count();
        // $activities = get_all_activites();

        // prevent access to home if you are not an Admin

        if($_SESSION['admin_type'] == 'Marketer' ){
            header("Location:.?action=marketer_home_page");
        }

        include './view/update_marketer.php';

        break;

    // Delete Marketer Page
    case 'delete_marketer_page':
        // get variables from the activities model
        // $row_count = get_activity_count();
        // $activities = get_all_activites();

        // prevent access to home if you are not an Admin

        if($_SESSION['admin_type'] == 'Marketer' ){
            header("Location:.?action=marketer_home_page");
        }

        include './view/delete_marketer.php';

        break;

    // Marketer Home Page
    case 'marketer_home_page':
        // get variables from the activities model
        // $row_count = get_activity_count();
        // $activities = get_all_activites();

        // prevent access to home if you are not an Admin

       

        include './view/marketer_home.php';

        break;

    // Profile
    case 'profile_page':
        // get variables from the activities model
        // $row_count = get_activity_count();
        // $activities = get_all_activites();

        // prevent access to home if you are not an Admin

       

        include './view/profile.php';

        break;



    // Add Retailer Page
    case 'add_retailer_page':
        // get variables from the activities model
        // $row_count = get_activity_count();
        // $activities = get_all_activites();

        // prevent access to home if you are not an Admin

        if($_SESSION['admin_type'] == 'Administrator' ){
        header("Location:.?action=home");
        }

        include './view/add_retailer.php';

        break;

    // Add Retailer Page
    case 'add_shop_page':
        // get variables from the activities model
        // $row_count = get_activity_count();
        // $activities = get_all_activites();

        // prevent access to home if you are not an Admin

        if($_SESSION['admin_type'] == 'Administrator' ){
            header("Location:.?action=home");
        }

        $shopID = filter_input(INPUT_POST, 'shopID');

       

        $selected_retailer = get_retailer_by_shop($shopID);

        

        include './view/add_shop.php';

        break;


    case 'add_shop':
        // prevent access to home if you are not a marketer

        if($_SESSION['admin_type'] == 'Administrator' ){
            header("Location:.?action=home");
        }
               
        $customerID = filter_input(INPUT_POST,'customerID');
        $retailer_name = filter_input(INPUT_POST,'retailer_name');
        $retailer_email = filter_input(INPUT_POST,'retailer_email');
        $contact = filter_input(INPUT_POST,'contact');


        $address = filter_input(INPUT_POST,'address');
        $shop_name = filter_input(INPUT_POST,'shop_name');

        $shop_region = filter_input(INPUT_POST,'shop_region');
        $shop_location = filter_input(INPUT_POST,'shop_location');

        $currentDate = date('d/m/Y');

        $shops_count = get_retailers_shops_count($customerID);
           
        $new_shop_id = $shops_count + 1;

        $shopID = $customerID."/".strval($new_shop_id);         
                

        $shop_landmark = filter_input(INPUT_POST,'shop_landmark');

        if( null != $_FILES["shop_picture"] ){
            $shop_picture = $_FILES["shop_picture"];
        }else{
            $shop_picture = null;
        }
        

        $shop_coordinate = filter_input(INPUT_POST,'shop_coordinate');
        
        $stock_level = 0;
        $minimum_stock = filter_input(INPUT_POST,'minimum_stock');
        $maximum_stock = filter_input(INPUT_POST,'maximum_stock');
        $marketerID = $_SESSION['admin_id'];

        
        

        

        if( add_retailer($customerID, $retailer_name, $retailer_email, $contact,$shopID, $shop_name, $shop_region, $shop_location, $shop_landmark, $shop_picture, $shop_coordinate, $stock_level, $minimum_stock, $maximum_stock, $marketerID,$address) ){
            header('Location:.?action=marketer_home_page');
        }else{
            return;
        }

        


        break;


    // update Retailer Page
    case 'update_retailer_page':
        // get variables from the activities model
        // $row_count = get_activity_count();
        // $activities = get_all_activites();

        // prevent access to home if you are not an Admin

        if($_SESSION['admin_type'] == 'Marketer' ){
            header("Location:.?action=marketer_home_page");
        }

        include './view/update_retailer.php';

        break;


    // delete Retailer Page
    case 'delete_retailer_page':
        // get variables from the activities model
        // $row_count = get_activity_count();
        // $activities = get_all_activites();

        // prevent access to home if you are not an Admin

        if($_SESSION['admin_type'] == 'Marketer' ){
            header("Location:.?action=marketer_home_page");
        }

        include './view/delete_retailer.php';

        break;


    // Add Order Page
    case 'add_order_page':
        // get variables from the activities model
        // $row_count = get_activity_count();
        // $activities = get_all_activites();

        // prevent access to home if you are not an Admin

        // if($_SESSION['admin_role'] == 'Operator' ){
        // header("Location:.?action=add_sales_order_page");
        // }

        include './view/add_order.php';

        break;


    // All Orders
    case 'all_order_page':
        // get variables from the activities model
        // $row_count = get_activity_count();
        // $activities = get_all_activites();

        // prevent access to home if you are not an Admin

        if($_SESSION['admin_type'] == 'Marketer' ){
            header("Location:.?action=marketer_home_page");
        }

        include './view/all_orders.php';

        break;


    // All Retailers
    case 'all_retailers_page':
        // get variables from the activities model
        // $row_count = get_activity_count();
        // $activities = get_all_activites();

        // prevent access to home if you are not an Admin

        if($_SESSION['admin_type'] == 'Marketer' ){
            header("Location:.?action=marketer_home_page");
        }

        include './view/all_retailers.php';

        break;

    // All marketers
    case 'all_marketers_page':
        // get variables from the activities model
        // $row_count = get_activity_count();
        // $activities = get_all_activites();

        // prevent access to home if you are not an Admin

        if($_SESSION['admin_type'] == 'Marketer' ){
            header("Location:.?action=marketer_home_page");
        }

        include './view/all_marketers.php';

        break;

    // update order status
    case 'update_order_status':

        // prevent access to home if you are not an Admin

        if($_SESSION['admin_type'] == 'Marketer' ){
            header("Location:.?action=marketer_home_page");
        }

        $id = filter_input(INPUT_POST, 'id');

        

        if( update_order_status($id) == true ){
            header("Location:.?action=home");
        }else{
            die("Error");
        }

        

        break;



    // // getBarChartInfo
    // case 'getBarChartInfo':
        
    //     if($_SESSION['admin_type'] == 'Marketer' ){
    //         header("Location:.?action=marketer_home_page");
    //     }

    //     $date = trim(  htmlspecialchars($_REQUEST['value']) );
    //     $month_number = getMonthNumber($date);

        

    //     $months = array();
    //     $totalSum = array();

    

    //     for ($month=1; $month <= $month_number ; $month++) { 
            
    //         $bagsSold = getOrdersApproved($month);

    //         if( $bagsSold['bagsSold'] == null ){
    //             array_push($months,$bagsSold['monthName'] );
    //             array_push($totalSum,null);
    //         }else{
    //             array_push($months,$bagsSold['monthName'] );
    //             array_push($totalSum,$bagsSold['bagsSold']);
                                      
    //         }
            

    //     }
        
        
    //     $jsonData = array(
    //         "data"=>array(
    //         "allMonths"=>$months,            
    //         "totalSum"=>$totalSum,            
    //         )
    //     );
            
            
    //     header("Content-type:application/json");
        
    //     echo json_encode($jsonData);

    //     break;

    
    




    

    
    // // Login Page

    case 'getPieChartInfo':
        
        if($_SESSION['admin_type'] == 'Marketer' ){
            header("Location:.?action=marketer_home_page");
        }

        if(getOrdersPendingSum() == null){
            $pendingSum = 0;
        }else{
            $pendingSum = intval(getOrdersPendingSum()['total']);
        }
        if(getOrdersApprovedSum() == null){
            $approvedSum = 0;
        }else{
            $approvedSum = intval(getOrdersApprovedSum()['total']);
        }

        $labels = array("Approved","Pending");
        $values = array($approvedSum,$pendingSum);      
        
        $jsonData = array(
            "data"=>array(
            "labels"=>$labels,            
            "values"=>$values,            
            )
        );
            
            
        header("Content-type:application/json");
        
        echo json_encode($jsonData);

        break;

    
    




    

    // Login Page

    case 'login_page':
        // prevent access to home if you are not an Admin

        // if($_SESSION['admin_role'] == 'Operator' ){
        // header("Location:.?action=add_sales_order_page");
        // }

        include './view/login.php';

        break;
    
    
        // check_shop_name

    case 'check_shop_name':
        // prevent access to home if you are not an Admin

        $shopName = trim(  htmlspecialchars($_REQUEST['value']) );

        if(check_shop_name_availabilty($shopName) == true){

            $jsonData = array(
                "data"=>array(
                "message"=>"Exists",
                )
            );
                
                
            header("Content-type:application/json");
            
            echo json_encode($jsonData);

        }else{

            $jsonData = array(
                "data"=>array(
                "message"=>"Does not exist",
                )
            );
                
                
            header("Content-type:application/json");
            
            echo json_encode($jsonData);
        }



        // if($_SESSION['admin_role'] == 'Operator' ){
        // header("Location:.?action=add_sales_order_page");
        // }


        break;



    ////////////////////////
    /// Marketer Section ///
    ////////////////////////

    //=============Creater Marketer==================//
    
    case 'create_marketer':

        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');


        if( null != $_FILES["image"] ){
            $image = $_FILES["image"];
        }else{
            $image = null;
        }
        

        try {
            if( create_marketer($name,$email,$password,$image) == true  ){
                header('Location:.?action=create_marketer_page');
            }else{
                return;
            }
        } catch (\Throwable $th) {
            //throw $th;
        }     

        break;

    //============= End of Creater Marketer==================//


    
    //============= Update Marketer==================//
    
  
    case 'update_search_marketer':

        $search = trim(  htmlspecialchars($_REQUEST['value']) );

        $selected_marketer = search_marketer($search);

        if($selected_marketer == true){

            

            $jsonData = array(
                "marketer"=>array(
                "message"=>"success",
                "adminID"=>$selected_marketer['adminID'],
                "name"=>$selected_marketer['name'],
                "email"=>$selected_marketer['email'],
                "password"=>$selected_marketer['password'],
                "type"=>$selected_marketer['type'],
                "contact"=>$selected_marketer['contact'],
                "image"=>$selected_marketer['image']    
                )
            );
                
                
            header("Content-type:application/json");
            
            echo json_encode($jsonData);
        }else{

            $jsonData = array(
                "marketer"=>array(
                "message"=>"failed"
                )
            );
                
                
            header("Content-type:application/json");

            echo json_encode($jsonData);

        }

        break;

    // update marketer final
    case 'update_marketer':

        
        $adminID = intval( filter_input(INPUT_POST, 'adminID') );
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $type = filter_input(INPUT_POST, 'role');
       
        $image = "";

        if(empty($adminID)){
            die("ID is empty");
        }


        

        if( null != filter_input(INPUT_POST, 'contact') ){
            $contact = filter_input(INPUT_POST, 'contact');
        }else{
            $contact = "";
        }

        if( null != $_FILES['image'] ){
            $image = $_FILES['image'];
        }else{
            $image = "";
        }


        if(update_marketer($adminID,$name,$email,$password,$type,$contact,$image) == true){
            header('Location:.?action=update_marketer_page');
        }else{
            return;
        }


        break;

    //============= End of Update Marketer==================//


    
    //=============Search Marketer==================//
    
    case 'search_marketer':

        $search = trim(  htmlspecialchars($_REQUEST['value']) );

        
        $selected_marketer = search_marketer($search);
        
        if( $selected_marketer == true  ){

            $results = '';


            $results .='<tr>';
            $results .= '<td>
            <form id="deleteMarketerForm" action=".?action=deleteMarketer" method="post">
            <input type="hidden" name="adminID" value="'.$selected_marketer["adminID"].'">
            <button id="deleteMarketerBtn" type="submit" class="btn btn-outline-primary">
            <i class="text-danger mdi mdi-trash-can-outline ms-1"></i>
            </button>
            </form>
            </td>';
            $results .= '<td>'.$selected_marketer["name"].'</td>';
            $results .= '<td>'.$selected_marketer["email"].'</td>';
            $results .= '<td>'.$selected_marketer["type"].'</td>';
            $results .= '<td>'.$selected_marketer["contact"].'</td>';                             
            $results .= '<td>'.$selected_marketer["date"].'</td>';              
            $results .= '</tr> ';
                                                
            $jsonData = array(
                "data"=>array(
                    "message"=>"success",
                    "results"=>$results
                )
            );

            echo json_encode($jsonData);

        }else{

            $jsonData = array(
                "data"=>array(
                    "message"=>"failed",
                    "results"=>"No results"
                )
            );

            echo json_encode($jsonData);
        }
        
        break;

    //============= End of Search Marketer==================//
    
    
    
    //============= Delete Marketer==================//

    case 'deleteMarketer':

        $adminID = filter_input(INPUT_POST, 'adminID');

        if(delete_marketer($adminID) == true){
            header('Location:.?action=delete_marketer_page');
        }else{
            return;
        }

        break;
    
    //============= End of Delete Marketer==================//






    ////////////////////////////////
    /// End of Marketer Section ///
    /////////////////////////////// 



    
    
    ////////////////////////////////
    /// Retailer Section ///
    /////////////////////////////// 
    
    //======== Add a retailer =====================/
    
    case 'add_retailer':
    
    
        $retailer_name = filter_input(INPUT_POST,'retailer_name');
        $retailer_email = filter_input(INPUT_POST,'retailer_email');
        $contact = filter_input(INPUT_POST,'contact');
        $address = filter_input(INPUT_POST,'address');
        $shop_name = filter_input(INPUT_POST,'shop_name');

        $shop_region = filter_input(INPUT_POST,'shop_region');
        $shop_location = filter_input(INPUT_POST,'shop_location');

        $currentDate = date('d/m/Y');

        $last_retailer = get_last_retailer();

        if($last_retailer != null){
            // get the id

            $customer_id = $last_retailer['customerID'];
            
            $customer_id_array = explode("/",$customer_id);
            $array_length = count($customer_id_array);

            $new_id = intval( $customer_id_array[ $array_length-1 ] ) + 1;

            $customerID = "DZ"."/".strtoupper(substr($shop_region,0,4))."/".strtoupper(substr($shop_location,0,4))."/".strval($currentDate)."/".strval($new_id);
            $shopID = "DZ"."/".strtoupper(substr($shop_region,0,4))."/".strtoupper(substr($shop_location,0,4))."/".strval($currentDate)."/".strval($new_id)."/1";
            
            // $customerID = "DZ"."/".substr($shop_region,0,4)."/".substr($shop_location,0,4)."/".strval($currentDate)."/"+strval($new_id);

        }else{
            
            $customerID = "DZ"."/".strtoupper(substr($shop_region,0,4))."/".strtoupper(substr($shop_location,0,4))."/".strval($currentDate)."/1";
            $shopID = "DZ"."/".strtoupper(substr($shop_region,0,4))."/".strtoupper(substr($shop_location,0,4))."/".strval($currentDate)."/1"."/1";
        }

        

        $shop_landmark = filter_input(INPUT_POST,'shop_landmark');

        if( null != $_FILES["shop_picture"] ){
            $shop_picture = $_FILES["shop_picture"];
        }else{
            $shop_picture = null;
        }
        
        
        $shop_coordinate = filter_input(INPUT_POST,'shop_coordinate');
        
        $stock_level = 0;
        $minimum_stock = filter_input(INPUT_POST,'minimum_stock');
        $maximum_stock = filter_input(INPUT_POST,'maximum_stock');
        $marketerID = $_SESSION['admin_id'];

        
        

        

        if( add_retailer($customerID, $retailer_name, $retailer_email, $contact,$shopID, $shop_name, $shop_region, $shop_location, $shop_landmark, $shop_picture, $shop_coordinate, $stock_level, $minimum_stock, $maximum_stock, $marketerID,$address) ){
            header('Location:.?action=add_retailer_page');
        }else{
            return;
        }
    


    break;


    
    //======== End =====================/




   
    
    //============= Update Retailer==================//
    
  
    case 'retailer_update_search':

        $search = trim(  htmlspecialchars($_REQUEST['value']) );

        $selected_retailer = search_retailer($search);

        if($selected_retailer != null){

            

            $jsonData = array(
                "retailer"=>array(
                "message"=>"success",
                "customerID"=>$selected_retailer['customerID'],
                "customer_name"=>$selected_retailer['customer_name'],
                "customer_email"=>$selected_retailer['customer_email'],
                "customer_contact"=>$selected_retailer['customer_contact'],
                "address"=>$selected_retailer['address'],
                "min_level"=>$selected_retailer['min_level'],
                "max_level"=>$selected_retailer['max_level'],
                "shop_picture"=>$selected_retailer['shop_picture']    
                )
            );
                
                
            header("Content-type:application/json");
            
            echo json_encode($jsonData);
        }else{

            $jsonData = array(
                "retailer"=>array(
                "message"=>"failed"
                )
            );
                
                
            header("Content-type:application/json");

            echo json_encode($jsonData);

        }

        break;


        case 'update_retailer':

        
            $customerID =  filter_input(INPUT_POST, 'customerID') ;
            $retailer_name = filter_input(INPUT_POST, 'retailer_name');
            $retailer_email = filter_input(INPUT_POST, 'retailer_email');
            $retailer_contact = filter_input(INPUT_POST, 'retailer_contact');
            $retailer_address = filter_input(INPUT_POST, 'retailer_address');
            $maximum_stock = filter_input(INPUT_POST, 'maximum_stock');
            $minimum_stock = filter_input(INPUT_POST, 'minimum_stock');
            

            
            if( null != $_FILES['shop_picture'] ){
                $shop_picture = $_FILES['shop_picture'];
            }else{
                $shop_picture = null;
            }

            
                       
           
    
           
    
            
    
            if( null != filter_input(INPUT_POST, 'retailer_contact') ){
                $retailer_contact = filter_input(INPUT_POST, 'retailer_contact');
            }else{
                $retailer_contact = "";
            }
    
          
    
    
            if(update_retailer($customerID,$retailer_name,$retailer_email,$retailer_contact,$shop_picture,$minimum_stock,$maximum_stock,$retailer_address) == true){
                header('Location:.?action=update_retailer_page');
            }else{
                return;
            }
    
    
            break;

    
    
    
    //====== End of Update Retailer ==================/


    // ======= Delete Retailer ====================/

    case 'search_delete_retailer':

        $search = trim(  htmlspecialchars($_REQUEST['value']) );

        
        $selected_retailer = search_retailer($search);
        
        if( $selected_retailer == true  ){

            $results = '';


            $results .='<tr>';
            $results .= '<td>
            <form id="deleteRetailerForm" action=".?action=delete_retailer" method="post">
            <input type="hidden" name="customerID" value="'.$selected_retailer["customerID"].'">
            <button id="deleteRetailerBtn" type="submit" class="btn btn-outline-primary">
            <i class="text-danger mdi mdi-trash-can-outline ms-1"></i>
            </button>
            </form>
            </td>';
            $results .= '<td>'.$selected_retailer["customerID"].'</td>';
            $results .= '<td>'.$selected_retailer["customer_name"].'</td>';
            $results .= '<td>'.$selected_retailer["shop_name"].'</td>';
            $results .= '<td>'.$selected_retailer["max_level"].'</td>';                             
            $results .= '<td>'.$selected_retailer["min_level"].'</td>';              
            $results .= '</tr> ';
                                                
            $jsonData = array(
                "data"=>array(
                    "message"=>"success",
                    "results"=>$results
                )
            );

            echo json_encode($jsonData);

        }else{

            $jsonData = array(
                "data"=>array(
                    "message"=>"failed",
                    "results"=>"No results"
                )
            );

            echo json_encode($jsonData);
        }

        break;



    case 'delete_retailer':

        $customerID = filter_input(INPUT_POST, 'customerID');
        

        if(delete_retailer($customerID) == true){
            header('Location:.?action=delete_retailer_page');
        }else{
            return;
        }

        break;
    

        break;




    // ====== End of Delete Retailer =================/
    
    ////////////////////////////////
    /// End of Retailer Section ///
    /////////////////////////////// 







    ////////////////////////////////
    /// Order Section///
    /////////////////////////////// 

    // ====== Add an order ============/

    case 'add_order':

        $shopID = filter_input(INPUT_POST,'shopID');
        $quantity = filter_input(INPUT_POST,'quantity');
        $marketerID = $_SESSION['admin_id'];

        
        
       

        if(create_order($shopID,$quantity,$marketerID) != null){
            update_stock_level($shopID,$quantity);
            update_bags_sold($shopID,$quantity);
            header('Location:.?action=add_order_page');
        }else{
            return;
        }

        break;
    
    
    // ====== End of add order ============/
    
    ////////////////////////////////
    /// End of Order Section ///
    /////////////////////////////// 






















    // handle login

    case 'login':
        // store the posted values
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        if(empty($email) && empty($password)){

            $login_message = '';
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
        $_SESSION['admin_id'] = $admin['adminID'];
        $_SESSION['admin_email'] = $admin['email'];
        $_SESSION['admin_type'] = $admin['type'];
        $_SESSION['admin_image'] = $admin['image'];
        
        }


        header("Location:.?action=home");

        } else {
            $login_message = 'Invalid Email or Password';
            include('view/login.php');
        }


        
        break;

    
    // Get dynamic contents

    case 'get_dashboard_info':

        function showTotalSales(){
            $date = trim(  htmlspecialchars($_REQUEST['value']) );
            $month_number = getMonthNumber($date);

            $months = array();
            $totalSum = array();
    

            for ($month=1; $month <= $month_number ; $month++) { 
                
                $bagsSold = getOrdersApproved($month);
    
                if( $bagsSold['bagsSold'] == null ){
                    array_push($months,$bagsSold['monthName'] );
                    array_push($totalSum,null);
                }else{
                    array_push($months,$bagsSold['monthName'] );
                    array_push($totalSum,$bagsSold['bagsSold']);
                                          
                }
                
    
            }

            function showOrdersPieChart(){
                if(getOrdersPendingSum() == null){
                    $pendingSum = 0;
                }else{
                    $pendingSum = intval(getOrdersPendingSum()['total']);
                }
                if(getOrdersApprovedSum() == null){
                    $approvedSum = 0;
                }else{
                    $approvedSum = intval(getOrdersApprovedSum()['total']);
                }
        
                $labels = array("Approved","Pending");
                $values = array($approvedSum,$pendingSum);     
                
                return array(
                    "labels"=>$labels,
                    "values"=>$values
                );
                
            }

            return array(
                "allMonths"=>$months,
                "totalSum"=>$totalSum
            );


        }

        $dashboardMarketersOutput = "";
        $dashboardRetailersOutput = "";
        $dashboardTodaysOrdersOutput = "";

        foreach(get_all_marketers() as $marketer){
            $dashboardMarketersOutput.= '<tr>
                <td style="width: 20px;"><img src="'.$marketer['image'].'" class="avatar-sm rounded-circle " alt="..."></td>
                <td> <h6 class="font-size-15 mb-1">'.$marketer['name'].'</h6> </td>
                <td> &nbsp; '.$marketer['type'].' </td>      
            </tr> ';       
        }

        foreach( get_all_retailers() as $retailer){
            $dashboardRetailersOutput.= '<tr>
                <td style="width: 20px;"><img src="'.$retailer['shop_picture'].'" class="avatar-sm rounded-circle " alt="..."></td>
                <td>
                    <h6 class="font-size-15 mb-1">'.$retailer["shop_name"].'</h6>
                    <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i>'.$retailer["shop_location"].'</p>
                </td>
                <td class="text-muted">'.$retailer["stock_level"].'</td>
                
                <td>
                    <a href="'.$retailer["shop_coordinate"].'" target="_blank">
                        <span class="fw-medium">View Shop<i class="mdi mdi-arrow-right ms-1"></i></span>
                    </a>
                </td>
            </tr>';
           

        }

        foreach( get_todays_orders() as $order){
            $dashboardTodaysOrdersOutput.= '<li class="feed-item">
            <div class="d-flex justify-content-between feed-item-list">
                <div>
                    <h5 class="font-size-15 mb-1">'.$order["quantity"].' bags for '.get_retailer_by_shop($order["shopID"])["customer_name"].'</h5>
                    <p class="text-muted mt-0 mb-0"><small>Ordered by: '.get_marketer($order["marketerID"])["name"].'</small></p>
                </div>
                <div>
                    <p class="text-muted mb-0">'.$order["time"].'</p>
                </div>
            </div>
        </li>';                            
                                                        
        }

        



      



        if(get_todays_orders_count() > 0){

            $recent_orders = array();

            foreach(get_recent_order() as $order){
                array_push($recent_orders,array(
                    "marketerImage"=>get_marketer($order["marketerID"])["image"],
                    "marketerName"=>get_marketer($order["marketerID"])["name"],
                    "retailerName"=>get_retailer_by_shop($order['shopID'])["shop_name"],
                    "quantity"=>$order["quantity"],
                    "time"=>$order["time"],
                    "orderID"=>$order["orderID"]
                ));
            }   
    

        }else{
            $recent_orders = array(
                array()
            );
        }

        


        $jsonData = array(
            "data"=>array(
                "orders"=>array(
                    "getOrdersCount"=>get_orders_count(),
                    "getApprovedOrdersSum"=>getOrdersApprovedSum()['total'],
                    "getOrdersApprovedCount"=>get_approved_orders_count(),
                    "getPendingOrdersCount"=>get_pending_orders_count(),
                    "getPendingOrderSum"=>intval(getOrdersPendingSum()['total']),
                    "todaysOrdersCount"=>get_todays_orders_count(),
                    "showTotalSales"=>showTotalSales(),
                    "showOrdersPieChart"=>showOrdersPieChart(),
                    "showTodaysOrders"=>$dashboardTodaysOrdersOutput,
                    
                    "recentOrders"=>$recent_orders[0]
                    


                ),
                "retailers"=>array(
                    "getRetailerCount"=>get_retailers_count(),
                    "allRetailers"=>$dashboardRetailersOutput
                ),
                "marketers"=>array(
                    "getMarketersCount"=>get_marketers_count(),
                    "allMarketers"=>$dashboardMarketersOutput
                ),
                "stocks"=>array(
                    "getStocksCount"=>get_stock_count(),
                )

            )
        );
            
            
        header("Content-type:application/json");

        echo json_encode($jsonData);



        break;

    case 'serveManagedOrders':

        function returnOrderStatusContent($orderStatus,$orderID){
            if($orderStatus == 'Approved'){
                return ' <span class="badge badge-success">
                <i class="mdi mdi-tooltip-check text-danger font-size-24"></i>
                </span>';
            }else{
                return '<form action=".?action=update_order_status" method="post">
                <small><button type="submit" class="btn-success">Approve</button></small>
                <input type="hidden" name="id" value="'.$orderID.'">                  
                </form>';
                
            }
        }

        

        $arrayOfObjects = array();

        foreach (get_all_orders() as $order) {
           array_push($arrayOfObjects,array(
               $order['product_name'],
               get_retailer_by_shop( $order['shopID'] )['shop_name'],
               $order['quantity'],
               get_marketer($order['marketerID'])['name'],
               $order['date'],
               $order['time'],
               $order['status'],
               returnOrderStatusContent($order['status'],$order['orderID'])

           ));
        }

        $jsonData = array(
            "data"=>$arrayOfObjects
        );

        echo json_encode($jsonData);

        break;
    
    case 'getRetailerStocks':

        $shopID = trim(  htmlspecialchars($_REQUEST['shopID']) );

        if($shopID != ""){
            $retailer = get_retailer_by_shop($shopID); 


            $jsonData = array(
                "data"=>array(
                "retailer"=>$retailer           
                )
            );


            header("Content-type:application/json");

            echo json_encode($jsonData);
        }else{
            echo "no data";
        }
        

        break;





    // Handle Logout

    case 'logout':
        $_SESSION = array();
        session_destroy();
        header("Location:.");
        break;
    
    default:
        header("Location:.?action=home");
}



?>