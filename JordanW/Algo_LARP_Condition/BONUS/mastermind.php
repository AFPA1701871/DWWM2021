<?php

    $strAleatoire == "";
    for($intCompt=1; $intCompt=5; $intCompt++)
    {
        $strAleatoire = $strAleatoire && RAND(0,9);
    }
    Echo $strAleatoire;


    $intEssai = 0;
    $strMaProposition = "";

    // Tant que nombre essai OK et NON gagné 
    while($intEssai <=20 && $strAleatoire <> $strMaProposition)
        
        $intEssai = $intEssai + 1;

        echo strAleatoire;
        $strMaProposition = readline("Saisir 5 chiffres : ");

        echo strMaProposition;

        $strResultat = ""
        //Boucler sur mes caracteres
        for ($intCompt=1; $intCompt<6; $intCompt++) 
        { 
            //Tester JUSTE oui / non
            //Boucler sur les caracteres de mastermind
    
            //Test la concordance du caractere
            echo substr($strMaProposition, (1-strlen($strMaProposition)));
            $carMaProposition = substr($strMaProposition, (1-strlen($strMaProposition)));
            $carAleatoire = substr($carAleatoire, (1-strlen($carAleatoire)));

            if ($carMaProposition = $carAleatoire) 
            {
                $strResultat = $strResultat &&  "v";
            } else 
            {
                $strResultat = $strResultat && "x";
            }
             
        }
        echo $strResultat;

        //Boucler sur le resultat
        for ($intCompt=; $intCompt < 6; $intCompt++) 
        { 
            $carResultat =substr(strResultat,intCompt,1);      
            if($carResultat = "x")
            {
                
                //Boucler sur les autres X (position+1)
                for ($intCOmpt2=$intCompt+1; $intCompt2 < 6 ; $intCOmpt2++) 
                { 
                    $carResultat= substr(strResultat,intCompt2,1);
                    //Si X
                    if(substr(strResultat,intCompt2,1)= "x")
                    {
                        //SI caractere =  car(intCompt resultat)
                        $carMaProposition1= substr(strMaProposition,intCompt2,1);
                        $carAleatoire = substr(strAleatoire,intCompt2,1); 
                        if (carMaProposition1 = carAleatoire)
                        {
                            for ($intCompt3=0; $intCompt3 < 6 ; $intCompt3++) 
                            { 
                                //strResultat = SOUSENSEMBLE(ENCHAINEstrMaProposition),1,intCompt3)+"o"+SOUSENSEMBLE(ENCHAINEstrMaProposition),2+intCompt3,longueur(5-(2+intCompt3))) 
                            }    
                        }
                            
                    }
                        
                }
                 
            }
        }
    }
}

?>