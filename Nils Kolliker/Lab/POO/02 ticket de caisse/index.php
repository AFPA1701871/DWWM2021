<?php
function chargerClasse($classe){
    require "./src/entities/". $classe . ".class.php";
}

spl_autoload_register("chargerClasse");
/*
do{
    $user=strtolower(readline("entrer en tant que client ou gestionnaire ? "));
}while($user!="client"&&$user!="gestionnaire");

if ($user=="client"){

}else{


}
*/
for ($i=0;$i<2;$i++){
    $tableau1[$i]=new Produit("produit".($i+1),2*($i+1),"tata");
    $tableau2[$i]=($i+1);
    $tableau1[$i]->save();
}
$ticket=new Ticket("test","foireux",$tableau1,$tableau2);
$tableau1[0]->save();



echo $ticket->toutEnString();
$ticket->save();



?>