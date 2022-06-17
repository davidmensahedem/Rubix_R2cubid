<?php




// Get a particular section

function get_section_by_id($id){
    global $db;

    $sql = "SELECT * FROM sections WHERE id = :id";

    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $section = $statement->fetch();
    $statement->closeCursor();

    if( $section == null ){
        return false;
    }else{
        
        return $section;
        
    }

}

// end


// render a particular section

function render_section($id,$itemsID){
    global $db;

    $worksSql = "SELECT * FROM works WHERE itemsID = :id";
    $suppliesSql = "SELECT * FROM supplies WHERE itemsID = :id";
    $bookingsSql = "SELECT * FROM conference WHERE itemsID = :id";
    

    if($id == 1){

        // section is works

        $statement = $db->prepare($worksSql);
        $statement->bindValue(':id', $itemsID);
        $statement->execute();

        $section = $statement->fetch();
        $statement->closeCursor();

        if( $section == null ){
            return "sorry";
        }else{
            
            return $section['works_info'];
            
        }




    }elseif ($id == 2) {

        // section is supplies

        $statement = $db->prepare($suppliesSql);
        $statement->bindValue(':id', $itemsID);
        $statement->execute();

        $section = $statement->fetch();
        $statement->closeCursor();

        if( $section == null ){
            return false;
        }else{
            
            return $section['item']."<br>"."Qty: ".$section['quantity']."<br>".$section['remarks'];
            
        }
       
    }else{

        // section is conference

        $statement = $db->prepare($bookingsSql);
        $statement->bindValue(':id', $itemsID);
        $statement->execute();

        $section = $statement->fetch();
        $statement->closeCursor();

        if( $section == null ){
            return false;
        }else{
            
            return $section['purpose']."<br>".$section['date']."<br>"."From: ".$section['start_time']."<br>"."To: ".$section['end_time'];
            
        }


    }


}

// end










?>