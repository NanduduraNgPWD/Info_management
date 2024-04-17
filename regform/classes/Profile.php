<?php

class Profile {
    function addProfile($req){
        global $con;
        $fname = $req['fname'];
        $lname = $req['lname'];
        $date = date("Y-m-d", strtotime($req['date']));
        $address = $req['address'];

            try {
            $sql = "INSERT INTO `tbl_profile`
            VALUES (0,'$fname','$lname','$address' , '$date',1)";
                $con->exec($sql);
                 echo 'Added successfully';
            }
        catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    function displayProfiles(){
        global $con;
        $sql = "SELECT * FROM `tbl_profile` ORDER BY id ";
        $stmt = $con->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }
    function viewProfile($id = 0){
        global $con;
        $sql = "SELECT * FROM tbl_profile WHERE id = $id";
        
        $stmt = $con->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_BOTH);
    }
    function searchProfile(){

    }
}


?>