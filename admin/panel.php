<?php

include '../config/config.php';

if(!isset($_SESSION['admin'])) {

header('Location: ../login.php');
exit;

}

?>

<h1>Panel Admin</h1>

<p>
Bienvenue <?= $_SESSION['role']; ?>
</p>

<ul>

<li>
<a href="ajouter-mod.php">
Ajouter un mod
</a>
</li>

<li>
<a href="supprimer-mod.php">
Supprimer un mod
</a>
</li>

<li>
<a href="utilisateurs.php">
Gérer utilisateurs
</a>
</li>

</ul>
