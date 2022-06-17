<?php


// Get all marketers

function get_all_marketers(){
    global $db;

    $sql = "SELECT * FROM admin WHERE type = 'Marketer' limit 6";

    $marketers = $db->query($sql);

    return $marketers;

}

// end 








// Search for a particular marketer by  name

function search_marketer($search){
    global $db;

    $sql = "SELECT * FROM admin WHERE type = 'Marketer' AND name = :search";

    $statement = $db->prepare($sql);
    $statement->bindValue(':search', $search);
    $statement->execute();

    $selected_marketer = $statement->fetch();
    $statement->closeCursor();

    if( $selected_marketer == null ){
        return false;
    }else{
        
        return $selected_marketer;
        
    }


}

// end



// Get a particular marketer by id

function get_marketer($id){
    global $db;

    $sql = "SELECT * FROM admin WHERE type = 'Marketer' AND adminID = :id";

    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $selected_marketer = $statement->fetch();
    $statement->closeCursor();

    if( $selected_marketer == null ){
        return false;
    }else{
        
        return $selected_marketer;
        
    }


}

// end



// Get number of marketers

function get_marketers_count(){
    global $db;

    $sql = "SELECT * FROM admin WHERE type = 'Marketer'";

    $marketers = $db->query($sql);

    return $marketers->rowCount();

}

// end



// create a marketer

function create_marketer($name,$email, $password,$image) {
    global $db;  

    
    
    $sql = "INSERT INTO admin (name, email, password, type,date,image) 
    VALUES (:name,:email,:password,:type,CURRENT_DATE(),:image)";


    $statement = $db->prepare($sql);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':type', 'Marketer');
    $statement->bindValue(':image', $image["name"]);
    
    

    $success = $statement->execute();
    $statement->closeCursor();

    $marketer_id = $db->lastInsertId();

    if($success == true){
        upload_admin_image($image,"marketer",$marketer_id);
        return $marketer_id;
    }else{
        return false;
    }
}

// end


function upload_admin_image($image,$finalDirectory,$id){

    global $db;
    // the base directory
    $base_dir = "assets/uploads/";

    // get marketer
    $marketer = get_marketer($id);

    // set the username
    // $target_username = "{$_SESSION['admin_']}-{$_SESSION['user_id']}/";
    $target_username = "{$marketer['name']}-{$marketer['adminID']}";

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
            $sql = "UPDATE admin SET image=:target_file WHERE adminID=:id";
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












// update marketer

function update_marketer($id,$name,$email,$password,$type,$contact,$image){

    global $db;  
    
    $sql = "UPDATE admin SET name =:name,email=:email,password=:password,contact=:contact,type=:type,image=:image WHERE adminID =:id";
    $statement = $db->prepare($sql);
    
    $statement->bindValue(':id', $id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':type', $type);
    $statement->bindValue(':contact', $contact);
    $statement->bindValue(':image', $image["name"]);
   
    $success = $statement->execute();
    $statement->closeCursor();

    if($success == true){
        upload_admin_image($image,"marketer",$id);
    }


    return $success;

}

// end



// Delete marketer

function delete_marketer($id) {

    global $db;  
    
    $sql = "DELETE FROM admin WHERE adminID = :id";
    
    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $success = $statement->execute();
    $statement->closeCursor();

    return $success;
}



// End





?>