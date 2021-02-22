<?php
function chargerClasse($classe){
    require ("./entities/".$classe.".class.php");
}
spl_autoload_register('chargerClasse');


$player= new Joueur(50);
echo "Le héros commence son périple avec 50 points de vie\n";
echo "Il fait une mauvaise rencontre...\n";

a:
$intAlea=rand(1,6);
        if($intAlea<=3){
            $monstre= new MonstreFacile();
            echo "C'est un monstre facile\n";
        }elseif($intAlea>=4){
            $monstre= new MonstreDifficile();            
            echo "C'est un monstre difficile\n";
        }

do{
    $player->attack($monstre);
        $lancerPlayer=new De;
        $lancerPlayer->lanceLeDe();
        $lancerMonster= new De;
        $lancerMonster->lanceLeDe();
    if ($monster->alive){     
    $monstre->attack($joueur);
        $lancerPlayer=new De;
        $lancerPlayer->lanceLeDe2();
        $lancerMonster= new De;
        $lancerMonster->lanceLeDe2();   
        if (){
            $player->subitDegats();
            goto a;
        }
} while ($life>0 OR $alive=false);  



?>