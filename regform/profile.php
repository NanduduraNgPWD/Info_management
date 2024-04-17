<?php include('partials/header.php');
include('./classes/Profile.php');
$Profile = new Profile();
$id = $_GET['id'];
$profile = $Profile->viewProfile($id);

?>
        <p>Name:<?php echo $profile['fname'];?></p>
        <p>Last Name:<?php echo $profile['lname'];?></p>
        <p>Birthday:<?php echo date("F m,Y" , strtotime($profile['bdate']));?></p>
        <p>
            <a href="view.php">View all</a>
        </p>
</table>
<?php include('partials/footer.php'); ?>