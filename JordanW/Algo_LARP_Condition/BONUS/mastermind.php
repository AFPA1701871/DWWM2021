<?php

    //$strAleatoire == "";
    $arrayAleatoire = array(rand(0,9), rand(0,9), ran(0,9), rand(0,9),rand(0,9));
    Echo $arrayAleatoire;


    $intEssai = 0;
    $strMaProposition = "";
    $intGagne=0;

    // Tant que nombre essai OK et NON gagné 
    while($intEssai <=20 && $intGagne ==0)
    {    
        $intEssai += + 1;
       
        echo $arrayAleatoire;
        echo '';

        echo 'Saisir 5 chiffres : ';

        $strMaProposition = readline('Saisir 5 chiffres :');

        $arrayMaProposition(0)= substr($strMaProposition,1,1);
        $arrayMaProposition(1)= substr($strMaProposition,1,1);
        $arrayMaProposition(2)= substr($strMaProposition,1,1);
        $arrayMaProposition(3)= substr($strMaProposition,1,1);
        $arrayMaProposition(4)= substr($strMaProposition,1,1);
        $arrayMaProposition(5)= substr($strMaProposition,1,1);

        echo $arrayMaProposition;

        $strResultat = "";

        //Boucler sur mes caracteres
        for($intCompt=0; $intCompt<5; $intCompt++) 
        { 
            //Tester JUSTE v / x
            //Boucler sur les caracteres de mastermind
    
            //Test la concordance du caractere
            if ($arrayMaProposition($intCompt)=($arrayAleatoire($intCompt))) 
            {
                $arrayResultat($intCompt)="v";
            }
            else {
                $arrayResultat($intCompt)="x";
            }  
        }

        echo $arrayResultat;

        //Boucler sur le resultat
        for ($intCompt=0; $intCompt<5; $intCompt++) 
        {    
            if($arrayResultat(intCompt) == "x")
            {
                //Boucler dans ma propososition
                for ($intCompt2=1; $intCompt2 < 5 ; $intCompt2++) 
                { 
                    //Si X
                    if ($arrayMaProposition($intCompt)== $arrayAleatoire($intCompt2) && $arrayResultat($intCompt2)=="x")
                    {
                        $arrayResultat($intCompt)="o";
                    }    
                }
            }
        }
    }
?>