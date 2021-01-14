
<?php
define("LETTRE_COLONNE","ABCDEFGH");
define("CHIFFRE_LIGNE","12345678");
define("LISTE_MES_PIONS","PTCFQK");
define("LISTE_SES_PIONS","ptcfqk");
define("NOMBRE_LIGNE",8);
define("NOMBRE_COLONNE",8);
define("CARACTERE_VIDE_ECHIQUIER","-");

require("fonctionEchec.php");

//Afficher les echecs
$tabEchec = f_initialiserEchec();


//Faire le toss
$boolMonTour = false;
$boolFini = false;

do {
    !$boolMonTour;
    //tour
    //Afficher l'echequier
    f_afficherEchec($tabEchec);
    //Saisie -> test correct
    do {
        $strCasePion = strtoupper(readline("Saisir le pion a déplacer (lettre/chiffre) : "));

        $intCaseLignePion = strpos(CHIFFRE_LIGNE,substr($strCasePion,1,1));
        $intCaseColonnePion = strpos(LETTRE_COLONNE,substr($strCasePion,0,1));
        
        $boolSortir = true;
        if($intCaseLignePion===false OR $intCaseColonnePion===false){
            $boolSortir=false;
        }

    //Test correspond a un pion a moi
    }while($boolSortir==false);
    
    //Si c'est un caractere de case vide
    //ou case de l'adversaire
    if((strpos(LISTE_MES_PIONS,$tabEchec[$intCaseLignePion][$intCaseColonnePion])=== false) OR
                        ($tabEchec[$intCaseLignePion][$intCaseColonnePion]==CARACTERE_VIDE_ECHIQUIER)){
        echo "\n"."Aucun de tes pions se trouve à la case ". $strCasePion." !"."\n";
    }else{
        echo "Ok,c'est un de tes pions."."\n";
        //Demande deplacer -> test si saisie correct
        do {
            do {
                $strCaseDeplacement = strtoupper(readline("Saisir la case a visée pour ce coup (lettre/chiffre) : "));

                $intCaseLigneDeplacement = strpos(CHIFFRE_LIGNE,substr($strCaseDeplacement,1,1));
                $intCaseColonneDeplacement = strpos(LETTRE_COLONNE,substr($strCaseDeplacement,0,1));
                
                $boolSortir = true;
                if($intCaseLigneDeplacement===false OR $intCaseColonneDeplacement===false){
                    $boolSortir=false;
                }
            }while($boolSortir==false);
            
            //ligne et colonne du deplacement
            $intCaseLigneDeplacement = strpos(CHIFFRE_LIGNE,substr($strCaseDeplacement,1,1));
            $intCaseColonneDeplacement = strpos(LETTRE_COLONNE,substr($strCaseDeplacement,0,1));
            //Test si deplacement OK
        }while(f_deplacement($tabEchec,$intCaseLignePion,$intCaseColonnePion,$intCaseLigneDeplacement,$intCaseColonneDeplacement));
        
        //Remplacer l'ancien emplacement par vide et nouveau par le pion
        $tabEchec[$intCaseLigneDeplacement][$intCaseColonneDeplacement]=$tabEchec[$intCaseLignePion][$intCaseColonnePion];
        $tabEchec[$intCaseLignePion][$intCaseColonnePion]=CARACTERE_VIDE_ECHIQUIER;

        //Test si pion est ligne en face
        if($tabEchec[$intCaseLigneDeplacement][$intCaseColonneDeplacement]=="P" && $intCaseLigneDeplacement==7){
            //Demander quelle pion il veut devenir
            do {
                $strPionTransforme = strtoupper(readline("Quel pion veux tu devenir : P(pion) T(tour) C(cavalier) F(fou) K(roi) Q(reine) : "));
            }while(strlen($strPionTransforme)!=1 OR strpos(LISTE_MES_PIONS,$strPionTransforme)===false);
            $tabEchec[$intCaseLigneDeplacement][$intCaseColonneDeplacement]=$strPionTransforme;
            echo "final";
        }
    }

    if($boolMonTour){

    }

    //f_tourEchec();

}while($boolFini=true);

?>