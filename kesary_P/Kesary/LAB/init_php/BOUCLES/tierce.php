<?php
$nbreChevauxPartant = readline("Donnez le nombre de chevaux partant : ");
$nbreChevauxjoues = readline("DDonnez le nombre de chevaux joués : ");
//Vérification de la saisie utilisateur
while (! is_numeric($nbreChevauxPartant) || (! is_numeric($nbreChevauxjoues))) {
    echo "Recommencez \n";
    if (! is_numeric($nbreChevauxPartant)) {
        $nbreChevauxPartant = readline("Donnez le nombre de chevaux partant : ");
    }elseif(! is_numeric($nbreChevauxjoues)){
        $nbreChevauxjoues = readline("DDonnez le nombre de chevaux joués : ");
    }
}

//Initialisation des variables
    $nfactorielle = 1;
    $pfactorielle = 1;
    $factorielleNmoinsP = 1;

//Calcul factorielle de n!
for ($i=1; $i <= $nbreChevauxPartant ; $i++) { 
    $nfactorielle = $nfactorielle * $i;
}
//Calcul factorielle de p!
for ($i=1; $i <=  $nbreChevauxjoues ; $i++) { 
    $pfactorielle = $pfactorielle * $i; 
}
//Calcul factorielle (n-p)!
for ($i=1; $i <= $nbreChevauxPartant - $nbreChevauxjoues ; $i++) { 
    $factorielleNmoinsP = $factorielleNmoinsP * $i; 
}
//Calcul de X =n!/(n-p)! ET Y =n!/(p!*(n-p)!
$X = $nfactorielle/$factorielleNmoinsP;
$Y = $nfactorielle/($pfactorielle * $factorielleNmoinsP);
echo "Dans l'ordre : 1 chance sur ".$X. " de gagner\n";
echo "Dans le désordre : 1 chance sur ".$Y. " de gagner\n";

?>








