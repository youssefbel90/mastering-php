y<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">

<form method="post">
<input type="text" name="nom"></br></br>
<input type="text" name="prenom"></br></br>
<input type="number" name="age"></br></br>
<input type="submit" value="Add" name="sub">
</form>

<?php
$con=mysqli_connect("localhost","root","","master_php");
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];
$req="INSERT INTO personne (nom,prenom,age) VALUES ('$nom','$prenom','$age')";
$query=mysqli_query($con,$req);
if(isset($query)){

	echo "<h1> success </h1>";
}
else {

	echo "<h1> error </h1>";
}
?>
	<?php
	/* 
	Étape 1 - Créer une base de données dans PHPmyadmin

	Étape 2 - Créez un tableau comme celui de la conférence

	Étape 3 - Insérez des données

	Étape 4 - Connectez-vous à la base de données et lisez les données 
	*/
	
	?>
	






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
