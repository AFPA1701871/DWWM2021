<?php
//Nom et prénom du joueur - Je mets tout en minuscule - Puis je mets la première lettre en majuscule
function nomJoueur(){
    $nom = ucwords(strtolower(readline("Entrez votre nom : ")));
    $prenom = ucwords(strtolower(readline("Entrez votre prénom : \n" )));
    $joueur = $prenom. " " .$nom;
    echo "\n";
    echo "Bonjour ". $prenom." ". $nom. " le jeu va commencer : \n";
    return $joueur;
}

//Demande à l'utilisateur d'entrer son choix tant que mauvaise saisie
function choixUtilisateur(){
    do {
        $reponse = readline("Choissez entre : 1-Pierre |  2-Feuille  3-Ciseaux :\n ");
        echo "\n";
    } while ($reponse != 1 && $reponse != 2 && $reponse !=3);
    return $reponse;
}

//Détermine un nombre aléatoire entre 1 et 3
function nombreAleatoire(){
    $nbreAleatoire = rand(1,3);
    if ($nbreAleatoire == 1) {
        return 1;
    }elseif ($nbreAleatoire == 2) {
        return 2;
    }else {
        return 3;
    }
}

//En fonction du choix de l'utilisateur et du nombre aléatoire on détermine qui a gagné
function resultat($saisieUser){
    $nbAleatoire = nombreAleatoire();
    if (($saisieUser==1 && $nbAleatoire==3) || ($saisieUser==2 && $nbAleatoire==1) || ($saisieUser==3 && $nbAleatoire==2)) {
        echo "\n";
        echo "Vous avez gagné, BRAVO!!!!!!\n";
        $victoire = true;
        return $victoire;
    }elseif ($saisieUser == $nbAleatoire) {
        echo "\n";
        echo "Egalité, Zut!! \n";
    }else {
        echo "\n";
        echo "Dommage Perdu!!!";
    }
}

//Insertion du vainqueur dans le fichier winner
function insertionVainqueur($theWinner){
    $fp = fopen("winner.txt", "a+");
    fputs( $fp, $theWinner . "\n");
    fclose($fp);

}

//Fonction demande à l'utilisateur s'il veut voir la liste des gagnants
function voirListeGagnant(){
    do {
        $demande = readline("Voulez-vous voir la liste des gagnants ? o pour oui ou n pour non : ");
    } while (($demande != "o") && ($demande != "n"));
    return $demande;
}

//Affiche la liste des vainqueurs en fonction de la réponse du joueur
function afficheVainqueurs(){
    $fp = fopen("winner.txt", "r");
    echo "Voici la liste des vainqueurs du CHIFOUMI \n ";
    $compteur = 0;
    while (!feof($fp)) {
        $ligne = fgets($fp,4096);
        $compteur++;
        echo $compteur." - " .$ligne;
    }
}
?>