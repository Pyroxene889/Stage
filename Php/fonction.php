<?php

function Oui($col,$var){

    if ($col=="Jury" or $col=="Selectionne" or $col=="candidat" or $col=="Laureat" ) {

      if ($var==0) {
        $f= "Non" ;
      }
      else {
        $f = "Oui";
      }
    }
    else {
      $f= $var;
    }
  return $f;
}


function Nom_colonne($col){

  
}



 ?>
