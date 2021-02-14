<?php
require "./services/affichage.php";
require "./services/extracteurs.php";

function chargerClasse($classe){
    require "./entities/". $classe . ".class.php";
}

spl_autoload_register("chargerClasse");

do{
    $user=strtolower(readline("entrer en tant que client ou gestionnaire ? "));
}while($user!="client"&&$user!="gestionnaire");

if ($user=="client"){
    $nom=strtoupper(readline("entrer votre nom : "));
    $prenom=strtoupper(readline("entrer votre prénom : "));
    //afficher les articles avec description et prix unitaire
    //choix des articles et quantité (si article déjà choisi, on fusione les quantités) avec possibilité de valider l'achat
    //affichage du ticket et save
}else{
    do{
        $user=strtolower(readline("voir la liste des articles ? (O/N) "));
    }while($user!="o"&&$user!="n");
    while ($user=="o"){
        //affichage des articles avec description et prix unitaire
        do{
            $user=strtolower(readline("entrer un nouvel article ? (O/N) "));
        }while($user!="o"&&$user!="n");
        if($user=="o"){
            $libelle=readline("libelle de l'article : ");
            do{
                $prixUnitaire=readline("prix unitaire de l'article : ");
            }while(!is_numeric($prixUnitaire));
            $description==readline("description de l'article : ");
            $article=new Produit ($libelle,$prixUnitaire,$description);
            $article->save();
        }
    }
    do{
        $user=strtolower(readline("afficher les tickets de caisse ? (O/N) "));
    }while($user!="o"&&$user!="n");
    if($user=="o"){
        //affichage des tickets
    }
    do{
        $user=strtolower(readline("visualiser la somme totale des tickets ? (O/N) "));
    }while($user!="o"&&$user!="n");
    if($user=="o"){
        //affichage de la somme de tous les tickets
    }
}



?>