<?php
    function loadClass($class){
        require "./entities.".$class.".class.php";
    }

    spl_autoload_register("loadClass");

    Echo "**********Welcome**********";

    

?>