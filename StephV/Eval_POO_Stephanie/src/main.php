<?php
//autoload pour charger les classes dans main
function chargerClasse($classe){
    require "./entities/". $classe . ".php";
}
spl_autoload_register("chargerClasse");


$paul=new Client();
echo $paul->afficher();
echo $paul->recevoir();
echo $paul->depenser();
echo $paul->epargner();
echo $paul->interets();

?>