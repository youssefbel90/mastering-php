<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

	/*  
	Étape 1: Créez une classe appelée Chien

	Étape 2: Définissez certaines propriétés pour le Chien, l'exemple, la couleur des yeux, le nez ou la couleur de la fourrure

	Étape 4: Créez une méthode nommée AfficherTout qui fait écho à toutes les propriétés

	Étape 5: Instanciez la classe / créez l'objet et appelez-le pitbull

	Étape 6: Appelez la méthode AfficherTout
	
	*/

	
	?>
<?php
class Chien {
  // Properties
  public $name;
  public $colorofEyes;
  public $couleur;



  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_colorofEyes($colorofEyes) {
    $this->colorofEyes = $colorofEyes;
  }
  function get_colorofEyes() {
    return $this->colorofEyes;
  }
  function set_couleur($couleur) {
    $this->couleur = $couleur;
  }
  function get_couleur() {
    return $this->couleur;
  }
}
$chienPolice = new Chien();
$manelois = new Chien();
$Totomtom= new Chien();
$chienPolice->set_name('chienPolice');
$manelois->set_name('Manelois');

echo $chienPolice->get_name();
echo "<br>";
echo $manelois->get_name();

?>



</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>