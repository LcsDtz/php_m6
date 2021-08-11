<?php
include_once("Gestion.php");

$bdd = new Database("localhost", "root", "root", "php_m6");
$cnx_bdd = $bdd->getDB();
session_start();
