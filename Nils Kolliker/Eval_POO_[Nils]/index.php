<?php

function chargerClasse($classe){
    require "./entities/". $classe . ".class.php";
}
spl_autoload_register("chargerClasse");

do{
$trace=readline("executer avec ou sans trace ? (0: sans / 1: avec) :");//à cause de ce truc, il y a des echo partout, ça sert uniquement pour l'affichage
}while(!ctype_digit($trace)||($trace!=0&&$trace!=1));

echo"\n";//juste pour passer une ligne

$deDuDestin=new De;
$heroAuRabais=new Joueur;
while($heroAuRabais->estVivant()){
    if ($deDuDestin->lanceLeDe()<4){//une chance sur 2
        $monstreEnCarton=new MonstreFacile();
    }else{
        $monstreEnCarton=new MonstreDifficile();
    }
    while($heroAuRabais->estVivant()){
        $heroAuRabais-> attaque( $monstreEnCarton, $deDuDestin, $trace);
        if(!$monstreEnCarton->getItIsAlive()){//si le monstre est vaincu, on sort (le joueur va combattre un autre monstre)
            if($trace){
                echo "************************************  Monstre Suivant\n";
            }
            break;
        }
        $monstreEnCarton-> attaque($heroAuRabais,$deDuDestin, $trace);
    }
}
                                                                                            //si on en croit les chiffres des exemples de l'énoncé, un monstre facile vaincu fait perdre 62 point et un monstre difficile vaincu en fait gagner 110... on va rester sur 1 et 2 comme c'est noté...
echo"Dommage, vous êtes mort...\nCela dit, vous avez tué ".$heroAuRabais->getMontreFacileVaincu()." monstres faciles et ".$heroAuRabais->getMontreDifficileVaincu()." monstres difficiles.\nVous avez ".($heroAuRabais->getMontreFacileVaincu()+(2*$heroAuRabais->getMontreDifficileVaincu()))." points .\n";
?>