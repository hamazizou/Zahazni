<?PHP
include "../core/promoC.php";
$promoC=new promoC();
if (isset($_POST["id_promo"])){
	$promoC->supprimerPromo($_POST["id_promo"]);
	header('Location: afficherpromo.php');
}

?>