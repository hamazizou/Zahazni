<?php
$mysqli = new mysqli('localhost', 'root','', 'g_reclamation' ) or die(mysqli_error($mysqli));
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $mysqli->query("INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$subject','$message')") or 
    die ($mysqli->error);
}
?>