<?php
include_once("Init.php");
include("Utilisateur.php");

$req = 'SELECT * FROM Utilisateur WHERE pseudo=?';
$reqCli = $cnx_bdd->prepare($req);
$reqCli->execute(array($_POST['pseudo']));
$tab = $reqCli->fetch();

if ($tab) {
    $utilisateur = new Utilisateur($tab['idUtilisateur'], $tab['nom'], $tab['pseudo'], $tab['password'], $tab['mail']);

    $pseudo = $utilisateur->getPseudo();
    $password = $utilisateur->getPassword();

    if (isset($_POST['pseudo']) && isset($_POST['password'])) {

        $confirmationPassword = md5($_POST['password']);
        if ($pseudo == $_POST['pseudo'] && $confirmationPassword == $password) {
            $_SESSION['pseudo'] = $utilisateur->getPseudo();
            header('location: ../vue/Accueil.php');
            exit;
        }
    }
} else {
    header('location: ../vue/Inscription.php');
    exit;
}
