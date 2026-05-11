<?php

session_start();

$db_host = "localhost";
$db_name = "fs25_site";
$db_user = "root";
$db_pass = "";

$webhook_url = "https://discord.com/api/webhooks/1503476702402187504/ojgK08tj7qn7LbQBAU5AzUDD5eyk_jQs2krYiVM5qMKJpZlKGlWSyy7dgAD1uqK060TO";

try {

$conn = new PDO(
    "mysql:host=$db_host;dbname=$db_name;charset=utf8",
    $db_user,
    $db_pass
);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

die("Erreur SQL : " . $e->getMessage());

}

?>
