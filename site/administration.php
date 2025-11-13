<?php
session_start();

if ((!(isset($_SESSION['id'])) || empty($_SESSION['id'])) && $_SESSION['role'] != "admin") {
	header("Location:connexion.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Administration - TEST GREEN IT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="print.css" media="print">
</head>

<body>
<<<<<<< HEAD
	<!-- MENU -->
	<nav class="navbar navbar-expand-lg bg-white py-2 shadow mb-5">
    <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="./images/scierieGood.webp" alt="Logo" style="height:50px; width:auto;">
        <span class="ml-2 font-weight-bold text-dark">SCIERIE</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item"><a class="nav-link text-dark" href="index.php">ACCUEIL</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="produits.php">LES PRODUITS</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="video.php">VIDEO</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="contact.php">NOUS CONTACTER</a></li>
            <?php 
            if (isset($_SESSION['id'])) echo "<li class='nav-item'><a class='nav-link text-dark' href='administration.php'>ADMINISTRATION</a></li>";
            if(isset($_SESSION['id'])) echo "<li class='nav-item'><a class='nav-link text-dark' href='deconnexion.php'>DECONNEXION</a></li>"; 
            else echo "<li class='nav-item'><a class='nav-link' href='connexion.php'>CONNEXION</a></li>";
            ?>
        </ul>
    </div>
=======
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
>>>>>>> 2de008bfbed163ae426bf5ad283e018bec65da63
</nav>

	<div class="container">

		<!-- Ajout Produit -->
		<div class="card mb-4">
			<div class="card-header bg-light text-dark">
				<h4 >Ajouter un nouveau produit</h4>
			</div>
			<div class="card-body">
				<?php if(isset($_SESSION['msgAddOk'])) { echo "<div class='alert alert-success'>".$_SESSION['msgAddOk']."</div>"; $_SESSION['msgAddOk']=""; } ?>
				<?php if(isset($_SESSION['msgAddNok'])) { echo "<div class='alert alert-danger'>".$_SESSION['msgAddNok']."</div>"; $_SESSION['msgAddNok']=""; } ?>

				<form id="formAjoutProduit" action="" method="post">
					<div class="form-group">
						<label for="lbProduit">Titre du produit</label>
						<input type="text" id="lbProduit" name="lbProduit" class="form-control" placeholder="Entrer le titre du produit" required>
					</div>
					<div class="form-group">
						<label for="lbDescr">Description</label>
						<input type="text" id="lbDescr" name="lbDescr" class="form-control" placeholder="Entrer la description" required>
					</div>
					<div class="form-group">
						<label for="lbImg">Image</label>
						<input type="text" id="lbImg" name="lbImg" class="form-control" placeholder="Entrer le nom de l'image" required>
					</div>
					<button type="submit" class="btn btn-primary">Ajouter</button>
				</form>
			</div>
		</div>

		<!-- Modification Produit -->
		<div class="card mb-4">
			<div class="card-header bg-light text-dark">
				<h4>Modifier un produit</h4>
			</div>
			<div class="card-body">
				<?php if(isset($_SESSION['msgModifOk'])) { echo "<div class='alert alert-success'>".$_SESSION['msgModifOk']."</div>"; $_SESSION['msgModifOk']=""; } ?>
				<?php if(isset($_SESSION['msgModifNok'])) { echo "<div class='alert alert-danger'>".$_SESSION['msgModifNok']."</div>"; $_SESSION['msgModifNok']=""; } ?>

				<form id="formModifproduit" action="#" method="post">
					<div class="form-group" id="rowModificationProduit"></div>
					<div class="form-group">
						<label for="lbDescrModif">Description</label>
						<input type="text" id="lbDescrModif" name="lbDescrModif" class="form-control" placeholder="Entrer la description" required>
					</div>
					<div class="form-group">
						<label for="lbImgModif">Image</label>
						<input type="text" id="lbImgModif" name="lbImgModif" class="form-control" placeholder="Entrer le nom de l'image" required>
					</div>
					<button type="submit" class="btn btn-warning">Modifier</button>
				</form>
			</div>
<<<<<<< HEAD
		</div>

		<!-- Suppression Produit -->
		<div class="card mb-4">
			<div class="card-header bg-light text-dark">
				<h4>Supprimer un produit</h4>
			</div>
			<div class="card-body">
				<?php if(isset($_SESSION['msgSuppOk'])) { echo "<div class='alert alert-success'>".$_SESSION['msgSuppOk']."</div>"; $_SESSION['msgSuppOk']=""; } ?>
				<?php if(isset($_SESSION['msgSuppNok'])) { echo "<div class='alert alert-danger'>".$_SESSION['msgSuppNok']."</div>"; $_SESSION['msgSuppNok']=""; } ?>

				<form id="formSuppProduit" action="#" method="post">
					<div class="form-group" id="rowSuppression"></div>
					<button type="submit" class="btn btn-danger">Supprimer</button>
				</form>
			</div>
		</div>

	</div> <!-- /.container -->

	<!-- FOOTER -->
	<footer class="bg-light text-center py-3 mt-4">
		© Projet 3iL | <a href="#"><img src="images/facebook.png" alt="Facebook" width="24"></a>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
=======
		    </form>
	</div>
<!--*************** PIED DE PAGE ***************-->
<footer id="footer">
        <div class="footer-contact-container">
            <div class="footer-contact-item email">
                <h2>EMAIL</h2>
                <p><a href="mailto:scierie.gineste@wanadoo.fr">scierie.gineste@wanadoo.fr</a></p>

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
	
>>>>>>> 2de008bfbed163ae426bf5ad283e018bec65da63
	<script src="scripts/initSelectModifProduit.js"></script>
	<script src="scripts/initSelectModifAccueil.js"></script>
	<script src="scripts/initSelectSuprProduit.js"></script>
</body>
</html>
