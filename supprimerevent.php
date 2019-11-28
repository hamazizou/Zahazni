<?PHP
include "../core/eventC.php";
$eventC=new eventC();
if (isset($_POST["id_event"])){
	$eventC->supprimerEvent($_POST["id_event"]);
	header('Location: afficherevent.php');
}

?>