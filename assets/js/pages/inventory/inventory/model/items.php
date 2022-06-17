<?php




// Get all items

function get_all_items(){
    global $db;

    $sql = "SELECT * FROM items ORDER BY itemsID DESC";

    $items = $db->query($sql);

    return $items;

}

// end 



// Get a particular item by id

function get_item_by_id($id){
    global $db;

    $sql = "SELECT * FROM items WHERE itemsID = :id";

    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
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




// Get a particular item by worker

function get_item_by_workerId($id){
    global $db;

    $sql = "SELECT * FROM items WHERE workerID = :id ORDER BY itemsID DESC";

    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $item = $statement->fetchAll();
    $statement->closeCursor();

    if( $item == null ){
        return false;
    }else{
        
        return $item;
        
    }

}

// end


// create a works item

function create_item($name,$workerID,$departmentID,$sectionID){
    global $db;  

    $sql = "INSERT INTO items (name, workerID, departmentID,date,sectionID) 
    VALUES (:name,:workerID,:departmentID,CURRENT_DATE(),:sectionID)";
    
    $statement = $db->prepare($sql);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':workerID', $workerID);
    $statement->bindValue(':departmentID', $departmentID);
    $statement->bindValue(':sectionID', $sectionID);
    
    $success = $statement->execute();
    $statement->closeCursor();

    $itemsID = $db->lastInsertId();

    if($success == true){
        return $itemsID;
    }else{
        return;
    }
}

// end




// update item's status


function update_status($itemsID,$status){

    global $db;

    $sql = "UPDATE items SET status = :status WHERE itemsID = :id";
    $statement = $db->prepare($sql);
    
    $statement->bindValue(':id', $itemsID);
    $statement->bindValue(':status', $status);
   

    $success = $statement->execute();
    $statement->closeCursor();

    return $success;


}



// end









?>