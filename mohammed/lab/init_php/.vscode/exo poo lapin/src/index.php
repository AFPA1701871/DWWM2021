<?php
  function chargementClass($class){
    require( "./entities/".$class.'.class.php');
  }
spl_autoload_register('chargementClass');

$lapin=new lapin ();
echo " le lapin ".$lapin->get_couleur(). " a ".$lapin->get_pattes()." pattes a ete crée\n";
$lapin->senourir()."\n";
$chasseur=new chasseur ("bazoka");
echo " le chasseur ".$chasseur->get_nom(). " avec son ".$chasseur->get_arme()." a ete crée\n";
do {
    $chasseur->deplacment()."\n";
    sleep(1);
    $lapin -> crier()."\n";
    echo "le chasseur ".$chasseur->get_nom()." tire sur le lapin avec son ".$chasseur->get_arme()." et le...\n";
    $test =$chasseur->chasser()."\n";
    if ($test==1) {
        sleep(1);
        echo " touche ...... :(\n";
        echo "le pauvre lapin ". $lapin->get_couleur()." est deceder\n";
    }
    else {
        sleep(1);
        echo " rate ...... :)\n";
        $lapin->  fuire()."\n";
      }  
} while ($test !=1);

?>