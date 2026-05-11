<?php

include 'config/config.php';

if(isset($_POST['login'])) {

$username = $_POST['username'];
$password = $_POST['password'];

$query = $conn->prepare(
"SELECT * FROM utilisateurs WHERE username = ?"
);

$query->execute([$username]);

$user = $query->fetch();

if($user && password_verify($password, $user['password'])) {

$_SESSION['admin'] = $user['id'];
$_SESSION['role'] = $user['role'];

header('Location: admin/panel.php');
exit;

} else {

$error = "Identifiants incorrects";

}

}

?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<form method="POST" class="login-box">

<h1>Connexion Admin</h1>

<input type="text"
name="username"
placeholder="Nom utilisateur">

<input type="password"
name="password"
placeholder="Mot de passe">

<button type="submit" name="login">
Connexion
</button>

</form>

</body>
</html>
