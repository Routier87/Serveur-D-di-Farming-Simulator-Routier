<?php

include '../config/config.php';

if(
$_SESSION['role'] != 'Fondateur'
&&
$_SESSION['role'] != 'Co-Fondateur'
) {

exit('Accès refusé');

}

$mods = $conn->query("SELECT * FROM mods");

while($mod = $mods->fetch()) {

echo "<p>";

echo $mod['nom'];

echo " - ";

echo "<a href='#'>Supprimer</a>";

echo "</p>";

}

?>
