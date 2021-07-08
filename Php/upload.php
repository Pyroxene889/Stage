<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Dashboard</title>
    <link rel="stylesheet" href="../Css/test.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <title></title>
    </head>

    </head>
      <body>
        <?php include('connexion.php');

        ?>

      <!-- debut du formulaire -->

      <form name="ContactForm" method="post" action="">


      <!-- Select Projet-->
      <label> Projet </label><br>
      <select id="Projet" name="Nom_Projet[]" data-placeholder="Choisissez un projet" class="chosen-select" multiple style="width:350px;" tabindex="4">
            <?php
              $Nom_Projet =  'SELECT Nom_Projet as Projet FROM projet  GROUP by  Nom_Projet';
              foreach  ($bdd->query($Nom_Projet) as $row) {
                  echo "<option value=\"". $row['Projet'] . "\">". $row['Projet'] . " </option>";
              };
            ?>

      </select>


      <br>
      <br>
      <!-- Select Agence-->
      <label> Agence </label><br>
      <select id="Agence" name="Nom_Agence[]" data-placeholder="Choisissez un projet" class="chosen-select" multiple style="width:350px;" tabindex="4">
                <?php
                  $Nom_Agence =  'SELECT Nom_Agence as Agence FROM Agence  GROUP by  Nom_Agence';
                  foreach  ($bdd->query($Nom_Agence) as $row2) {
                    echo "<option value=\"". $row2['Agence'] . "\">". $row2['Agence'] . " </option>";
                    };
                ?>

      </select>
      <button type="submit" class="btn btn-default">Submit</button>
      </form>

    <div class="message_box" style="margin:10px 0px;">
    </div>


    <script src="https://code.jquery.com/jquery-1.12.3.js"   integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc="   crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"     crossorigin="anonymous"></script>
      <script>

      $(document).ready(function() {

         var delay = 2;
         $('.btn-default').click(function(e){
         e.preventDefault();
         var name = $('#name').val();

         $.ajax
           ({
             type: "POST",
             url: "ajax.php",
             data: "name="+name,

             success: function(data)
             {
               setTimeout(function() {
                 $('.message_box').html(data);
               }, delay);
             }
            });
            });
          });

      $(".chosen-select").chosen();
      $('button').ready(function() {
      $(".chosen-select").val('').trigger("chosen:updated");

      });
    </script>
  </body>
</html>
