<?php
include("../controleur/Utilisateur.php");

if (isset($_POST['submit'])) {
    $nom = $_POST["nom"];
    $pseudo = $_POST['pseudo'];
    $mail = $_POST['mail'];
    $password = md5($_POST['password']);
    $confirmPassword = md5($_POST['confirmPassword']);

    $bdd = new PDO('mysql:host=localhost;dbname=php_m6;charset=utf8', 'root', 'root');
    $bdd->query("INSERT INTO `utilisateur` (`idUtilisateur`, `nom`, `pseudo`, `password`, `mail`) 
        VALUES (NULL, '" . $nom . "', '" . $pseudo . "','" . $password . "', '" . $mail . "');");

    $_SESSION['pseudo'] = $pseudo;
    header('location: ../vue/Accueil.php');
    exit;
}
