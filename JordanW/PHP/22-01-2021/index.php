<?php 

    function chargementClass($classe){
        require('./entities/'. $classe .'.class.php');
    }
    spl_autoload_register('chargementClass');

    define ("NOMBRE_POINT",12);

    require ('fonctionsPOO.php');
    
    // Limitation de vitesse
    do{
        $intLimitation=readline("Saisir la limitation de vitesse : ");
    }while(is_int(!$intLimitation));

    // Creation du radar avec la limitation saisie
    $leRadar = new Radar($intLimitation);

    // Création des amendes
    $amendeLegere = new Amende(1,45);
    $amendeLourde = new Amende(3,90);
    $amendeGrave = new Amende(12,"Rendez-vous à la Gendarmerie !");

    // Saisie du nombre de voiture
    do{
        $intNombreVoiture=readline("Saisir le nombre de voiture : ");
    }while(is_int(!$intNombreVoiture) OR $intNombreVoiture<2);

    
    // Boucle sur le nombre de voiture pour la création de celle-ci
    for ( $i=1; $i <= $intNombreVoiture; $i++){

        $strImmatriculation= f_testerImmatriculation($i);
        //$strMarque = f_testerSaisie("la marque");
        //$strModele = f_testerSaisie("le modèle");
        //$strCouleur = f_testerSaisie("la couleur");

        //${ "voiture" . $i }  = new Voiture($strMarque,$strModele,$strImmatriculation,$strCouleur,NOMBRE_POINT); 
        ${ "voiture" . $i }  = new Voiture($strImmatriculation,NOMBRE_POINT); 
    }

    // Boucle jusqu'au retrait de permis
    do{
        // Boucle jusqu'a ce qu'une voiture se fait flasher
        $boolFlash=false;
        do{
            // Boucle sur le nombre de voiture pour l'accelaration
            for ( $i=1; $i <= $intNombreVoiture; $i++){

                // on recupere l'immatriculation
                $strImmatriculation = ${ "voiture" . $i }->getImmatriculation();
                    
                // Acceleration
                $intAcceleration = ${ "voiture" . $i }->accelerer();
                // Recuperer la nouvelle vitesse
                $intVitesse= ${ "voiture" . $i }->getVitesse();

                echo "La voiture immatriculée ".$strImmatriculation." vient d'accélerer de ".$intAcceleration."km/h ";
                echo "et roule désormais à ". $intVitesse."km/h"."\n";

                // Controle radar
                if($leRadar->controleVitesse($intVitesse)==true){
                    
                    echo "La voiture immatriculée ".$strImmatriculation 
                        ." a franchi la limitation à ".$intLimitation."km/h"."\n";
                    
                    // RDV Gendarmerie (enleve tous les points)
                    if(($intVitesse - $leRadar-> getLimitation())>20){
                        //echo "Amende : ".$amendeGrave-> getMontant()."\n";
                        $amendeGrave->afficherAmende();
                        //${ "voiture" . $i }->setMontantPV($amendeGrave->getMontant());
                        ${ "voiture" . $i }->enleverPoint($amendeGrave->getPoint());
                        
                    // 3 points - 90e
                    }elseif(($intVitesse - $leRadar-> getLimitation())>10){
                        $amendeLourde-> afficherAmende();
                        ${ "voiture" . $i }->setMontantPV($amendeLourde->getMontant());
                        ${ "voiture" . $i }->enleverPoint($amendeLourde->getPoint());
                    // 1 point - 45e
                    }elseif(($intVitesse - $leRadar-> getLimitation())>0){
                        $amendeLegere->afficherAmende();
                        ${ "voiture" . $i }->setMontantPV($amendeLegere->getMontant());
                        ${ "voiture" . $i }->enleverPoint($amendeLegere->getPoint());
                    }

                    // Vitesse de toutes les voitures à 0
                    for ( $i=1; $i <= $intNombreVoiture; $i++){
                        ${ "voiture" . $i }->initVitesse(0);
                    }
                    $boolFlash=true;
                }
                
            }
        }while($boolFlash=false);


        // test si retrait de permis
        $boolRetraitPermis=false;
        for ( $i=1; $i <= $intNombreVoiture; $i++){
            if((${ "voiture" . $i }->getNombrePoint())==0){
                $boolRetraitPermis= true;
            }
        }

    }while($boolRetraitPermis==false);

        $tabMEP[0]=strlen("Immatriculation");
        $tabMEP[1]=strlen("Nombre de point");
        $tabMEP[2]=strlen("Montant des PV");
        
        $tabVoitures[0][0]="Immatriculation";
        $tabVoitures[0][1]="Nombre de point";
        $tabVoitures[0][2]="Montant des PV";
        
        // Boucle sur le nombre de voiture pour l'accelaration
        echo "\n\n"."Fin de la course : "."\n";
        for ($i=1; $i <= $intNombreVoiture; $i++){
            
            $tabVoitures[$i][0]=${ "voiture" . $i }->getImmatriculation();
            $tabVoitures[$i][1]=${ "voiture" . $i }->getNombrePoint();
            $tabVoitures[$i][2]=${ "voiture" . $i }->getMontantPV();

            if(intval($tabMEP[0]) < strlen($tabVoitures[$i][0])){
                $tabMEP[0]=strlen($tabVoitures[$i][0]);
            }
            
            if(intval($tabMEP[1]) < strlen($tabVoitures[$i][1])){
                $tabMEP[1]=strlen($tabVoitures[$i][1]);
            }
            if(intval($tabMEP[2]) < strlen($tabVoitures[$i][2])){
                $tabMEP[2]=strlen($tabVoitures[$i][2]);
            }
        }
        
        
        for ($i=0; $i < count($tabVoitures); $i++) { 
            // Ligne intermediaire
            echo "+";
            echo f_repeter($tabMEP[0],"-")."+";
            echo f_repeter($tabMEP[1],"-")."+";
            echo f_repeter($tabMEP[2],"-")."+";
            echo "\n";
            // Ligne de valeur
            echo "|";
            echo $tabVoitures[$i][0];
            echo f_repeter(intval($tabMEP[0])-strlen($tabVoitures[$i][0])," ")."|";
            
            echo $tabVoitures[$i][1];
            echo f_repeter(intval($tabMEP[1])-strlen($tabVoitures[$i][1])," ")."|";
            
            echo $tabVoitures[$i][2];
            echo f_repeter(intval($tabMEP[2])-strlen($tabVoitures[$i][2])," ")."|";
            echo "\n";
        }
        
        // Derniere ligne
        echo "+";
        echo f_repeter(intval($tabMEP[0]),"-")."+";
        echo f_repeter(intval($tabMEP[1]),"-")."+";
        echo f_repeter(intval($tabMEP[2]),"-")."+";
        echo "\n";
    
        
?>  