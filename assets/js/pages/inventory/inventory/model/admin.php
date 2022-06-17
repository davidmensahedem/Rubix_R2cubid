<?php

// Get a particular admin by id

function get_admin_by_id($id){
    global $db;

    $sql = "SELECT * FROM admin WHERE id = :id";

    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
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






// create a worker

function create_admin($name,$email, $password,$departmentID) {
    global $db;  

    
    $sql = "INSERT INTO admin (name, email, password, role,departmentID,date) 
    VALUES (:name,:email,:password,:role,:departmentID,CURRENT_DATE())";


    $statement = $db->prepare($sql);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':role', 'Admin');
    $statement->bindValue(':departmentID', $departmentID);
    

    $success = $statement->execute();
    $statement->closeCursor();

    

    if($success == true){
        return true;
    }else{
        return false;
    }
}

// end


// delete admin

function delete_admin($id) {
    global $db;  
    $sql = "DELETE FROM admin WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $success = $statement->execute();
    $statement->closeCursor();

    return $success;
}

// end











// Get all admins

function get_all_admins(){
    global $db;

    $sql = "SELECT * FROM admin WHERE role ='Admin' ";

    $admins = $db->query($sql);

    return $admins;

}

// end 


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








// Get number of admins

function get_admins_count(){
    global $db;

    $sql = "SELECT * FROM admin";

    $admins = $db->query($sql);

    return $admins->rowCount();

}

// end




// update an admin

function update_admin($adminID,$name,$email,$password){
    global $db;  

    // get the admin's previous details
    $admin_details = get_admin_by_id($adminID);

    $password = trim($password);

   
    
    // check password
    if(  $password != "" ){
        $password = $password;
    }else{
        $password = $admin_details['password'];
    }

    

    // check if admin is valid and set it details to the previous if it was not updated
    if($admin_details != false){

        // for the name
        if( empty($name) ){
            $name = $admin_details['name'];
        }

        // for the email
        if( empty($email) ){
            $email = $admin_details['email'];
        }

       

    } 

   

    

    

    // update the newly set fields to the new values and keep the old ones if they were not updated

    $sql = "UPDATE admin SET name = :name, email = :email, password = :password WHERE id = :id";
    $statement = $db->prepare($sql);
    
    $statement->bindValue(':id', $adminID);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);

    $success = $statement->execute();
    $statement->closeCursor();

    return $success;
}

// end












?>