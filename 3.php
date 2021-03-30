<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  

Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"

Étape 2: Créez un forloop qui affiche 10 nombres

Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas 

 */
$m =19;
if($m>19){

	echo" good as you";
}
else if ($m<19)
{
	echo " hi";
}
else{
		echo"  i love green chip2.0";
	} 

	echo "</br>";
	for($i=0;$i<=10;$i++){
		echo $i;
		echo "</br>";
	}
	
	echo "</br>";
	$sais="hiver";
	switch($sais){
		case "automn": echo "vous dans l'automn";
		break;
		case "hiver": echo "vous dans l'hiver";
		break;
		case "printemps": echo "vous dans le printemps";
		break;
		case "Ete": echo "vous dans l'été";
		break;
		default: echo" aucune saison ne correspond";
	}

?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>