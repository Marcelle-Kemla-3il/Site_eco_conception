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

<body>

	<section>
<!--*************** MENU ***************-->
<nav class="navbar">
	<li class="toggle">
		<ul class ="toggle-item"><i class="fa fa-bars menu" aria-hidden="true"> </i></ul>
	</li>
   <ul class="nav-links">
      	<li class="nav-item"><a href="index.php">ACCUEIL</a></li>
      	<li class="nav-item"><a href="produits.php">LES PRODUITS</a></li>
	  	<li class="nav-item"><a href="video.php">VIDEO</a></li>
		<li class="nav-item"><a href="contact.php">NOUS CONTACTER</a></li>
<?php 
	if (isset($_SESSION['id'])) {	
		echo "<li class='nav-item'><a href='administration.php'>ADMINISTRATION</a></li>";
	}
	if(isset($_SESSION['id'])) {
		echo "<li class='nav-item'><a href='deconnexion.php'>DECONNEXION</a></li>";
	}else{
		echo "<li class='nav-item'><a href='connexion.php'>CONNEXION</a></li>";
	}
?>
    </ul>

	<img src="./images/scierie.gif" style="width:70px; margin:5px;">
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

<!--*************** PIED DE PAGE ***************-->
<footer id="footer">
<ul class="footer-links">
    <li class="footer-item">©Projet 3iL</li>
    <li class="footer-item"><a href="#" target="_blank"><img id="logo" src="images/facebook.png"></a></li>
    <li class="footer-item">Site test</li>
<ul/>
</footer>
<!--*************** PIED DE PAGE ***************-->

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script type="text/javascript">
	$(document).ready(function(){
	      $('.onglet a').on('click', function (e) {
	      e.preventDefault();
	       
	      $(this).parent().addClass('active');
	      $(this).parent().siblings().removeClass('active');
	       
	      var href = $(this).attr('href');
	      $('.forms > form').hide();
	      $(href).fadeIn(333);
	    });
	});
</script>

</body>
</html>
