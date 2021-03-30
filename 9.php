<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		



			<a href="9.php?var=<?php echo $noprem="khalil", $nom="manal" ?>"  name="var" method="GET"> click here</a>


	<?php 

	/*  
	Étape 1 - Créez un lien indiquant Cliquez ici et définissez le lien href pour passer certains paramètres et utiliser le super global GET pour le voir

	Étape 2 - Définissez un cookie qui expire dans une semaine

	Étape 3 - Démarrez une session et définissez-la sur la valeur, quelle que soit la valeur souhaitée. 
	*/
	
	
	?>
	<?php
$cookie_name = "rak";
$cookie_value = "dad";
setcookie($cookie_name, $cookie_value, time() + (7*24 *3600), "/"); 
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<?php
// Start the session
session_start();

// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>