<?php

function chargementClasse($class){
    require('./entities/'.$class.'.php');
}
spl_autoload_register('chargementClasse');

$compte1 = new Compte("LDD");
$compte2 = new Compte("Livret A");
$compte3 = new Compte("LDD");
$compte4 = new Compte("Livret A");

$anakin = new Client("Anakin Skywalker",array($compte1,$compte2));
$leia = new Client("Leia Organa",array($compte3,$compte4));

$tabClient=[$anakin,$leia];

echo "Sélectionnez un client :\n";
echo "0 - Pour quitter \n";
echo "1 - Le client Anakin Skywalker \n";
echo "2 - La cliente Leia Organa \n";
$reponse1 = readline("");

if($reponse1 == 1){
    echo "Vous avez choisi le compte d'Anakin Skywalker \n";
   $client = $anakin; 
}elseif ($reponse1 == 2) {
    echo "Vous avez choisi le compte de la Princesse Leia \n";
    $client = $leia; 
} 
echo " \n";
echo "0 - Pour quitter \n";
echo "1 - Afficher les informations du client \n";
echo "2 - Afficher les infos d'un de ses comptes \n";
echo "3 - Réaliser un retrait si le solde le permet \n";
echo "4 - Réaliser un versement sur le compte \n";
echo "5 - Réaliser un virement sur un autre compte (sur son compte ou d'un autre client) \n";
echo "6 - Revenir au choix du client ";

$choix = readline("Que voulez-vous faire : ");
switch ($choix) {
    case 0:
        exit();
        break;
    case 1:
        $client->afficherSesInfos();
        break;
    case 2:
        $compteChoix = $client->choixDuCompte();
        echo $client->get_compteBancaire()[$compteChoix]->afficherInformationCompte();
        break;
    case 3:
        $compteChoix = $client->choixDuCompte();
        $montantRetrait = readline("Quel est le montant de votre retrait : ");
        $client->get_compteBancaire()[$compteChoix]->retrait($montantRetrait);
        break;
    case 4:
        $compteChoix = $client->choixDuCompte();
        $montantVersement = readline("Quel est le montant de votre versement :");
        $client->get_compteBancaire()[$compteChoix]->versement($montantVersement);
        break;
    case 5:
        $compteChoix = $client->choixDuCompte();
        $montantVirement = readline("Quelle est le montant de votre virement : ");
        $crediterCompte = readline("Entrez le compte à créditer : ");
        $client->get_compteBancaire()[$compteChoix]->virement($montantVirement,$crediterCompte);
        break;    
    default:
        # code...
        break;


    }

?>