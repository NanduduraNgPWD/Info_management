<?php
include('partials/header.php');
include('classes/Profile.php');
$profile = new Profile();

if(isset($_REQUEST['btn'])){
    $profile->addProfile($_REQUEST);
}
    #$fname = $_REQUEST['fname'];
    #$lname = $_REQUEST['lname'];
    #$date = date("m-d-Y" , strtotime($_REQUEST['date']));
    #$name = $fname . " " . $lname;
    #echo $name;
    #echo $date;
    
?>
        <form action='' method='POST' name='frmReg'>
            <label>First name:</label>
            <input type="text" name="fname"><br>

            <label>Last name:</label>
            <input type="text" name="lname"><br>

            <label>Birthday:</label>
            <input type="date" name="date"><br>
            
            <label>Address:</label><br>
            <textarea name="address" id="" cols="30" rows="10"></textarea><br>

            <input type="submit" value="Submit" name="btn">
        </form>
        <a href="view.php">View all</a>
        <?php
include('partials/footer.php');
?>