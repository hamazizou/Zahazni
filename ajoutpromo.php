<?PHP
include "../entites/promo.php";
include "../core/promoC.php";

if (isset($_POST['id_promo']) and isset($_POST['prix']) and isset($_POST['reduc'])){
$promo1=new promo($_POST['id_promo'], $_POST['prix'], $_POST['reduc']);
//Partie2
/*
var_dump($livreur1);
}
*/
//Partie3
//  var_dump($promo1);
$promo1C=new promoC();
$promo1C->ajouterPromo($promo1);
header('Location: afficherpromo.php');
	
}else{
	echo "vérifier les champs";
 }
//*/

?>
