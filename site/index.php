<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<<<<<<< HEAD
<title>TEST GREEN IT</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
=======
    <meta charset="UTF-8">

    <!-- Meta description SEO -->
    <meta name="description" 
          content="Scierie du Fargal : vente et transformation de bois, poutres, lambourdes et séchoirs. Solutions durables pour professionnels et particuliers. Découvrez nos produits, vidéos et services.">

    <!-- Responsive & Éco-conception -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TEST GREEN IT</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preload"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          as="style" onload="this.rel='stylesheet'">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
>>>>>>> f1615a54aae621db4e7acb855ea7f4150206f6e5
</head>


<body>

<!--*************** MENU (CORRIGÉ MAIS IDENTIQUE VISUELLEMENT) ***************-->
<nav class="navbar">
<<<<<<< HEAD
	<li class="toggle">
		<ul class ="toggle-item"><i class="fa fa-bars menu" aria-hidden="true"> </i></ul>
	</li>
   <ul class="nav-links">
      	<li class="nav-item"><a href="index.php">ACCUEIL</a></li>
      	<li class="nav-item"><a href="produits.php">LES PRODUITS</a></li>
	  	<li class="nav-item"><a href="video.php">VIDEO</a></li>
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

	<video autoplay muted loop playsinline style="width:70px; margin:5px;">
   		<source src="./images/scierie.webm" type="video/webm">
    </video>
=======

    <!-- Correction : structure UL/LI valide -->
    <ul class="toggle">
        <li class="toggle-item">
            <button aria-label="Ouvrir le menu">
                <i class="fa fa-bars menu" aria-hidden="true"></i>
            </button>
        </li>
    </ul>

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
        } else {
            echo "<li class='nav-item'><a href='connexion.php'>CONNEXION</a></li>";
        }
        ?>
    </ul>

    <!-- Logo optimisé avec fallback -->
    <picture>
        <source srcset="images/scierie.webp" type="image/webp">
        <img src="images/scierie.gif"
             style="width:70px; margin:5px;"
             alt="Logo de la scierie"
             loading="lazy"
             decoding="async">
    </picture>
>>>>>>> f1615a54aae621db4e7acb855ea7f4150206f6e5
</nav>
<!--*************** END MENU ***************-->

<!-- jQuery doit être chargé SANS defer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- script qui utilise jQuery -->
<script>
    $(document).ready(function () {
        $('.menu').click(function () {
            $('.nav-links').toggleClass('active');
        });
    });
</script>

<!--*************** SLIDER ***************-->
<section>
    <?php include "includes/slider.php"; ?>
</section>

<!--*************** CONTENU ***************-->
<main>
    <!-- H1 invisible pour SEO + accessibilité -->
    <h1 class="hidden">Scierie du Fargal – Accueil et produits</h1>

    <?php include "controleur/initIndex.php"; ?>
</main>

<!--*************** FOOTER ***************-->
<footer id="footer">
<<<<<<< HEAD
        <div class="footer-contact-container">
            <div class="footer-contact-item email">
                <h2>EMAIL</h2>
                <p><a href="mailto:scierie.gineste@wanadoo.fr">scierie.gineste@wanadoo.fr</a></p>
            </div>

            <div class="footer-contact-item telephone">
                <h2>TÉLÉPHONE</h2>
                <p><a href="tel:+33970355409">+33 9 70 35 54 09</a></p>
            </div>

            <div class="footer-contact-item adresse">
                <h2>ADRESSE</h2>
                <ul>
                    <li>Route de Rodez</li>
                    <li>12220</li>
                    <li>MONTBAZENS</li>
                </ul>
            </div>

            <div class="footer-contact-item reseauxSociaux">
                <h2>NOUS SUIVRE</h2>
                <ul class="logo">
                    <li class="facebook"><a href="https://www.facebook.com/Scierie-du-Fargal-613509152159633/" target="_blank"><img src="images/facebook.png" alt="Facebook" width="32" height="32" loading="lazy"></a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>©Projet 3iL - Site test</p>
        </div>
    </footer>
<!--*************** PIED DE PAGE ***************-->
	<script type="text/javascript" src="scripts/slider.js"></script>
=======
    <ul class="footer-links">
        <li class="footer-item">© Projet 3iL</li>

        <li class="footer-item">
            <img id="logo"
                 src="images/facebook.webp"
                 alt="Page Facebook"
                 loading="lazy"
                 decoding="async">
        </li>

        <li class="footer-item">Site test</li>
    </ul>
</footer>

<!-- Slider.js éco-conçu -->
<script defer src="scripts/slider.js"></script>
>>>>>>> f1615a54aae621db4e7acb855ea7f4150206f6e5

</body>
</html>
