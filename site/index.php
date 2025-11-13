<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <!-- Meta description SEO -->
    <meta name="description"
        content="Scierie du Fargal : vente et transformation de bois, poutres, lambourdes et séchoirs. Solutions durables pour professionnels et particuliers. Découvrez nos produits, vidéos et services.">

    <!-- Responsive & Éco-conception -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Feuilles de style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="print.css" media="print">

    <title>Scierie du Fargal – Accueil</title>
</head>

<body class="bg-light text-dark d-flex flex-column min-vh-100">

    <!-- *************** HEADER *************** -->
    <?php include('components/header.php'); ?>
    <!-- *************** END HEADER *************** -->


    <!-- *************** SLIDER *************** -->
    <section class="mb-5">
        <?php include "includes/slider.php"; ?>
    </section>
    <!-- *************** END SLIDER *************** -->


    <!-- *************** CONTENU PRINCIPAL *************** -->
    <main class="container my-5 flex-grow-1">
        <!-- Titre masqué pour SEO et accessibilité -->
        <h1 class="visually-hidden">Scierie du Fargal – Accueil et produits</h1>

        <!-- Zone de contenu dynamique -->
        <div class="card shadow-sm border-0 p-4">
            <?php include "controleur/initIndex.php"; ?>
        </div>
    </main>
    <!-- *************** END MAIN *************** -->


    <!-- *************** FOOTER *************** -->
    <?php include('components/footer.php'); ?>
    <!-- *************** END FOOTER *************** -->


    <!-- *************** SCRIPTS *************** -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="scripts/slider.js" defer></script>
</body>

</html>
