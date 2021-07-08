<?php



if( isset($_POST['form'])  ){
  echo "string";
   }


//Identifiant Base de données

$host = "localhost";
$login = "root";
$mdp = "";
$bdd = "mydb";

//Connexion à la Base de données
 try
 {
     $bdd = new PDO('mysql:host='.$host.';dbname='.$bdd.';charset=utf8', ''.$login.'', ''.$mdp.'' ,
     array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_LOCAL_INFILE => true,));
 }
     catch (Exception $e)
 {
     die('Erreur : ' . $e->getMessage());
 }





 if( isset($_POST['username']) && isset($_POST['password']) ){
   echo "string";

   }


?>
