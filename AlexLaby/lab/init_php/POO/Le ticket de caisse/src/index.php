<?php
    //Pour pouvoir aller chercher mes autres fichiers
    require('./Entities/function.php');
    function chargerClasse($classe){
        require ('./Entities/'.$classe.'.class.php');
    }
    spl_autoload_register('chargerClasse');

?>