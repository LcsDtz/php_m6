<?php
include_once("../controleur/Utilisateur.php");
if (isset($_GET["deconnexion"])) {
    session_destroy();
    header('location: ../vue/inscription.php');
    exit;
}
if (!$_SESSION['pseudo']) {
    header('location: ../vue/inscription.php');
    exit;
}

include("header.php");
?>


<body class="degrade">
    <?php
    foreach ($donnees as $utilisateur) {
        if ($utilisateur->getPseudo() == $_SESSION['pseudo']) {
            echo '
                <h2>Bonjour</h2> <h1>' . $utilisateur->getNom() . '</h1>
                <a href="?deconnexion=oui">Deconnexion</a>
                ';
        }
    }
    ?>
</body>

</html>