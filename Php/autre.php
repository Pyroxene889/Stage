<style media="screen">
.row {

  margin-top: 20px;
  /*padding-right: 100px;
  padding-left: 100px;*/


}

.col {
  padding: 10px;
  background: #f8f9fa;
}

.col-4 {
  padding: 10px;
  background: #f8f9fa;
}

.col-8 {
  padding: 10px;
  background: #f8f9fa;
}




.col-xs {
  border: solid 1px #6c757d;

}

.container-fluid{
  padding-right: 100px;
  border: solid 1px #6c757d;
}
</style>


<script type="text/javascript">
$(".chosen-select").chosen();
$('button').submit(function(){
        $(".chosen-select").val('').trigger("updated");

});


</script>


<?php



    $t1 = "SELECT  Code_Operation as c1,Nom_Projet as c2, Nom_Agence as c3,Candidat as c4,Jury as c5 ,Selectionne as c6,Laureat as c7
           FROM composition
           INNER JOIN agence ON composition.Agence_id= Agence.idAgence
           INNER JOIN projet ON composition.Projet_id=projet.idProjet
           WHERE 1  $sql ";
           foreach  ($bdd->query($t1) as $row_t1) {
             echo "<tr>";
             foreach ($_POST['Colonne'] as $key_c ) {
               echo "<td>";
               echo $row_t1[$key_c]
               echo "<td>";
             }


            echo "<tr>";
            echo "<td>".$row_t1['c1']."</td>" ;
            echo "<td>".$row_t1['c2']."</td>" ;
            echo "<td>".$row_t1['c3']."</td>" ;
            Oui($row_t1['c4']);
            Oui($row_t1['c5']);
            Oui($row_t1['c6']);
            Oui($row_t1['c7']);
            echo "</tr>";
           }
  ?>



 ?>



$sql="";

      foreach ($_POST as $filtre => $value) {

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
echo "$sql";


$('#Projet').change(function() {
var value = $(this).val();
    console.log(value);
    $.ajax({
            url: "index.php",
            type: 'post',
            data: {value: value},
            success: function(response){
                  console.log("success");
            }
        });
});
<!--
<br><br><br><br>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div>
    <div class="col-sm-4" style="background-color:lavenderblush;">.col-sm-4</div>
    <div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div>
    <br><br>
  </div>
  <div class="row">
    <div class="col-sm-1" style="background-color:lavender;">.col-sm-4</div>
    <div class="col-sm-10" style="background-color:lavenderblush;">.col-sm-4</div>
    <div class="col-sm-1" style="background-color:lavender;">.col-sm-4</div>

    <p>Je sais comment tu t'appelles, hé hé. Tu t'appelles  echo htmlspecialchars($_POST['prenom']);  !</p>

    <br><br><br><br>
  </div>
</div>
-->
Filtres : <?php if (isset($_POST['Projet'])) {echo $_POST['Projet']; }; if (empty($_POST['Projet']) or empty($_POST['Agence'] )) { }else {echo " ;";}?>
<?php if (isset($_POST['Agence'])) {echo $_POST['Agence']; };?>


    <script type="text/javascript">

    function isEmpty(){
          var str = document.forms['myForm'].firstName.value;
          if( !str.replace(/\s+/, '').length ) {
               alert( "Le champ Name est vide!" );
               return false;
          }
        }
    </script>



    <?php
      $Nom_Agence =  'SELECT Nom_Agence as Agence FROM Agence  GROUP by  Nom_Agence';
      foreach  ($bdd->query($Nom_Agence) as $row2) {
        $selected="";
        if (isset($_POST['Nom_Agence'])) {
          if (in_array($row2['Agence'],$_POST['Nom_Agence'])) {
            $selected="selected";
          }
         }
          echo "<option value=\"".$row2['Agence']."\" ".$selected." >".$row2['Agence']."</option>";

      };
    ?>
<?php

    /*
    $sql =  'SELECT Nom_Projet as Projet FROM projet  WHERE idProjet>10 ';
    foreach  ($bdd->query($sql) as $row) {
        print $row['Projet'] . "<br>";
    }
    */?>    /*

        $count= $bdd->query("SELECT Count(*) as c
             FROM composition
             INNER JOIN agence ON composition.Agence_id= Agence.idAgence
             INNER JOIN projet ON composition.Projet_id=projet.idProjet
             WHERE 1  $projet $agence
             ");










        $count2= $count->fetch();

 $('#Colonne').attr('selected', 'selected').val();
      if (isset($count2)) {
        echo  $count2['c']." résultat(s)";
      };
      echo "<br> <br>";

      echo "<table class=\"table-sort\" >";

      echo ("
        <thead>
         <tr>
            <th class=\"table-sort\">Code Operation</th>
            <th class=\"table-sort\">Projet</th>
            <th class=\"table-sort\">Agence</th>
            <th class=\"table-sort\">Candidat</th>
            <th class=\"table-sort\">Jury</th>
            <th class=\"table-sort\">Selectionne</th>
            <th class=\"table-sort\">Laureat</th>
          </tr>
      </thead>
      <tbody>
            ");
      $t1 = "SELECT  Code_Operation as c1,Nom_Projet as c2, Nom_Agence as c3,Candidat as c4,Jury as c5 ,Selectionne as c6,Laureat as c7
             FROM composition
             INNER JOIN agence ON composition.Agence_id= Agence.idAgence
             INNER JOIN projet ON composition.Projet_id=projet.idProjet
             WHERE 1  $projet $agence
             ";
      foreach  ($bdd->query($t1) as $row_t1) {
        echo "<tr>";
        echo "<td>".$row_t1['c1']."</td>" ;
        echo "<td>".$row_t1['c2']."</td>" ;
        echo "<td>".$row_t1['c3']."</td>" ;
        Oui($row_t1['c4']);
        Oui($row_t1['c5']);
        Oui($row_t1['c6']);
        Oui($row_t1['c7']);
        echo "</tr>";
      }
      echo "
      </tbody>
      </table>";
  */
