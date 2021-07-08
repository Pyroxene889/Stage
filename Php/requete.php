<?php

/*
print_r($_POST);
*/

/*   */
function filtre($tab){

  $sql="";

    foreach ($tab as $filtre => $value) {
      if ($filtre=='Colonne' or $filtre=="Commission" or $filtre=="Commission2" or $filtre=="A_Commission" or $filtre=="A_Commission2" or $filtre=="example_length"
      or $filtre=="Composition" or $filtre=="Composition2" or $filtre=="Composition3" or $filtre=="Composition4") {
        if ($filtre=="Composition" or $filtre=="Composition2" or $filtre=="Composition3" or $filtre=="Composition4") {
          $sql=$sql."   AND "."(";
          $sql =$sql.$value."=1)";
        }
      }
      else {
      $sql =$sql."   AND "."(";
      if (count($value) == 1 ) {
        $sql = $sql.$filtre."= \"".$value[0]."\" ";
        $sql=$sql.")";
      }
      else {
        foreach ($value as $data) {

          $sql = $sql. $filtre."= \"".$data."\" OR ";
        }
        $sql =substr($sql,0,-3) .")";
      }
     }
    };

    return $sql;
}





function thead_colonne($filtre_colonne){

  $col="";
  $tab="";
  $var=[];

  foreach ($filtre_colonne as $key ) {


    $explode=explode("|",$key);
    $col=$explode[0].",".$col;
    $tab=$tab."<th>".$explode[1]."</th> \n";
  }

  $col=substr($col,0,-1);

  $var=$arrayName = array('thead' => $tab, 'Colonne' => $col );
  return $var;

}



function req_search($colonne,$filtre){

  $t1 = "SELECT  $colonne
         FROM composition
         INNER JOIN agence ON composition.Agence_id= Agence.idAgence
         INNER JOIN projet ON composition.Projet_id=projet.idProjet
         WHERE 1  $filtre ";
  return $t1;
}




$form=$_POST;
$filtre=filtre($form);

if (isset($_POST['Colonne'])) {
  $filtre_colonne=$_POST['Colonne'];
  $col=thead_colonne($filtre_colonne);
}
else {
  $col['thead']="<th>Nom Projet</th> \n";
  $col['Colonne']="Nom_Projet";
  $_POST['Colonne']=$arrayName = array('Nom_Projet' =>'Nom_Projet'  );
}



$thead=$col['thead'];
$colonne=$col['Colonne'];


$requete= req_search($colonne,$filtre);



?>
