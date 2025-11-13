<?php
session_start();
function e($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription - TEST GREEN IT</title>
    <meta name="description" content="Page d'inscription du site écologique TEST GREEN IT">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="print.css" media="print">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
          crossorigin="anonymous">
</head>

<body class="bg-light">

<?php include('components/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-sm-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Inscription</h3>

                    <?php if (!empty($_SESSION['errMdp'])): ?>
                        <div class="alert alert-danger">
                            <?= e($_SESSION['errMdp']); $_SESSION['errMdp'] = ""; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($_SESSION['errId'])): ?>
                        <div class="alert alert-danger">
                            <?= e($_SESSION['errId']); $_SESSION['errId'] = ""; ?>
                        </div>
                    <?php endif; ?>

                    <form action="controleur/traitementFormInscription.php" method="POST">
                        <div class="form-group">
                            <label for="idUtilCreation">Identifiant</label>
                            <input type="text" class="form-control" id="idUtilCreation" name="idUtilCreation"
                                   placeholder="Choisir un nom d'utilisateur" required>
                        </div>

                        <div class="form-group">
                            <label for="pwdCreation">Mot de passe</label>
                            <input type="password" class="form-control" id="pwdCreation" name="pwdCreation"
                                   placeholder="Choisir un mot de passe" required>
                        </div>

                        <div class="form-group">
                            <label for="pwdBis">Confirmez le mot de passe</label>
                            <input type="password" class="form-control" id="pwdBis" name="pwdBis"
                                   placeholder="Ressaisir le mot de passe" required>
                        </div>

                        <button type="submit" class="btn btn-success btn-block">S'inscrire</button>
                    </form>

                    <p class="mt-3 text-center">
                        Déjà un compte ? <a href="connexion.php">Connectez-vous</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('components/footer.php'); ?>
<!-- Bootstrap JS + jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
