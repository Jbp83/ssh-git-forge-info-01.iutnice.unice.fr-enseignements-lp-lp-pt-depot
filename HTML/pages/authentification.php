<?php

session_start();

$username = $_POST['Username'];
$password = $_POST['Password'];

$_SESSION['user']=$username;

include("connect.php");
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM user');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

  if ($password == $donnees["password"] && $username == $donnees["nom"] )
  {
    $_SESSION['id']=  $donnees["id"];
     header("location:demoQuestion.php");
  }
  else {
    echo "mauvais identifiants";
  }
}

$reponse->closeCursor(); // Termine le traitement de la requête


 ?>
