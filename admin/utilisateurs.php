<?php

include '../config/config.php';

if($_SESSION['role'] != 'Fondateur') {

exit('Accès refusé');

}

if(isset($_POST['create'])) {

$username = $_POST['username'];

$password = password_hash(
$_POST['password'],
PASSWORD_DEFAULT
);

$role = $_POST['role'];

$discord = $_POST['discord'];

$query = $conn->prepare(

"INSERT INTO utilisateurs
(username,password,role,discord_id)

VALUES(?,?,?,?)"

);

$query->execute([

$username,
$password,
$role,
$discord

]);

echo "Utilisateur ajouté";

}

?>

<form method="POST">

<input type="text"
name="username"
placeholder="Pseudo">

<input type="password"
name="password"
placeholder="Mot de passe">

<input type="text"
name="discord"
placeholder="ID Discord">

<select name="role">

<option>Fondateur</option>

<option>Co-Fondateur</option>

<option>Responsable Site</option>

<option>Staff</option>

</select>

<button type="submit" name="create">
Créer
</button>

</form>
