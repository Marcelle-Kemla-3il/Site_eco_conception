<?php
require("../metier/DB_connector.php");
require("../metier/Produit.php");
require("../Dao/ProduitDao.php");

$cnx = new DB_connector();
$jeton = $cnx->openConnexion();
$produitManager = new ProduitDao($jeton);
$produits = $produitManager->getList();
?>

<div class="row">
  <?php foreach($produits as $produit): ?>
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm">
        <img src="images/<?php echo htmlspecialchars($produit->getImg()); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($produit->getTitre()); ?>" loading="lazy">
        <div class="card-body">
          <h5 class="card-title"><?php echo htmlspecialchars($produit->getTitre()); ?></h5>
          <p class="card-text"><?php echo htmlspecialchars($produit->getDescr()); ?></p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
