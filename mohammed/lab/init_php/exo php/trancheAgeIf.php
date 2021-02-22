<?php
echo " entrez age";
$age=readline();
if ($age<6) {
    echo " trop petit";
}
elseif (($age>=6) and ($age<=7)) {
    echo " poussin";
}
elseif (($age>=8) and ($age<=9)) {
    echo " pippule";
}
elseif (($age>=10) and ($age<=11)) {
    echo " minime";
}
elseif (($age>=12) ) {
    echo " cadet";
}






?>