<?php
$titlePage = "Success";
const URL_GIF = 'https://giphy.com/embed/vtVpHbnPi9TLa';
$firstName = $_GET['firstname'];
$lasttName = $_GET['lastname'];
$dob = $_GET['dob'];
$specialty = $_GET['specialty'];
$email = $_GET['email'];
$phone = $_GET['phone'];


require_once("includes/header.php");
?>

<h1 class="h1-success">You have been registered!</h1>

<div class="success-container">
    <iframe src="<?= URL_GIF ?>" frameborder="0"></iframe>

    <a href="index.php">Back to form</a>

</div>





<?php require_once("includes/footer.php"); ?>