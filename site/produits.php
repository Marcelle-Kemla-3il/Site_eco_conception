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

  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Print CSS -->
  <link rel="stylesheet" href="print.css" media="print">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- Navbar Bootstrap -->
  <?php include('components/header.php'); ?>

  <!-- Main content -->
  <main class="container my-5" role="main">
    <section aria-labelledby="produits-title">
      <h1 id="produits-title" class="text-center mb-4">Nos Produits Écologiques</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($produits as $produit):
          // Assure que le nom du fichier se termine par .webp
          $img = pathinfo($produit->getImg(), PATHINFO_FILENAME) . '.webp';
          // Alt plus descriptif
          $altText = $produit->getTitre() . " - " . substr($produit->getDescr(), 0, 50);
        ?>
          <div class="col">
            <article class="card h-100 border-0 shadow-sm">
              <img src="images/<?php echo htmlspecialchars($img); ?>"
                   class="card-img-top"
                   alt="<?php echo htmlspecialchars($altText); ?>"
                   width="300" height="200"
                   loading="lazy">
              <div class="card-body">
                <h2 class="card-title h5"><?php echo htmlspecialchars($produit->getTitre()); ?></h2>
                <p class="card-text"><?php echo htmlspecialchars($produit->getDescr()); ?></p>
              </div>
            </article>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <?php include('components/footer.php'); ?>

  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" defer></script>
</body>

</html>
