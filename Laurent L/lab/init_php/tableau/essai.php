<?php

// do{
//     $deplacement = readline("Quel est votre choix ?  ");
//     var_dump($deplacement);
//     $deplacement2 = intval($deplacement);
//     var_dump($deplacement);
//     var_dump($deplacement2);
//     echo $deplacement2;
//     var_dump(is_int($deplacement));
//     var_dump(is_numeric($deplacement));
// }while ( (intdiv($deplacement,1)!=$deplacement ));

//$deplacement !== 0 && $deplacement !== 1 && $deplacement !== 2 && $deplacement !== 3 &&

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
print_r($arr);
// $arr est maintenant array(2, 4, 6, 8)

// sans un unset($value), $value est toujours une référence au dernier élément: $arr[3]

foreach ($arr as $key => $value) {
    // $arr[3] sera mis à jour avec chaque valeur de $arr...
    echo "{$key} => {$value} ";
    print_r($arr);
}
// ...jusqu'à ce que finalement la valeur de deuxième à dernière soit copiée sur la dernière valeur

// sortie :
// 0 => 2 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 2 )
// 1 => 4 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 4 )
// 2 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
// 3 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )




?>