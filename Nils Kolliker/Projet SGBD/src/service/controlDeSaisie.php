<?php
//vérifie si une ligne complete est dans la table
//prend en entré un tableau de string et l'emplacement d'un fichier
//retourne un booleen
function esCeDansLaTable($tableau,$fichier){
    $fp = fopen($fichier, "r"); //on saute la ligne 1
    $ligne = fgets($fp,4096);  //permet de lire la ligne complete
    while (!feof($fp)){
        $ligne = fgets($fp,4096);
        $ligneTab=couperSelonLeCaractère($ligne,";");
        if ($tableau==$ligneTab){
            return true;
        }
    }
    fclose($fp);
    return false;
}

//vérifie qu'une chaine finie par un point virgule
//prend en entré une chaine
//retourne un booleen
function pointVirguleFinal($string){
    if (substr($string,-1)==";"&&substr_count($string,";")==1){
        return true;
    }
    return false;
}

//vérifien qu'une chaine contient bien une paire de parentheses et qu'elle se ferme bien à l'avant dernier charactère
//prend en entré une chaine
//retourne un booleen
function lesParenthesesSontLaEtBienPlace($string){
    if(substr_count($string,"(")==1&&substr_count($string,")")==1&&substr($string,-2,1)==")"){
        return true;
    }
    return false;
}

//vérifie que l'utilisateur a rentré une ligne de commande valide, affiche l'erreur si il y en a, et retourne son type (ou false en cas d'erreur) /!\ quit renvoit aussi false mais n'affiche pas d'erreur
//prend en entré une chaine 
//retourne une chaine indiquant le type de ligne de commande ou false
function ligneDeCommandeValide($string){
    if (strtolower($string)=="help"){
        return "help";
    }
    if (strtolower($string)!=QUIT&&$string!=""){
        if (pointVirguleFinal($string)){
            if (strpos(strtoupper($string),"CREATE TABLE ")===0){
                if (lesParenthesesSontLaEtBienPlace($string)){
                    return "createTable";
                }else{
                    echo "erreur de syntaxe: les parenthèses posent problème\n";
                }            
            }else if(strpos(strtoupper($string),"INSERT INTO ")===0&&strpos(strtoupper($string)," VALUES(")!==false){
                if(lesParenthesesSontLaEtBienPlace($string)){
                    return "insertInto";
                }else{
                    echo "erreur de syntaxe: les parenthèses posent problème\n";
                }
            }else if(strpos(strtoupper($string),"SELECT * FROM ")===0&&strpos(strtoupper($string),"ORDER BY")==false){
                return "selectFrom";
            }else if (strpos(strtoupper($string),"SELECT ")===0&&strpos(strtoupper($string),"*")==false&&strpos(strtoupper($string)," FROM")!==false){
                return "select";
            }else if(strpos(strtoupper($string),"SELECT * FROM ")===0&&(strpos(strtoupper($string)," ASC;")!==false||strpos(strtoupper($string)," DESC;")!==false)){
                return "orderBy";
            }else{//rajouter du }else if{ devant ce }else{ pour rajouter de la ligne de commande
                echo "erreur de syntaxe: je ne comprend pas du tout l'expression\npour de l'aide pour la syntaxe, tapez 'help'\n";
            }
        }else{
            echo "erreur de syntaxe: l'instruction doit se finir par un point virgule et ne pas en contenir d'autre\n";
        }
    }
    return false;
}

//renvois vrai si tous les parametres en entré sont de 25 char ou moins et faux si au moins un string fait plus de 25 char
//prend un tableau de string
//retourne un booleen
function moinsDe25($tabString){
    foreach ($tabString as $string){
        if (strlen($string)>25){
            echo "erreur : overflow, longueur maximal des valeurs des tables = 25\n";
            return false;
        }
    }
    return true;
}

//renvois vrai si tous les parametres en entré sont d'au moins 1 chat et faux si au moins un est vide
//prend un tableau de string
//retourne un booleen 
function nonNul($tabString){
    foreach ($tabString as $string){
        if (strlen($string)==0){
            echo "erreur : une valeur de la table est vide\n";
            return false;
        }
    }
    return true;    
}

//renvois vrai si le string en entré est non vide, faux sinon
//prend un string
//retourne un booleen
function tableVide($nomDuFichier){
    if ($nomDuFichier==""){
        echo "erreur : le nom de la table est vide\n";
        $vide=true;
    }else{
        $vide=false;
    }
    return $vide;
}

//vérifie si un fichier existe et si il doit ou non exister
//prend en entré un nom de fichier sous forme de string et un boolean (si il est à vrai, le fichier doit exister, sinon, il ne doit pas)
//retourne un booleen
function fichierDoitExister($nomDuFichier,$boolean){
    if ($boolean){
        if (!file_exists($nomDuFichier)){
            echo "erreur : la table n'existe pas\n";
            return false;
        }
    }else{
        if (file_exists($nomDuFichier)){
            echo "erreur : table déjà existante\n";
            return false;
        }
    }
    return true;
}

//vérifie qu'il n'y a pas de doublon dans les entetes
//prend en entré les entetes sous forme de string
//retourne un booleen
function sansDoublon($nomDesEntetes){
    if (couperSelonLeCaractère($nomDesEntetes,";")!=array_unique(couperSelonLeCaractère($nomDesEntetes,";"))){
        echo "erreur : doublon dans les entetes\n";
        return false;
    }
    return true;
}

//vérifie que le nombre de valeur corespond au nombre de champ
//prend en entré 2 string
//retourne un booleen
function memeNombreDePointVirgule($string1,$string2){
    if (substr_count($string1,";")!=substr_count($string2,";")){
        echo "erreur : le nombre de valeur ne corespond pas au nombre de champ\n";
        return false;
    }
    return true;
}

//vérifie la présence et la position des chevrons
//prend en entré un string
//retourne un booleen
function presenceDesChevrons($string){
    $tableau=couperSelonLeCaractère($string.",",",");
    for ($i=0;$i<count($tableau);$i++){
        if (substr($tableau[$i],-1)!="'"||strpos($tableau[$i],"'")!==0||substr_count($tableau[$i],"'")!=2){
            echo "erreur : problème de chevrons\n";
            return false;
        }
    }
    return true;
}

//vérifie que les valeurs d'un tableau de dim 1 sont bien dans l'entete d'un tableau de dim2
//prend en entré un tableau de dim 1 et un tableau de dim 2
//retourne un booleen
function cEstDansLEntete($tableauDim1,$tableauDim2){
    for ($i=0;$i<count($tableauDim1);$i++){
        if(array_search($tableauDim1[$i],$tableauDim2[0])===false){
            echo "erreur: un nom de champ n'existe pas\n";
            return false;
        }
    }
    return true;
}

?>