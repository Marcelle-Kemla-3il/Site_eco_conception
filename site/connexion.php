<?php
session_start();
function e($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion - TEST GREEN IT</title>
    <meta name="description" content="Page de connexion du site écologique TEST GREEN IT">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="print.css" media="print">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
          crossorigin="anonymous">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-5">
    <a class="navbar-brand" href="index.php"><img src="./images/scierieGood.webp" width="70" height="70" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">ACCUEIL</a></li>
            <li class="nav-item"><a class="nav-link" href="produits.php">LES PRODUITS</a></li>
            <li class="nav-item"><a class="nav-link" href="video.php">VIDEO</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">NOUS CONTACTER</a></li>
            <?php if (isset($_SESSION['id'])): ?>
                <li class="nav-item"><a class="nav-link" href="administration.php">ADMINISTRATION</a></li>
                <li class="nav-item"><a class="nav-link" href="deconnexion.php">DECONNEXION</a></li>
            <?php else: ?>
                <li class="nav-item"><a class="nav-link" href="connexion.php">CONNEXION</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-sm-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Connexion</h3>

                    <?php if (!empty($_SESSION['errCnx'])): ?>
                        <div class="alert alert-danger">
                            <?= e($_SESSION['errCnx']); $_SESSION['errCnx'] = ""; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_SESSION['creationOk'])): ?>
                        <div class="alert alert-success">
                            <?= e($_SESSION['creationOk']); $_SESSION['creationOk'] = ""; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_SESSION['creationNok'])): ?>
                        <div class="alert alert-danger">
                            <?= e($_SESSION['creationNok']); $_SESSION['creationNok'] = ""; ?>
                        </div>
                    <?php endif; ?>

                    <form action="controleur/traitementFormConnexion.php" method="POST">
                        <div class="form-group">
                            <label for="idUtil">Identifiant</label>
                            <input type="text" class="form-control" id="idUtil" name="idUtil"
                                   placeholder="Entrer votre nom d'utilisateur" required>
                        </div>

                        <div class="form-group">
                            <label for="mdpUtil">Mot de passe</label>
                            <input type="password" class="form-control" id="mdpUtil" name="mdpUtil"
                                   placeholder="Entrer votre mot de passe" required>
                        </div>

                        <button type="submit" class="btn btn-success btn-block">Se connecter</button>
                    </form>
                    <p class="mt-3 text-center">
                        Pas de compte ? <a href="inscription.php">Inscrivez-vous</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS + jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
