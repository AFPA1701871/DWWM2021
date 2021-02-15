<?php

    //Pour pouvoir aller chercher les différents fichiers
    require('./Services/function.php');
    function chargerClasse($classe){
        require ('./Entities/'.$classe.'.class.php');
    }
    spl_autoload_register('chargerClasse');

    $JN= new Employe('Neymar','Jean','1850389546458','1500.56','soudeur');
    $SJ= new Employe('Jeremy','Simon','179028955812','1700.47','assistant mécanicien');
    $OD= new Employe('Deray','Odile','285097154678','1900.14','magasinière');

    $tabEmploye=array($JN,$SJ,$OD);

    $AD= new Cadre('Deloin','Alain','1840259453666','2100.23','chef maintenance',$tabEmploye);
    
    $tabEmploye2=array($JN,$SJ,$OD,$AD);
    for($i=0;$i<count($tabEmploye2);$i++){
        $tabEmploye2[$i]->effectueSonJob();
    }

    $AD->manage($JN,$OD);
    $AD->augmenteUnSalaire($JN,10);
    $AD->augmenteUnSalaire($OD,20);

?>