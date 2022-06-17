<?php

// Get all departments

function get_all_departments(){
    global $db;

    $sql = "SELECT * FROM department";

    $departments = $db->query($sql);

    return $departments;

}

// end 


// Get a particular department

function get_department_by_id($id){
    global $db;

    $sql = "SELECT * FROM department WHERE id = :id";

    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $department = $statement->fetch();
    $statement->closeCursor();

    if( $department == null ){
        return false;
    }else{
        
        return $department;
        
    }

}

// end







?>