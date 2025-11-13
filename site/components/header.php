<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-lg bg-white py-2 shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="./images/scierieGood.webp" alt="Logo" style="height:45px; width:auto;">
            <span class="ms-2 fw-bold text-dark">SCIERIE</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link text-dark" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="produits.php">Produits</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="video.php">Vidéos</a></li>

                <?php if (isset($_SESSION['id'])): ?>
                    <li class="nav-item"><a class="nav-link text-dark" href="administration.php">Administration</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="deconnexion.php">Déconnexion</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link text-dark" href="connexion.php">Connexion</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
