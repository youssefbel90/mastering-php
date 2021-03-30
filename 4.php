<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  
	Étape 1: Définir une fonction et qui renvoie un calcul de 2 nombres

	Étape 2: Créez une fonction qui transmet des paramètres et appelez-la à l'aide de valeurs de paramètres

 */

function somme(int $number1,int $number2){

return $number1+$number2;

}

echo somme(2,8);
echo "</br>";
	
function identite(string $sh1,string $sh2){
	return $sh1.' '.$sh2;
}

echo identite("aynaou","rachid");
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>