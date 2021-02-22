<?php
    function autoLoadClasse($classe){
    require("./src/entities/".$classe.".php");
    }
    spl_autoload_register("autoLoadClasse");

    $newSniper=new Personnage("James","sergent");
    
    $newSniper->presentation();
  
    $newSniper->armee();
 
    $sniper= new Sniper("james","caporal",100);
    $sniper->presentation();
    $sniper->tirSniper();

    $sniper->armee();
?>