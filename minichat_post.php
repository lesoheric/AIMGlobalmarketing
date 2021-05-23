

<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO minichat (pseudo, message, date_creation)
VALUES(?, ?,NOW())');
$req->execute(array($_POST['pseudo'], $_POST['message']));
setcookie('pseudo',$_POST['pseudo'], time()+365*24*3600,null,null,true,false);








header('Location: onepeace.php');
?>
