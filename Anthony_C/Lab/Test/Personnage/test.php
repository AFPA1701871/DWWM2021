<?php
    function loadClass($class){
        require $class.".class.php";
    }

    spl_autoload_register("loadClass");

    $summoner = new summoner("Yshtola","Rhul",100,"Book","Carbuncle");
    $summoner->welcome();
    $summoner->parler();
    $summoner->dance();
?>