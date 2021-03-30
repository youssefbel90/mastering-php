<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* 
		Étape 1: Créez 2 variables appelées number1 et number2 et affecté au number1 la valeur 10 et le deuxième la valeur 20

		Étape 2: Ajoutez les deux variables et affichez la somme avec écho:

		Étape 3: Créez 2 tableaux avec les mêmes valeurs, l'un régulier et l'autre associatif

		Étape 4: Créez une constante et définissez-la sur la valeur de PHP. et utilisez un écho pour l'afficher


			

			 */

		$number1=10;
		$number2=20;
		echo $number1+$number2;
	    echo"</br>";
		$mois=array("janavier","fevrier","mars","avril","main","juin","juillet","aout","septembre","octobre","novembre","decembre");
		$arrelenght=count($mois);
		for($i=0;$i<=$arrelenght;$i++){
		echo $mois[$i];
		echo "<br>";
		}
		echo "</br>";
		$mois=array("1"=>"janavier","2"=>"fevrier","3"=>"mars","4"=>"avril","5"=>"mai","6"=>"juin","7"=>"juillet","8"=>"aout","9"=>"septembre","10"=>"octobre","11"=>"novembre","12"=>"decembre");
		foreach($mois as $x=>$val){

			echo "num mois".' '.$x.' '."Nom mois".' '.$val;
			echo"</br>";
		}
		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>