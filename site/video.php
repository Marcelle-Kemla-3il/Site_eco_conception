<?php
session_start();
?>
<!DOCTYPE html>

<html lang="fr">
	<head>
		<title>TRUC</title>
		<meta name="description" content="Scierie Descourvières Scie de têtes">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	</head>

	<body>
	<!--*************** MENU ***************-->
<nav class="navbar">
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
	
</nav>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

	$(document).ready(function(){

		$('.menu').click(function(){
			
			$('ul').toggleClass('active');
		})
	})

</script> 
<!--*************** END MENU ***************-->
	<div style="text-align: center;">
		<h2><strong>Scierie Descourvières Scie de têtes</strong></h2><br>
  <a 
    href="https://www.youtube.com/watch?v=dbHXPnhCicI" 
    target="_blank"
    rel="noopener noreferrer"
    style="display: inline-block; position: relative; text-decoration: none;"
    aria-label="Regarder la vidéo sur YouTube"
  >
    <img 
	  rel="preload"
	  fetchpriority="high"
      src="https://img.youtube.com/vi/dbHXPnhCicI/sddefault.jpg" 
      alt="Scierie Descourvières Scie de têtes"
      width="500" 
      height="281"
      loading="lazy"
      style="width: 500px; height: 281px; object-fit: cover; border: 0;"
    >
    <div style="
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #ff0000;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: transform 0.2s ease;
    " aria-hidden="true">
      <!-- SVG optimisé directement en HTML -->
      <svg viewBox="0 0 24 24" width="30" height="30" style="margin-left: 2px;">
        <path fill="#ffffff" d="M8 5v14l11-7z"/>
      </svg>
    </div>
  </a>
</div>
<br>
<br>

<style>

</style>
		<!--*************** PIED DE PAGE ***************-->
<footer id="footer">
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

	</body>

</html>