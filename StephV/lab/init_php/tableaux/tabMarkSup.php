<?php
$nbMarks=0;
$nbMarks=readline("Entrer le nombre de notes à saisir ");

for ($i=0;$i<$nbMarks;$i++){
    $marks[$i]=readline("note ");  
}
$sum=0;
for ($i=0;$i<$nbMarks;$i++){
    $sum=$sum+$marks[$i];
} 
$mean=0; 
$mean=$sum/count($marks); 
echo "la moyenne est de ".$mean."\n";
print_r($marks);
$sup=0;
for ($i=0;$i<count($marks);$i++){
    if ($marks[$i]>=$mean){
        $sup=$sup+1;
    }
}
echo $sup;
?>