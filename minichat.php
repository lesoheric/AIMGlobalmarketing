<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="minichat.css">
<title>commentaire</title>
</head>

<body>
    <div id="nono">
        <p class="bro">LAISSER NOUS UN MOT</p>
<form action="minichat_post.php" method="post">
<p class="bro">
<fieldset><legend>COMMENTAIRE</legend>
<label for="pseudo">PSEUDO</label> </br> <input type="text"
name="pseudo" id="pseudo" required  maxlength="10" minlength="3"/><br/>
<label for="message">MESSAGE</label> </br><textarea name="message" cols="50" rols="8"></textarea><br />
<input type="submit" value="SOUMETTRE" />
</fieldset>
</p>
</form>
<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT pseudo, message,DATE_FORMAT(date_creation,\'  %Hh%i le %d/%y\')AS date_creation_fr FROM minichat ORDER
BY ID DESC LIMIT 0, 5');


while ($donnees = $reponse->fetch())
{
echo '<p class="sausa">®<strong>' . htmlspecialchars($donnees['pseudo']) .
'</strong></br>↪<span> ' . htmlspecialchars($donnees['message']) . '</span></p>';
echo '<sub><p class="time">'.$donnees['date_creation_fr'].'</p></sub>';
}
$reponse->closeCursor();
?>

</div>
</body>
</html>