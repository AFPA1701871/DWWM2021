<?php
  $nombre = readline( " entrez nombre"); //nombre a tester, line est ma variable
  echo $nombre;
  
   if ($nombre>0) {
      echo "  est positif"; //affichage
  }
       else if ($nombre<0) {
      echo"  est negative";//affichage
      }   
      else {
    echo "  la valeur est nulle ";//affichage
    }
    ?>