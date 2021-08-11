<?php
include_once("../modele/Init.php");
include("../modele/Utilisateur.php");

$req = 'SELECT * FROM Utilisateur';
$reqtab = $cnx_bdd->query($req);
$tab = $reqtab->fetchAll();
$donnees = array();
foreach ($tab as $utilisateur) {
    array_push($donnees, new Utilisateur($utilisateur['idUtilisateur'], $utilisateur['nom'], $utilisateur['pseudo'], $utilisateur['password'], $utilisateur['mail']));
}
