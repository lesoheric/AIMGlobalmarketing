<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>visitor </title>
    </head>
    <body>
<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
$reponse=$bdd->query('SELECT COUNT(DISTINCT pseudo) AS nbpseudo FROM minichat');
$donnees=$reponse->fetch();
echo '<p class="dingo"><img src="dingo.png" alt="visitor">'. $donnees['nbpseudo'].'visites®🚻</p>';
$reponse->closeCursor();
?>
</body>
</html>