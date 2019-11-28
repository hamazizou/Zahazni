<?PHP
include "../entites/event.php";
include "../core/eventC.php";

if (isset($_POST['id_event']) and isset($_POST['title']) and isset($_POST['date']) and isset($_POST['prix']) and isset($_POST['reduc'])){
$event1=new event($_POST['id_event'], $_POST['title'], $_POST['date'], $_POST['prix'], $_POST['reduc']);
//Partie2
/*
var_dump($livreur1);
}
*/
//Partie3
//  var_dump($promo1);
$event1C=new eventC();
$event1C->ajouterEvent($event1);
header('Location: afficherevent.php');
	
}else{
	echo "vérifier les champs";
 }
//*/

?>