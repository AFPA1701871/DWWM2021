<?php
    function loadClass($class){
        require $class.".class.php";
    }

    spl_autoload_register("loadClass");

    $vanille = new vanille("sucre","Moule étoile","vanille");
    $vanille->etatActuel();
    $vanille->commeTuVeux();
?>