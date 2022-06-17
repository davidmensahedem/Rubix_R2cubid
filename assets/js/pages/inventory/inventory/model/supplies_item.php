<?php


// Get a item by id

function get_item_by_name($name){
    global $db;

    $sql = "SELECT * FROM supplies_items WHERE name = :name";

    $statement = $db->prepare($sql);
    $statement->bindValue(':name', $name);
    $statement->execute();

    $item = $statement->fetch();
    $statement->closeCursor();

    
    if( $item == null ){
        return false;
    }else{
        
        return $item;
        
    }

}

// end








// Get all added items

function get_all_added_items(){
    global $db;

    $sql = "SELECT * FROM supplies_items WHERE state = 'Available'";

    $all_added_items = $db->query($sql);

    return $all_added_items;

}

// end 






// Get number of addeditems

function get_added_items_count(){
    global $db;

    $sql = "SELECT * FROM supplies_items";

    $addeditems = $db->query($sql);

    return $addeditems->rowCount();

}

// end



// create a supply item

    function add_supplies_item($name,$rack_number, $shelf_number,$quantity) {
        global $db;  

        
        $sql = "INSERT INTO supplies_items (name, rack_number, shelf_number, quantity, date) VALUES (:name,:rack_number,:shelf_number,:quantity,CURRENT_DATE())";

        

        $statement = $db->prepare($sql);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':rack_number', $rack_number);
        $statement->bindValue(':shelf_number', $shelf_number);
        $statement->bindValue(':quantity', $quantity);

        
        

        $success = $statement->execute();
        $statement->closeCursor();

        

        if($success == true){
            
            return true;
        }else{
            die("control nooo");
            return "nooo";
        }
    }

// end



// get quantity

function select_quantity(){

    $quantities = [1,2,3,4,5,6,7,8,9];

    return $quantities;

    
}


// update quantity

function update_selected_supplies_quantity($name,$quantity,$state="Available"){
    global $db;

    // update the quantity of the selected item

    $sql = "UPDATE supplies_items SET quantity = :quantity, state =:state WHERE name = :name";
    $statement = $db->prepare($sql);
    
    $statement->bindValue(':name', $name);
    $statement->bindValue(':quantity', $quantity);
    $statement->bindValue(':state', $state);


    $success = $statement->execute();
    $statement->closeCursor();

    return $success;
}








?>