<?php 
date_default_timezone_set('Africa/Tunis');
include 'dbh.inc.php'; 
include 'comments.inc.php'; 
session_start();
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> section commentaires</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
echo"<form method='POST' action='".setlogin($conn)."' >
	<input type='text' name='uid'>
	<input type='password' name='pwd'>
    <button type='submit' name='SeConnecter'>Connexion</button>
</form>";

echo"<form method='POST' action='".userlogout()."' >
    <button type='submit' name='Sedeconnecter'>Déconnexion</button>
</form>";

if (isset($_SESSION['id'])) {
    echo"vous êtes connecté(e)";
} else{
    echo"vous n'êtes pas connecté(e)";
}
    ?>

<br> <br>


<?php
if (isset($_SESSION['id'])) {
    echo"<form method='POST' action='".setcomments($conn)."' >
	<input type='hidden' name='uid' value='".$_SESSION['id']."'>
	<input type='hidden' name='date' value='" .date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea>
    <button type='submit' name='Commenter'> Commenter </button>
</form>";
} else{
    echo"vous devez vous connecter pour commenter <br><br>";
}
  
getcomments($conn);
?>

</body>
</html>