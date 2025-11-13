<?php
session_start();

// Connexion BDD
require("metier/DB_connector.php");
require("metier/Produit.php");
require("Dao/ProduitDao.php");

$cnx = new DB_connector();
$jeton = $cnx->openConnexion();
$produitManager = new ProduitDao($jeton);
$produits = $produitManager->getList();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Produits | TRUC</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- CSS custom -->
<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar Bootstrap -->
<nav class="navbar navbar-expand-lg navbar-success bg-success text-white">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="index.php">
      <img src="images/scierie.webp" alt="Logo TRUC" width="70" height="70" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">ACCUEIL</a></li>
        <li class="nav-item"><a class="nav-link active" href="produits.php">LES PRODUITS</a></li>
        <li class="nav-item"><a class="nav-link" href="video.php">VIDÉO</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">NOUS CONTACTER</a></li>
        <?php if(isset($_SESSION['id'])): ?>
          <li class="nav-item"><a class="nav-link" href="administration.php">ADMINISTRATION</a></li>
          <li class="nav-item"><a class="nav-link" href="deconnexion.php">DÉCONNEXION</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="connexion.php">CONNEXION</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Main content -->
<main class="container my-5">
  <h1 class="text-center mb-4">Nos Produits Écologiques</h1>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach($produits as $produit): ?>
      <div class="col">
        <div class="card h-100 border-0 shadow-sm">
          <img src="images/<?php echo htmlspecialchars($produit->getImg()); ?>" 
               class="card-img-top" 
               alt="<?php echo htmlspecialchars($produit->getTitre()); ?>" 
               width="300" height="200"
               loading="lazy">
          <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($produit->getTitre()); ?></h5>
            <p class="card-text"><?php echo htmlspecialchars($produit->getDescr()); ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
  <div class="container">
    <p>© Projet 3iL</p>
    <a href="#" target="_blank" aria-label="Facebook">
      <img src="images/facebook.webp" alt="Facebook" width="24" height="24" loading="lazy">
    </a>
    <span>Site test</span>
  </div>
</footer>

</body>
</html>
