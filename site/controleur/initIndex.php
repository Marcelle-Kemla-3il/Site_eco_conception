<?php
/* Connexion à la bdd */
$con = mysqli_connect("localhost", "root", "", "scierie");

/* Gestion des erreurs de connexion */
if (!$con) {
    die("<div class='alert alert-danger text-center'>Erreur de connexion : " . mysqli_connect_error() . "</div>");
}

mysqli_set_charset($con, "utf8");

/* Requête SQL */
$sql = "SELECT titre, descr, img FROM home";
$requete = mysqli_query($con, $sql);

/* Vérification requête */
if (!$requete) {
    die("<div class='alert alert-danger text-center'>Erreur requête : " . mysqli_error($con) . "</div>");
}

/* Affichage responsive */
echo "<div class='container my-5'>";
echo "<div class='row gy-4'>"; // gy-4 = espace vertical entre les lignes

while ($resultat = mysqli_fetch_assoc($requete)) {

    $titre = htmlspecialchars($resultat['titre']);
    $descr = htmlspecialchars($resultat['descr']);
    $img = htmlspecialchars($resultat['img']);

    // Gestion des images
    $imgPath = "images/$img";
    $webpPath = "images/" . pathinfo($img, PATHINFO_FILENAME) . ".webp";

    if (!empty($img) && file_exists($webpPath)) {
        $imgSrc = $webpPath;
    } else {
        $imgSrc = $imgPath;
    }

    echo "
        <div class='col-12 col-md-6 col-lg-4'>
            <div class='card h-100 shadow-sm border-0'>
    ";

    // Image
    if (!empty($img)) {
        echo "
            <img src='$imgSrc' class='card-img-top img-fluid rounded-top' alt='$titre' loading='lazy' decoding='async'>
        ";
    }

    echo "
                <div class='card-body'>
        ";

    // Titre
    if (!empty($titre)) {
        echo "<h5 class='card-title text-success fw-bold'>$titre</h5>";
    }

    // Description
    if (!empty($descr)) {
        echo "<p class='card-text text-muted'>$descr</p>";
    }

    echo "
                </div>
            </div>
        </div>
    ";
}

echo "</div>"; // row
echo "</div>"; // container

mysqli_close($con);
?>
