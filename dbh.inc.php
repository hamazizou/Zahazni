<?php
$conn = mysqli_connect('localhost','root', '', 'comments' );
if (!$conn) {
    die("connexion impossible : ".mysqli_connect_error());
}

?>