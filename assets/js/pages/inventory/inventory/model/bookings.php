<?php

// Get all bookings

function get_all_bookings(){
    global $db;

    $sql = "SELECT * FROM conference";

    $bookings = $db->query($sql);

    return $bookings;

}

// end 




// check bookings availability

function check_bookings_availability($start_time,$bookingsdate){
    global $db;

    $todaysdate = date('Y-m-d');

    
   
    if( $bookingsdate == $todaysdate ){
        
        
        $sql = "SELECT * FROM conference WHERE end_time >= :start_time AND date = :todaysdate ORDER BY itemsID DESC LIMIT 1";
        
        $statement = $db->prepare($sql);
        $statement->bindValue(':start_time', $start_time);
        $statement->bindValue(':todaysdate', $todaysdate);
        $statement->execute();

        $bookings = $statement->fetchAll();
        
        $statement->closeCursor();

        if($bookings == null){
            return false;
        }else{
            return $bookings;
        }










        
    }else{

     


        $sql = "SELECT * FROM conference WHERE end_time >= :start_time AND date = :bookingsdate ORDER BY itemsID DESC LIMIT 1";

        
        $statement = $db->prepare($sql);
        $statement->bindValue(':start_time', $start_time);
        $statement->bindValue(':bookingsdate', $bookingsdate);
        $statement->execute();

        $bookings = $statement->fetchAll();
        
        $statement->closeCursor();

        if($bookings == null){
            return false;
        }else{
            return $bookings;
        }

    }





}

// end 




// Get number of bookings

function get_bookings_count(){
    global $db;

    $sql = "SELECT * FROM conference";

    $bookings = $db->query($sql);

    return $bookings->rowCount();

}

// end



// create supplies

function create_bookings($itemsID,$purpose,$date,$start_time,$end_time) {
    global $db;  

    
    $sql = "INSERT INTO conference (itemsID,purpose,date,start_time,end_time) 
    VALUES (:itemsID,:purpose,:date,:start_time,:end_time)";


    $statement = $db->prepare($sql);
    $statement->bindValue(':itemsID', $itemsID);
    $statement->bindValue(':purpose',$purpose);
    $statement->bindValue(':date',$date);
    $statement->bindValue(':start_time',$start_time);
    $statement->bindValue(':end_time',$end_time);
    
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