<?php
include("header.php");
?>

<body>
    <div class="card">
        <div class="row">
            <div class="formBloc">
                <h3><strong>Inscription</strong></h3>
                <form method="post" action="../controleur/Inscription.php">
                    <div class="formGroupe">
                        <label>Nom Prenom</label>
                        <input class="form-control" type="text" name="nom">
                    </div>
                    <div class="formGroupe">
                        <label>Pseudo</label>
                        <input class="form-control" type="text" name="pseudo">
                    </div>
                    <div class="formGroupe">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password">
                    </div>
                    <div class="formGroupe">
                        <label>Confirmer password</label>
                        <input class="form-control" type="password" name="confirmPassword">
                    </div>
                    <div class="formGroupe">
                        <label>Mail</label>
                        <input class="form-control" type="email" name="mail">
                    </div>
                    <input class="btn btn-inscription" type="submit" name="submit" value="Inscription">
                </form>
            </div>

            <div class="formBloc">
                <h3><strong>Connexion</strong></h3>
                <form method="post" action="../modele/Connexion.php">
                    <div class="formGroupe">
                        <label>Pseudo</label>
                        <input class="form-control" type="text" name="pseudo">
                    </div>
                    <div class="formGroupe">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password">
                    </div>
                    <input class="btn btn-connexion" type="submit" name="submit" value="Connexion">
                </form>
            </div>
        </div>
    </div>
</body>
<script src="js/script.js"></script>

</html>