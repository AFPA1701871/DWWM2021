<?php

//Fonction liste des produits à afficher
function f_listeProduits(){
    return [ new Produit("Mangue","Mangue bio","MGBio","1.99"),
             new Produit("Pomme","Pomme Jazz","PJazz","3.90"),
             new Produit("Poire","Poire Packam bio","PPBio","0.85"),
           /*  ["Orange","Orange Sanguinelli Cat 1","OSCat1"],
             ["Bananes","Bananes Cavendish Cat 1","BCCat1",1.19],
             ["Ananas","Ananas sweet","ASWee",1.89],
             ["Kiwi","Kiwi Vert Bio","KKiBio",3.69],
             ["Pomme","Pomme Juliet Bio Cat 2","PPJBio",0.85],
             ["Poire","Poire Conférence Cat 1","PPCCat1",2.59],
             ["Raisin","Raisin Blanc Cat 1","RRBCat1",3.59],
             ["Raisin","Raisin Mixte sans pépin","RRMSP",3.69],
["Pomme","Pink Lady Cripps Cat 1","PPLCCat",2.89]*/
];
}

//Afficher les produits
function f_afficherProduits(array $tab){
    $tab[]=array("Reference","Libelle","Description","PU TTC");
    
    foreach ($tab as $value) {
        $tab[] = array($value->_reference,$value->_libelle,$value->_description,$value->_prixUnitaireTTC);
        echo $value->_reference."  ".$value->_libelle."  ".$value->_description."  ".$value->_prixUnitaireTTC. "\n";
      //  echo $tableauAffichage[$value];
        
    }
   // var_dump($tableauAffichage);
   // return $tableauAffichage;
   


}
?>