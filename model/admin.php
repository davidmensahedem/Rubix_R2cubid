<?php


// validate an admin

function is_valid_admin_login($email, $password) {
    global $db;

    // $password = sha1($password.$email);

    $sql = 'SELECT email,password FROM admin
              WHERE email = :email';
    $statement = $db->prepare($sql);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();
    if( $row == null ){
        return false;
    }else{
        if($row['password'] == $password){
            return true;
        }else{
            return false;
        }
        
    }
        
}

// end






// Get a particular admin by email

function get_admin_by_email($email){
    global $db;

    $sql = "SELECT * FROM admin WHERE email = :email";

    $statement = $db->prepare($sql);
    $statement->bindValue(':email', $email);
    $statement->execute();

    $admin = $statement->fetch();
    $statement->closeCursor();

    if( $admin == null ){
        return false;
    }else{
        
        return $admin;
        
    }

}

// end


// Get a particular admin by id

function get_administrator($id){
    global $db;

    $sql = "SELECT * FROM admin WHERE type = 'Administrator' AND adminID = :id";

    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $selected_admin = $statement->fetch();
    $statement->closeCursor();

    if( $selected_admin == null ){
        return false;
    }else{
        
        return $selected_admin;
        
    }


}

// end


















?>