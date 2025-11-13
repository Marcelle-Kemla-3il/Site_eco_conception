<?php

/* Connexion à la bdd */
$con = mysqli_connect("localhost", "root", "", "scierie");

/* Gestion des erreurs de connexion */
if (!$con) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

mysqli_set_charset($con, "utf8");

/* Requête SQL */
$sql = "SELECT titre, descr, img FROM home";
$requete = mysqli_query($con, $sql);

/* Vérification requête */
if (!$requete) {
    die("Erreur requête : " . mysqli_error($con));
}

/* Affichage */
while ($resultat = mysqli_fetch_assoc($requete)) {

    // Nettoyage → protection XSS
    $titre = htmlspecialchars($resultat['titre']);
    $descr = htmlspecialchars($resultat['descr']);
    $img = htmlspecialchars($resultat['img']);

    echo "<ul class='main-list'>";

    if (!empty($titre)) {
        echo "<li class='main-item'><p class='titre'>$titre</p></li>";
    }

    /* Image + texte */
    if (!empty($descr) && !empty($img)) {
        echo "<li class='main-item'><ul class='sub-list'>";

        echo "<li class='sub-item'><p class='texte'>$descr</p></li>";

        // Conversion WebP auto si existe
        $imgPath = "images/$img";
        $webpPath = "images/" . pathinfo($img, PATHINFO_FILENAME) . ".webp";

        if (file_exists($webpPath)) {
            echo "
                <li class='sub-item'>
                    <picture>
                        <source srcset='$webpPath' type='image/webp'>
                        <img class='image'
                             src='$imgPath'
                             loading='lazy'
                             decoding='async'
                             alt='$titre'>
                    </picture>
                </li>";
        } else {
            echo "
                <li class='sub-item'>
                    <img class='image'
                         src='$imgPath'
                         loading='lazy'
                         decoding='async'
                         alt='$titre'>
                </li>";
        }

        echo "</ul></li>";
    }
    /* Seulement texte */
    else {
        if (!empty($descr)) {
            echo "<li class='main-item'><p class='texte'>$descr</p></li>";
        }

        if (!empty($img)) {

            $imgPath = "images/$img";
            $webpPath = "images/" . pathinfo($img, PATHINFO_FILENAME) . ".webp";

            if (file_exists($webpPath)) {
                echo "
                <li class='main-item'>
                    <picture>
                        <source srcset='$webpPath' type='image/webp'>
                        <img class='image'
                             src='$imgPath'
                             loading='lazy'
                             decoding='async'
                             alt='$titre'>
                    </picture>
                </li>";
            } else {
                echo "
                <li class='main-item'>
                    <img class='image'
                         src='$imgPath'
                         loading='lazy'
                         decoding='async'
                         alt='$titre'>
                </li>";
            }
        }
    }

    echo "</ul>";
}

mysqli_close($con);

?>
