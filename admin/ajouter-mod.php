<?php

include '../config/config.php';

if(
$_SESSION['role'] != 'Fondateur'
&&
$_SESSION['role'] != 'Co-Fondateur'
) {

exit('Accès refusé');

}

if(isset($_POST['add'])) {

$nom = $_POST['nom'];

$image = $_POST['image'];

$telechargement =
$_POST['telechargement'];

$categorie =
$_POST['categorie'];

$query = $conn->prepare(

"INSERT INTO mods
(nom,image,telechargement,categorie,auteur)

VALUES(?,?,?,?,?)"

);

$query->execute([

$nom,
$image,
$telechargement,
$categorie,
$_SESSION['role']

]);

echo "Mod ajouté";

}

?>

<form method="POST">

<input type="text"
name="nom"
placeholder="Nom mod">

<input type="text"
name="image"
placeholder="Image URL">

<input type="text"
name="telechargement"
placeholder="Lien téléchargement">

<select name="categorie">

<option>Vehicules</option>
<option>Outils</option>
<option>Maps</option>

</select>

<button type="submit" name="add">
Ajouter
</button>

</form>
