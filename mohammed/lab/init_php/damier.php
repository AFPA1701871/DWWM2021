
<?php 
//affichage du dammier
for ($i=0; $i <8 ; $i++) { 
    echo $tab[$i]=""."\n";
    for ($j=0; $j <12 ; $j++) { 
        $tab[$i][$j]="0";
        echo $tab[$i][$j];
    }
}
$depHori=readline(" entrer deplacement Horizontale  ");
$depverti=readline(" entrer deplacement verticale ");
while ($depHori<=0 or $depHori>=13) 
     {
        $depHori=readline("entrez position  horizontale valide");
    }  
    while ($depverti<=0 or $depverti>=9) 
     {
        $depverti=readline("entrez position  verticale valide");
    } 
$tab[$depHori-1][$depverti-1]="x";
print_r ($tab);
$stop=1;
while ($stop != 0) {
      

$deplacement=readline("pour se deplacer HD=0 BD=1 BG=2 HG=3");
if ($deplacement==0) {
   
    $tab[$depHori-2][$depverti]="x";
    print_r ($tab);
$tab[$depHori-1][$depverti-1]= $tab[$depHori-2][$depverti];
    
       
}
if ($deplacement==1) {
    
    $tmp = $tab[$depHori][$depverti];
    $tab[$depHori][$depverti] =$tab[$depHori-1][$depverti-1];
   $tab[$depHori-1][$depverti-1] = $tmp;
    print_r ($tab);   
}
if ($deplacement==3) {
    $tab[$depHori][$depverti-2]="x";
    $tab[$depHori-2][$depverti]="0";
    print_r ($tab);   
}
if ($deplacement==2) {
    $tab[$depHori-2][$depverti-2]="x";
    $tab[$depHori][$depverti]="0";
    print_r ($tab);   
}
$stop=readline(" pour continuer 1 pour arret 0");
}
?>