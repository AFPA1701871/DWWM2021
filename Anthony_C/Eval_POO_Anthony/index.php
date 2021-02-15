<?php
    //Load tout les fichiers qu'on a besoin dans le code.
    require "./services/function.php";
    function loadClass($class){
        require "./entities/".$class.".class.php";
    }

    spl_autoload_register("loadClass");

    //Demande si l'utilisateur veux un mode avec ou sans trace.
    do {
        $traceOrNotTraceThatsTheQuestion=readline("Voulez vous activer le mode trace ? (O/N) : ");
    } while (preg_match("#^[o]$#i",$traceOrNotTraceThatsTheQuestion)==false and preg_match("#^[n]$#i",$traceOrNotTraceThatsTheQuestion)==false);

    //Crée notre hero et notre dé.
    $hero=new Joueur(50);
    $de=new De();

    //Boucle do_while pour bouclé jusqu'a temps que le joueur est mort.
    do {
        if(rand(1,2)==1){
            $monstre=new MonstreFacile();
            do {
                $jetDuHero=$hero->jetDeDe($de);
                $jetDuMonstre=$monstre->jetDeDe($de);
                $monstre = $hero->attaque($jetDuHero,$jetDuMonstre,$monstre,$traceOrNotTraceThatsTheQuestion);
                if ($monstre->get_aliveOrDead()==1){
                    $hero = $monstre->attaque($jetDuMonstre,$jetDuHero,$hero,$de,$traceOrNotTraceThatsTheQuestion);
                }
                if($monstre->get_aliveOrDead()==2){
                    $hero->set_countMonstrefacile($hero->get_countMonstrefacile()+1);
                }
            } while ($monstre->get_aliveOrDead()==1 and $hero->get_PointDeVie()>0);
        }else{
            $monstre=new MonstreDifficile();
            do {
                $jetDuHero=$hero->jetDeDe($de);
                $jetDuMonstre=$monstre->jetDeDe($de);
                $monstre = $hero->attaque($jetDuHero,$jetDuMonstre,$monstre,$traceOrNotTraceThatsTheQuestion);
                if(strtolower($traceOrNotTraceThatsTheQuestion)=="o"){
                    echo "C'est un  Monstre Difficile\n";
                }
                if ($monstre->get_aliveOrDead()==1){
                    $hero =$monstre->attaque($jetDuMonstre,$jetDuHero,$hero,$de,$traceOrNotTraceThatsTheQuestion);
                    $hero = $monstre->magie($hero,$de,$traceOrNotTraceThatsTheQuestion);
                }
                if($monstre->get_aliveOrDead()==2){
                    $hero->set_countMonstreDifficile($hero->get_countMonstreDifficile()+2);
                }
            } while ($monstre->get_aliveOrDead()==1 and $hero->get_PointDeVie()>0);
        }
        if(strtolower($traceOrNotTraceThatsTheQuestion)=="o"){
            if ($hero->get_pointDeVie() > 0){
                echo "************************************  Monstre Suivant\n";
            }
        }
        sleep(1);
    } while ($hero->get_PointDeVie() > 0);
    echo "Dommage, vous êtes mort...\n";
    $bigMonstreTuer=($hero->get_countMonstreDifficile()/2);
    echo "Cela dit, vous avez tuer ".$hero->get_countMonstreFacile()." monstre faciles et ".$bigMonstreTuer." monstres difficiles.\n";
    echo "Vous avez ".$point=$hero->get_countMonstreFacile()+$hero->get_countMonstreDifficile()." points.";
?>