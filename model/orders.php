<?php


// Get all orders

function get_all_orders(){
    global $db;

    $sql = "SELECT * FROM orders ORDER BY orderID DESC";

    $orders = $db->query($sql);

    return $orders;

}

// end 


// Get all orders of a particular marketer

function get_marketer_orders($id){
    global $db;

    $sql = "SELECT * FROM orders WHERE marketerID = '$id' ORDER BY orderID DESC";

    $orders = $db->query($sql);

    return $orders;

}

// end 


// Get the number of orders of a particular marketer

function get_marketer_orders_count($id){
    global $db;

    $sql = "SELECT * FROM orders WHERE marketerID = '$id' ORDER BY orderID DESC";

    $orders = $db->query($sql);

    return $orders->rowCount();

}

// end 


// Get the number of approved orders

function get_approved_orders_count(){
    global $db;

    $sql = "SELECT * FROM orders WHERE status = 'Approved'";

    $orders = $db->query($sql);

    return $orders->rowCount();

}

// end 

 


// Get the number of pending orders

function get_pending_orders_count(){
    global $db;

    $sql = "SELECT * FROM orders WHERE status = 'Pending'";

    $orders = $db->query($sql);

    return $orders->rowCount();

}

// end 


// Get first 5 current orders

function get_first_5_orders(){
    global $db;

    $sql = "SELECT * FROM orders ORDER BY orderID DESC LIMIT 5";

    $orders = $db->query($sql);

    return $orders;

}

// end 




// Get the recent order

function get_recent_order(){
    global $db;

    $todaysDate = date('Y-m-d');

    $sql = "SELECT * FROM orders WHERE date = '$todaysDate' ORDER BY orderID DESC LIMIT 1";

    $orders = $db->query($sql);

    return $orders;

}

// end 






// Get bags sold

function getOrdersApproved($month_day){
    global $db;
    $date = "2000-".$month_day."-26";
   

    $sql = "SELECT MONTHNAME(:fulldate) AS monthName, SUM(quantity) bagsSold FROM orders WHERE MONTH(date) = :month_day AND status =:approved";

    $statement = $db->prepare($sql);
    $statement->bindValue(':month_day', $month_day);
    $statement->bindValue(':fulldate', $date);
    $statement->bindValue(':approved', "Approved");
    $statement->execute();

    $bagsSold = $statement->fetch();

    return $bagsSold;

}

// Get approved quantities (sum)

function getOrdersApprovedSum(){
    global $db;
   
    $sql = "SELECT SUM(quantity) total FROM orders WHERE status =:approved";

    $statement = $db->prepare($sql);
    $statement->bindValue(':approved', "Approved");
    $statement->execute();

    $bagsSold = $statement->fetch();

    return $bagsSold;

}


// Get pending quantities (sum)

function getOrdersPendingSum(){
    global $db;
   
    $sql = "SELECT SUM(quantity) total FROM orders WHERE status =:pending";

    $statement = $db->prepare($sql);
    $statement->bindValue(':pending', "Pending");
    $statement->execute();

    $bagsSold = $statement->fetch();

    
    return $bagsSold;
   

    

}


// Get today's orders

function get_todays_orders(){

    global $db;

    $todaysDate = date('Y-m-d');

    $sql = "SELECT * FROM orders WHERE date = '$todaysDate' ORDER BY time DESC LIMIT 5";

    $orders = $db->query($sql);

    return $orders;

}

// end 


// update order status

function update_order_status($id){

    global $db;

    $sql = "UPDATE orders SET status = :status WHERE orderID = :id";

    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':status', "Approved");
    $success = $statement->execute();
    $statement->closeCursor();

    return $success;

}

// end 






// Get today's orders count

function get_todays_orders_count(){

    global $db;

    $todaysDate = date('Y-m-d');

    $sql = "SELECT * FROM orders WHERE date = '$todaysDate' ORDER BY time DESC LIMIT 5";

    $orders = $db->query($sql);

    return $orders->rowCount();

}

// end 






// Get a particular order by id

function get_order($id){
    global $db;

    $sql = "SELECT * FROM orders WHERE orderID = :id";

    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $selected_order = $statement->fetch();
    $statement->closeCursor();

    if( $selected_order == null ){
        return false;
    }else{
        
        return $selected_order;
        
    }


}

// end



// Get number of orders

function get_orders_count(){
    global $db;

    $sql = "SELECT * FROM orders";

    $orders = $db->query($sql);

    return $orders->rowCount();

}

// end



// create an order

function create_order($shopID,$quantity,$marketerID) {
    global $db;  

    
    
    $sql = "INSERT INTO orders (quantity, shopID,marketerID,date,time) 
    VALUES (:quantity,:shopID,:marketerID,CURRENT_DATE(),CURRENT_TIME())";


    $statement = $db->prepare($sql);
    $statement->bindValue(':quantity', $quantity);
    $statement->bindValue(':shopID', $shopID);
    $statement->bindValue(':marketerID', $marketerID);


    $success = $statement->execute();
    $statement->closeCursor();

    $marketer_id = $db->lastInsertId();

    if($success == true){
        return $marketer_id;
    }else{
        return false;
    }
}

// end













?>