<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Rechercher</title>

    <!-- Css select multiple-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Css DataTables-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="../Css/test.css">
    </head>

    </head>
      <body>
      <?php include('connexion.php');
            include('fonction.php');
      ?>


test



<!-- debut du formulaire -->
<form action="index.php" id="myForm" name="myForm" method="post">
<div class="container-fluid">

             <div class="row" class="part1">
               <div class="col-xs-12 col-md-3">
                 <!-- Select Projet-->
                 <label> Projet </label>
                 <br>
                   <select id="Projet" name="Nom_Projet[]" data-placeholder="Choisissez un ou plusieurs projets"  multiple style="width:350px;" tabindex="4">
                         <?php
                           $Nom_Projet =  'SELECT Nom_Projet as Projet FROM projet  GROUP by  Nom_Projet';
                           foreach  ($bdd->query($Nom_Projet) as $row) {
                               echo "<option value=\"". $row['Projet'] . "\">". $row['Projet'] . " </option>";
                           };
                         ?>
                     </select><br> <br>
                     <button type="button" class="chosen-toggle select">Select all</button>
                     <button type="button" class="chosen-toggle deselect">Deselect all</button>
                    <!--   -->
                 </div>
                <div class="col-xs-12 col-md-3">
                  <!-- Select Agence-->
                  <label> Agence </label><br>
                  <select id="Agence" name="Nom_Agence[]" data-placeholder="Choisissez une ou plusieurs agences"  multiple style="width:350px;" tabindex="4">
                            <?php
                              $Nom_Agence =  'SELECT Nom_Agence as Agence FROM Agence  GROUP by  Nom_Agence';
                              foreach  ($bdd->query($Nom_Agence) as $row2) {
                               echo "<option value=\"". $row2['Agence'] . "\">". $row2['Agence'] . "</option>";
                                };
                            ?>
                  </select>
                  <br> <br>
                  <button type="button" class="chosen-toggle select">Select all</button>
                  <button type="button" class="chosen-toggle deselect">Deselect all</button>
                  <!--   -->
                </div>
               <div class="col-xs-12 col-md-4">
                 <!-- Select Composition-->
                 <label> Composition </label><br>
                 <input type="checkbox" id="Candidat" name="Composition" value="Candidat" >   Candidat &nbsp
                 <input type="checkbox" id="Selectionne" name="Composition2" value="Selectionne" >  Selectionné &nbsp
                 <input type="checkbox" id="Laureat" name="Composition3" value="Laureat" >  Lauréat &nbsp
                 <input type="checkbox" id="Jury" name="Composition4" value="Jury" >  Jury &nbsp
                 <!--   -->
               </div>
               <div class="col-xs-12 col-md-8"></div>
             </div>
             <div class="row">
                <div class="col-xs-12 col-md-12"> <br> <br> </div>
             </div>
             <div class="row">
               <div class="col-xs-12 col-md-4">
                  <label class="filtre">filtre projet</label><br>
               </div>
             </div>
             <div class="row">
               <div class="col-xs-12 col-md-3">

                 <!-- Select Ville-->
                 <label> Ville</label><br>
                 <select id="Ville" name="Ville[]" data-placeholder="Choisissez une ou plusieurs villes"  multiple style="width:350px;" tabindex="4" class="sel">
                           <?php
                             $Ville =  'SELECT Ville as Ville FROM Projet  GROUP by  Ville';
                             foreach  ($bdd->query($Ville) as $row3) {
                              echo "<option value=\"". $row3['Ville'] . "\">". $row3['Ville'] . "</option>";
                               };
                           ?>
                 </select>
                 <br> <br>
                 <button type="button" class="chosen-toggle select">Select all</button>
                 <button type="button" class="chosen-toggle deselect">Deselect all</button>
                 <!--   -->

               </div>
               <div class="col-xs-12 col-md-3">

                 <!-- Select Date1-->
                 <label> Date commision entre le:</label>  &nbsp &nbsp
                 <label> et le:</label><br>
                 <input type="date" id="Commission" name="Commission">  &nbsp &nbsp  &nbsp
                 <!--   -->
                 <!-- Select Date2-->

                  <input type="date" id="Commission2" name="Commission2"><br>
                 <!--   -->

               </div>
               <div class="col-xs-12 col-md-3">

                 <!-- Select Objet du Projet-->
                 <label> Objet du projet</label><br>
                 <select id="Type2" name="Type2[]" data-placeholder="Choisissez un objet du projet"  multiple style="width:350px;" tabindex="4" class="sel">
                           <?php
                             $Odp =  'SELECT Type2 as Type2 FROM Projet  GROUP by  Type2';
                             foreach  ($bdd->query($Odp) as $row5) {
                              echo "<option value=\"". $row5['Type2'] . "\">". $row5['Type2'] . "</option>";
                               };
                           ?>
                 </select>
                 <br> <br>
                 <button type="button" class="chosen-toggle select">Select all</button>
                 <button type="button" class="chosen-toggle deselect">Deselect all</button>

                 <!--   -->

               </div>
               <div class="col-xs-12 col-md-3">

                 <!-- Select Type de procédure-->
                 <label> Type de procédure</label><br>
                 <select id="Type" name="Type[]" data-placeholder="Choisissez un type de procédure"  style="width:350px;" tabindex="4" class="sel">
                           <?php
                             $type =  'SELECT Type as Type FROM Projet  GROUP by  Type';
                             foreach  ($bdd->query($type) as $row4) {
                              echo "<option value=\"". $row4['Type'] . "\">". $row4['Type'] . "</option>";
                               };
                           ?>
                 </select>
                 <!--   -->
               </div>
              </div>
              <div class="col-xs-12 col-md-12"> <br>  <br> </div>
              <div class="row">
               <div class="col-xs-12 col-md-3">

                 <!-- Select Réalisation-->
                 <label> Réalisation</label><br>
                 <select id="Type_Realisation" name="Type_Realisation[]" data-placeholder="Choisissez un ou plusieurs type de réalisations"  multiple style="width:350px;" tabindex="4" class="sel">
                           <?php
                             $Realisation =  'SELECT Type_Realisation as Type_Realisation FROM Realisation  GROUP by  Type_Realisation';
                             foreach  ($bdd->query($Realisation) as $row7) {
                              echo "<option value=\"". $row7['Type_Realisation'] . "\">". $row7['Type_Realisation'] . "</option>";
                               };
                           ?>
                 </select>
                 <!--   -->

               </div>
               <div class="col-xs-12 col-md-3">

                 <!-- Type de construction-->
                 <label> Type de construction</label><br>
                 <select id="Construction_Type" name="Construction_Type[]" data-placeholder="Choisissez un type de construction"  multiple style="width:350px;" tabindex="4" class="sel">
                           <?php
                             $Construction_Type =  'SELECT Construction_Type as Construction_Type FROM Projet  GROUP by  Construction_Type';
                             foreach  ($bdd->query($Construction_Type) as $row4_1) {
                              echo "<option value=\"". $row4_1['Construction_Type'] . "\">". $row4_1['Construction_Type'] . "</option>";
                               };
                           ?>
                 </select>
                 <!--   -->

               </div>
               <div class="col-xs-12 col-md-3">

                 <!-- Select etat-->
                 <label> Etat</label><br>
                 <select id="Etat" name="Etat[]" data-placeholder="Choisissez un ou plusieurs etats"  multiple style="width:350px;" tabindex="4" class="sel">
                           <?php
                             $Etat =  'SELECT Etat as Etat FROM Projet  GROUP by  Etat';
                             foreach  ($bdd->query($Etat) as $row6) {
                              echo "<option value=\"". $row6['Etat'] . "\">". $row6['Etat'] . "</option>";
                               };
                           ?>
                 </select>
                 <!--   -->

               </div>
             </div>
               <div class="col-xs-12 col-md-4"></div>
             <div class="row">
                <div class="col-xs-12 col-md-13"> <br> <br> </div>
             </div>
             <div class="row">
               <div class="col-xs-12 col-md-4">
                  <label class="filtre">Filtre agences</label><br>
               </div>
             </div>
             <div class="row">

               <div class="col-xs-12 col-md-3">
                 <!-- Select Pays-->
                 <label> Pays</label><br>
                 <select id="Pays" name="Pays[]" data-placeholder="Choisissez un ou plusieurs pays"  multiple style="width:350px;" tabindex="4" class="sel">
                         <?php
                           $Pays =  'SELECT Pays as Pays FROM Agence  GROUP by  Pays';
                           foreach  ($bdd->query($Pays) as $row8) {
                            echo "<option value=\"". $row8['Pays'] . "\">". $row8['Pays'] . "</option>";
                             };
                         ?>
                 </select>
                 <!--   -->

               </div>
               <div class="col-xs-12 col-md-3">

                 <!-- Select Date de Date_Debut -->
                 <label> Date de début: </label>  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp
                  <label> Date de fin :</label><br>
                 <input type="date" id="A_Commission" name="A_Commission">
                 <!--  -->
                 <!-- Date de  fin-->
                 <input type="date" id="A_Commission2" name="A_Commission2">
                 <!--   -->

               </div>
             </div>
             <div class="row">
               <div class="col-xs-12 col-md-12">

                 <!-- Colonne-->
                 <label> Colonne </label><br>
                 <select  class="Colonne" id="Colonne" name="Colonne[]" data-placeholder="Colonne à afficher"  multiple style="width:800px" >
                   <optgroup label="Projet">
                       <option selected="selected" value="Code_Operation|Code opération">Code opération</option>
                       <option selected value="Nom_Projet|Nom du projet" >Nom du projet</option>
                       <option value="Ville|Ville">Ville</option>
                       <option value="Etat|Etat">Etat</option>
                       <option value="Type|Type de procédure">Type de procédure</option>
                       <option value="Type2|Objet du projet">Objet du projet</option>
                       <option value="Construction_Type|Type de construction">Type de construction</option>
                       <option value="Realisation|Réalisation">Réalisation</option>
                       <option value="Date_Commission|Date de commision">Date de commision</option>
                       <option value="Commentaire_Projet|Commentaire">Commentaire</option>
                       <option value="Ref_Projet|Ref">Ref</option>
                   </optgroup>
                   <optgroup label="Agence">
                     <option selected value="Nom_Agence|Nom de l'agence" >Nom de l'agence</option>
                     <option value="Code_Agence|Code agence">Code agence</option>
                     <option value="Pays|Pays">Pays</option>
                     <option value="Commentaire_Agence|Commentaire">Commentaire</option>
                     <option value="Site_Web|Site web">Site web</option>
                     <option value="Date_Debut|Date de création">Date de création</option>
                     <option value="Date_Fin|Date de dissolution">Date de dissolution</option>
                     <option value="Ref_Agence|Ref">Ref</option>
                   </optgroup>
                   <optgroup label="Architecte">
                     <option value="Nom_architecte|Nom architecte">Nom architecte</option>
                     <option value="Prenom_Architecte|Prenom architecte">Prenom architecte</option>
                     <option value="Agence_id_architecte|Agence affilié">Agence affilié</option>
                     <option value="Date_debut|Date d'entrée dans l'agence">Date d'entrée dans l'agence </option>
                     <option value="Date_fin|Date de sortie">Date de sortie</option>
                     <option value="Commentaire_Architecte|Commentaire">Commentaire</option>
                   </optgroup>
                   <optgroup label="Composition">
                     <option selected value="candidat|Candidat">Candidat</option>
                     <option selected value="Selectionne|Selectionne">Selectionné</option>
                     <option selected value="Laureat|Lauréat" >Lauréat</option>
                     <option selected value="Jury|Jury" >Jury</option>
                     <option selected value="Architecte_id|Architecte jury" >Architecte jury</option>
                   </optgroup>
               </select>
               <br> <br>
               <button type="button" class="chosen-toggle select">Select all</button>
               <button type="button" class="chosen-toggle deselect">Deselect all</button>
               <br>
               <br>
               </div>
               <!--   -->
             </div>
         </div>

         <br>
         <br>
         <div>
           <button type="submit" class="btn btn-default">Rechercher</button>
           <button type="button" class="btn btn-default" OnClick="javascript:window.location.reload()" >RAZ</button>

             <div class="message_box" style="margin:10px 0px;"> </div>
             </form>

         </div>







      <!-- Library select multiple -->
      <script src="https://code.jquery.com/jquery-1.12.3.js"   integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc="   crossorigin="anonymous"></script>

      <!-- Library ajax -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"    crossorigin="anonymous"></script>

      <!-- Library DataTable -->
      <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>


      <!-- Library DataTable bouton design-->
      <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap.min.js"></script>

      <!-- Bouton Excel-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <!-- Bouton Pdf-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>

      <!-- Compatibilité HTML5-->
      <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>

      <!-- Bouton Print-->
      <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>




      <script type="text/javascript" src="../Js/test.js"></script>

      </body>
    </html>
