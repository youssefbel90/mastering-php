<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  
	Étape 1: utilisez une fonction mathématique prédéfinie ici et faites-en écho

	Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho

	Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho 

 */

 $a=abs(-1);
 echo $a;
 echo "</br>";
$list="bonjour";
echo strlen($list);
echo "</br>";

$cars = array("BMW","Volvo","Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>