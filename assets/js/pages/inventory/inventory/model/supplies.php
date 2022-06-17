<?php


// Get number of supplies

function get_supplies_count(){
    global $db;

    $sql = "SELECT * FROM supplies";

    $suppliess = $db->query($sql);

    return $suppliess->rowCount();

}

// end


// Get all supplies

function get_all_supplies(){
    global $db;

    $sql = "SELECT * FROM supplies";

    $supplies = $db->query($sql);

    return $supplies;

}

// end 


// create supplies

function create_supplies($itemsID,$item,$quantity,$remarks) {
    global $db;  

    
    $sql = "INSERT INTO supplies (itemsID,item,quantity,remarks) 
    VALUES (:itemsID,:item,:quantity,:remarks)";


    $statement = $db->prepare($sql);
    $statement->bindValue(':itemsID', $itemsID);
    $statement->bindValue(':item',$item);
    $statement->bindValue(':quantity',$quantity);
    $statement->bindValue(':remarks',$remarks);
    
    $success = $statement->execute();
    $statement->closeCursor();

    if($success == true){
        return true;
    }else{
        return false;
    }
}

// end






?>