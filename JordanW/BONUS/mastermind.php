<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        //$strAleatoire == "";
        $arrayAleatoire = array(rand(0,9), rand(0,9), rand(0,9), rand(0,9),rand(0,9));
        print_r($arrayAleatoire);

        $arrayAleatoire = array();
        $arrayMaProposition = array();
        $arrayResultat = array();

        $intEssai = 0;
        $strMaProposition = "";
        $boolGagne=0;

        // Tant que nombre essai OK et NON gagné 
        while($intEssai <=20 && $boolGagne ==false)
        {    
            $intEssai += 1;

            print_r($arrayAleatoire);
            echo '';

            echo 'Saisir 5 chiffres : ';

            $strMaProposition = htmlspecialchars($_POST['saisie']);

            $arrayMaProposition[]= substr($strMaProposition,1,1); 
            $arrayMaProposition[]= substr($strMaProposition,2,1);
            $arrayMaProposition[]= substr($strMaProposition,3,1);
            $arrayMaProposition[]= substr($strMaProposition,4,1);
            $arrayMaProposition[]= substr($strMaProposition,5,1);

            print_r($arrayMaProposition);

            //Boucler sur mes caracteres
            for($intCompt=0; $intCompt<5; $intCompt++) 
            { 
                //Tester JUSTE v / x
                //Boucler sur les caracteres de mastermind

                //Test la concordance du caractere
                if ($arrayMaProposition($intCompt) == $arrayAleatoire($intCompt)) 
                {
                    $arrayResultat[$intCompt]="v";
                }
                else 
                {
                    $arrayResultat[$intCompt]="x";
                }  
            }

            print_r ($arrayResultat);

            //Boucler sur le resultat
            for ($intCompt=0; $intCompt<5; $intCompt++) 
            {    
                if($arrayResultat[$intCompt] == "x")
                {
                    //Boucler dans ma propososition
                    for ($intCompt2=1; $intCompt2 < 5 ; $intCompt2++) 
                    { 
                        //Si X
                        if ($arrayMaProposition[$intCompt]== $arrayAleatoire[$intCompt2] && $arrayResultat[$intCompt2] <> "v" && $arrayResultat[$intCompt2] <> "o")
                        {
                            $arrayResultat[$intCompt]="o";
                        }    
                    }
                }
            }
        }
    ?> 
    </body>
</html>      