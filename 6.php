
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

<form method="POST">

<input type="text" name="nom"></br>
<input type="submit" name="sub" value="Send">
	<?php  
$nom=$_POST['nom'];
echo $nom;
/*  
	Étape 1: Créez un formulaire qui soumet une seule valeur à POST (super global)

*/	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>