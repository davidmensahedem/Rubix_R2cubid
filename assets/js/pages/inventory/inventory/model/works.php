<?php


// Get all works

function get_all_works(){
    global $db;

    $sql = "SELECT * FROM works";

    $works = $db->query($sql);

    return $works;

}

// end 


// Get number of works

function get_works_count(){
    global $db;

    $sql = "SELECT * FROM works";

    $works = $db->query($sql);

    return $works->rowCount();

}

// end



// create a workinfo

function create_works($itemsID,$worksinfo) {
    global $db;  

    
    $sql = "INSERT INTO works (itemsID,works_info) 
    VALUES (:itemsID,:works_info)";


    $statement = $db->prepare($sql);
    $statement->bindValue(':itemsID', $itemsID);
    $statement->bindValue(':works_info', $worksinfo);
    
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