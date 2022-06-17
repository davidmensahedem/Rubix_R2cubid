<?php


// Get all retailers

function get_all_retailers(){
    global $db;

    $sql = "SELECT * FROM retailers";

    $retailers = $db->query($sql);

    return $retailers;

}

// end 






















// Get a particular retailer by id

function get_retailer($id){
    global $db;

    $sql = "SELECT * FROM retailers WHERE customerID = :id";

    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $selected_retailer = $statement->fetch();
    $statement->closeCursor();

    if( $selected_retailer == null ){
        return false;
    }else{
        
        return $selected_retailer;
        
    }


}

// end



// Get a particular retailer by orderCreated

function get_retailer_by_orderCreated($id){
    global $db;

    $sql = "SELECT * FROM retailers WHERE orderCreated = :id";

    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $selected_retailer = $statement->fetch();
    $statement->closeCursor();

    if( $selected_retailer == null ){
        return false;
    }else{
        
        return $selected_retailer;
        
    }


}

// end



// Get a particular retailer by shopID

function get_retailer_by_shop($id){
    global $db;

    $sql = "SELECT * FROM retailers WHERE shopID = :id";

    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $selected_retailer = $statement->fetch();
    $statement->closeCursor();

    if( $selected_retailer == null ){
        return false;
    }else{
        
        return $selected_retailer;
        
    }


}

// end



// Get all retailers registered by a particular marketer

function get_marketer_retailers($id){
    global $db;

    $sql = "SELECT * FROM retailers WHERE marketerID = '$id'";

    $retailers = $db->query($sql);

    return $retailers;


}

// end


// Get the number of retailers registered by a particular marketer

function get_marketer_retailers_count($id){
    global $db;

    $sql = "SELECT * FROM retailers WHERE marketerID = '$id'";

    $retailers = $db->query($sql);

    return $retailers->rowCount();

}

// end

// Get the number of retailers shops

function get_retailers_shops_count($id){
    global $db;
    
    $sql = "SELECT * FROM retailers WHERE customerID = '$id'";

    $retailers = $db->query($sql);  

    return $retailers->rowCount();

}

// end



// Get the last retailer

function get_last_retailer(){
    global $db;

    $sql = "SELECT * FROM retailers ORDER BY orderCreated DESC LIMIT 1";

    $statement = $db->prepare($sql);
    $statement->execute();

    $selected_retailer = $statement->fetch();
    $statement->closeCursor();

    if( $selected_retailer == null ){
        return false;
    }else{
        
        return $selected_retailer;
        
    }


}

// end



// Get number of retailers

function get_retailers_count(){
    global $db;

    $sql = "SELECT * FROM retailers";

    $retailers = $db->query($sql);

    return $retailers->rowCount();

}

// end


// Get month number

function getMonthNumber($date){
    global $db;

    $sql = "SELECT MONTH(:date)";

    $statement = $db->prepare($sql);
    $statement->bindValue(':date', $date);
    $statement->execute();

    $month_day = $statement->fetch();
    $statement->closeCursor();

    if( $month_day == null ){
        return false;
    }else{
        return $month_day[0];
        
    }

}

// end




// Get bags sold

function getBagsSold($month_day){
    global $db;
    $date = "2000-".$month_day."-26";
   

    $sql = "SELECT MONTHNAME(:fulldate) AS monthName, SUM(bags_sold) bagsSold FROM retailers WHERE MONTH(date) = :month_day";

    $statement = $db->prepare($sql);
    $statement->bindValue(':month_day', $month_day);
    $statement->bindValue(':fulldate', $date);
    $statement->execute();

    $bagsSold = $statement->fetch();

    return $bagsSold;

}

// end



// Get total bags sold

function get_total_bags_sold(){

    global $db;

    $sql = "SELECT SUM(bags_sold) total FROM retailers";

    $statement = $db->prepare($sql);
    $statement->execute();

    $bagsTotal = $statement->fetch();

    return $bagsTotal;


}

// end 








// Search for a particular retailer by  ID, or customer name, or shop_name

function search_retailer($search){

    global $db;

    

    $sql = "SELECT * FROM retailers WHERE customerID = :search OR customer_name =:search OR shop_name =:search";

    $statement = $db->prepare($sql);
    $statement->bindValue(':search', $search);
    $statement->execute();

    $selected_retailer = $statement->fetch();
    $statement->closeCursor();

    if( $selected_retailer == null ){
        return false;
    }else{
        
        return $selected_retailer;
        
    }


}

// end












// Get stock total

function get_stock_count(){
    global $db;

    $sql = "SELECT * FROM retailers";

    $retailers = $db->query($sql);

    $total = 0;

    if($retailers != null){
        foreach( $retailers as $retailer ){

            $total += $retailer['stock_level'];

        }

        return $total;

    }

}

// end



// Add a retailer

function add_retailer($customerID, $customer_name, $customer_email, $customer_contact,$shopID, $shop_name, $shop_region, $shop_location, $shop_landmark, $shop_picture, $shop_coordinate, $stock_level, $min_level, $max_level, $marketerID,$address) {
    global $db;  

    $sql = "INSERT INTO retailers(customerID, customer_name, customer_email, customer_contact,shopID,shop_name, shop_region, shop_location, shop_landmark, shop_picture, shop_coordinate, stock_level, min_level, max_level, date, marketerID,address) 
    VALUES (:customerID,:customer_name,:customer_email,:customer_contact,:shopID,:shop_name,:shop_region,:shop_location,:shop_landmark,:shop_picture,:shop_coordinate,:stock_level,:min_level,:max_level,CURRENT_DATE(),:marketerID,:address)";
    
    $statement = $db->prepare($sql);

    $statement->bindValue(':customerID', $customerID);
    $statement->bindValue(':customer_name', $customer_name);
    $statement->bindValue(':customer_email', $customer_email);
    $statement->bindValue(':customer_contact',$customer_contact);
    $statement->bindValue(':shopID',$shopID);
    $statement->bindValue(':shop_name', $shop_name);
    $statement->bindValue(':shop_region', $shop_region);
    $statement->bindValue(':shop_location', $shop_location);
    $statement->bindValue(':shop_landmark', $shop_landmark);
    $statement->bindValue(':shop_picture', $shop_picture["name"]);
    $statement->bindValue(':shop_coordinate', $shop_coordinate);
    $statement->bindValue(':stock_level', $stock_level);
    $statement->bindValue(':min_level', $min_level);
    $statement->bindValue(':max_level', $max_level);
    $statement->bindValue(':marketerID', $marketerID);
    $statement->bindValue(':address', $address);
    
    

    $success = $statement->execute();
    $statement->closeCursor();

    $retailer_id = $db->lastInsertId();

    if($success == true){

        upload_retailer_image($shop_picture,"retailer",$retailer_id);

        return $retailer_id;
    }else{
        return false;
    }
}


// end


// Update a Retailer

function update_retailer($customerID,$customer_name,$customer_email,$customer_contact,$shop_picture,$min_level,$max_level,$address){

    global $db;

    $sql = "UPDATE retailers SET customer_name=:customer_name, customer_email=:customer_email, customer_contact=:customer_contact, shop_picture=:shop_picture, min_level=:min_level, max_level=:max_level, address=:address WHERE customerID=:customerID";

    $statement = $db->prepare($sql);
    
    $statement->bindValue(':customerID', $customerID);
    $statement->bindValue(':customer_name', $customer_name);
    $statement->bindValue(':customer_email', $customer_email);
    $statement->bindValue(':customer_contact', $customer_contact);
    $statement->bindValue(':shop_picture', $shop_picture["name"]);
    $statement->bindValue(':min_level', $min_level);
    $statement->bindValue(':max_level', $max_level);
    $statement->bindValue(':address', $address);
   
    $success = $statement->execute();
    $statement->closeCursor();

    if($success == true){
        update_retailer_image($shop_picture,"retailer",$customerID);
    }


    return $success;


}

// End



// Delete retailer

function delete_retailer($id) {

    global $db;  
    
    $sql = "DELETE FROM retailers WHERE customerID = :id";
    
    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $success = $statement->execute();
    $statement->closeCursor();

    return $success;
}



// End


// Check shop name availability

function check_shop_name_availabilty($shopName) {

    global $db;  
    
    $sql = "SELECT * FROM retailers WHERE shop_name = :shop_name";
    
    $statement = $db->prepare($sql);
    $statement->bindValue(':shop_name', $shopName);
    $success = $statement->execute();
    $selected_retailer = $statement->fetch();
    $statement->closeCursor();

    if($selected_retailer != null){
        return true;
    }else{
        return false;
    }
    

}



// End



// update bags sold

function update_bags_sold($shopID,$quantity) {

    global $db;  

    $selected_retailer = get_retailer_by_shop($shopID);

    $bags_sold = $selected_retailer['bags_sold'] + $quantity;
    
    $sql = "UPDATE retailers SET  bags_sold = :bags_sold WHERE shopID = :id";
    
    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $shopID);
    $statement->bindValue(':bags_sold', $bags_sold);
    $success = $statement->execute();
    $statement->closeCursor();

    return $success;
}

// End



// Update Stock Level

function update_stock_level($id,$ordered_quantity) {
    
    global $db;  

    $selected_retailer = get_retailer_by_shop($id);


    if($selected_retailer['stock_level'] == 0){

        $bags_sold = 0;
        $new_stock_level = $selected_retailer['max_level'] - $ordered_quantity;

    }else{
        $bags_sold = ( $selected_retailer['max_level'] - $selected_retailer['stock_level']  );
        $new_stock_level = $selected_retailer['max_level'] - ( $bags_sold + $ordered_quantity);
    }
    
    


    
   
    
    $sql = "UPDATE retailers SET  stock_level = :stock_level WHERE shopID = :id";
    
    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':stock_level', $new_stock_level);
    $success = $statement->execute();
    $statement->closeCursor();

    return $success;
}


// End




function upload_retailer_image($image,$finalDirectory,$id){

    global $db;
    // the base directory
    $base_dir = "assets/uploads/";

    // get retailer
    $retailer = get_retailer_by_orderCreated($id);

    // set the username
    // $target_username = "{$_SESSION['admin_']}-{$_SESSION['user_id']}/";
    // $target_username = "{$retailer['shop_name']}-{$retailer['customerID']}";
    $target_username = "{$retailer['shop_name']}";

    // create the username directory inside the base directory
    $target_username_dir = mkdir("{$base_dir}/{$finalDirectory}/");

    // set the target directory. eg. basedirectory/usernamedirectory/
    $target_dir = "{$base_dir}{$finalDirectory}/";

    // create the path including the name of the file
    $target_file = $target_dir.basename($image["name"]);

    

    
    $uploadOk = 1;


    
    // check if it is a file
    $check = is_file($image['tmp_name']);

    if($check !== false) {
            // check if the file size is less than 1000KB
            if($image["size"] < 1000000){
                $uploadOk = 1;
            }else{
                $uploadOk = 0;
                $upload_message = "File size is beyound the limit";
                // header("Location:../?uploadmessage=$upload_message");
            }

    } else {

        $uploadOk = 0;
        $upload_message = "This is not a file";
        // header("Location:../?uploadmessage=$upload_message");
    }
    


    if($uploadOk == 1){
        if(move_uploaded_file($image['tmp_name'], $target_file)){
            $target_file_extension = pathinfo($target_file,PATHINFO_EXTENSION);
            $final_target_file = "{$target_dir}{$target_username}.{$target_file_extension}";
            rename($target_file,$final_target_file);
            $upload_message = "Successful!";  
            $sql = "UPDATE retailers SET shop_picture=:target_file WHERE orderCreated=:id";
            $statement = $db->prepare($sql);
            $statement->bindValue(':id', $id);
            $statement->bindValue(':target_file', $final_target_file);
            $success = $statement->execute();
            $statement->closeCursor();
        }
    }else{
        $upload_message = "Oops! File could not be uploaded";
        // header("Location:../?uploadmessage=$upload_message");
        
    }




}




function update_retailer_image($image,$finalDirectory,$id){

    global $db;
    // the base directory
    $base_dir = "assets/uploads/";

    // get retailer
    
    $retailer = get_retailer($id);

    // set the username
    // $target_username = "{$_SESSION['admin_']}-{$_SESSION['user_id']}/";
    // $target_username = "{$retailer['shop_name']}-{$retailer['customerID']}";
    $target_username = "{$retailer['shop_name']}";

    // create the username directory inside the base directory
    $target_username_dir = mkdir("{$base_dir}/{$finalDirectory}/");

    // set the target directory. eg. basedirectory/usernamedirectory/
    $target_dir = "{$base_dir}{$finalDirectory}/";

    // create the path including the name of the file
    $target_file = $target_dir.basename($image["name"]);

    

    
    $uploadOk = 1;


    
    // check if it is a file
    $check = is_file($image['tmp_name']);

    if($check !== false) {
            // check if the file size is less than 1000KB
            if($image["size"] < 1000000){
                $uploadOk = 1;
            }else{
                $uploadOk = 0;
                $upload_message = "File size is beyound the limit";
                // header("Location:../?uploadmessage=$upload_message");
            }

    } else {

        $uploadOk = 0;
        $upload_message = "This is not a file";
        // header("Location:../?uploadmessage=$upload_message");
    }
    


    if($uploadOk == 1){
        if(move_uploaded_file($image['tmp_name'], $target_file)){
            $target_file_extension = pathinfo($target_file,PATHINFO_EXTENSION);
            $final_target_file = "{$target_dir}{$target_username}.{$target_file_extension}";
            rename($target_file,$final_target_file);
            $upload_message = "Successful!";  
            $sql = "UPDATE retailers SET shop_picture=:target_file WHERE customerID=:id";
            $statement = $db->prepare($sql);
            $statement->bindValue(':id', $id);
            $statement->bindValue(':target_file', $final_target_file);
            $success = $statement->execute();
            $statement->closeCursor();
        }
    }else{
        $upload_message = "Oops! File could not be uploaded";    
        // header("Location:../?uploadmessage=$upload_message");
        
    }




}















?>