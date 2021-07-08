<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  include('connexion.php') ; include('fonction.php'); include('requete.php');

/*
echo "$requete";
*/
?>


  <div class="row">
    <div class="col">

      <br>
      <br>

      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
              <?php echo $thead; ?>
            </tr>
        </thead>
        <tbody>


      <?php
        foreach  ($bdd->query($requete) as $row_t1) {
        echo "<tr> \n";
          foreach ($_POST['Colonne'] as $key_c ) {
            $explode=explode("|",$key_c);
            $oui=Oui($explode[0],$row_t1[$explode[0]]);
          echo "<td>".$oui."</td> \n";
          }
        echo "</tr> \n";
        }
      ?>


      </div>
    </div>


  </tbody>
</table>



<script type="text/javascript">

$(document).ready(function() {
  $('#example').DataTable( {
    "language": {
            "url": "../Language/fr.txt"
        },

    "lengthMenu": [[ 25, 50, 100 , 500 ,-1 ],[ 25, 50, 100 , 500 ,"Tout" ]] ,
    dom: 'lBfrtip',
    buttons:  [ 'csv', 'excel','pdf']

  } );


});
</script>








  </body>
</html>
