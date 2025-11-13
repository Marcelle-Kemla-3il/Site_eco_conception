<?php
session_start();
?>
<!DOCTYPE html>

<html lang="fr">

<head>
  <title>TRUC</title>
  <meta name="description" content="Scierie Descourvières Scie de têtes">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="print.css" media="print">
</head>

<body>
  <!--*************** MENU ***************-->
  <?php include('components/header.php'); ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      $('.menu').click(function() {

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
      aria-label="Regarder la vidéo sur YouTube">
      <img
        rel="preload"
        fetchpriority="high"
        src="https://img.youtube.com/vi/dbHXPnhCicI/sddefault.jpg"
        alt="Scierie Descourvières Scie de têtes"
        width="500"
        height="281"
        loading="lazy"
        style="width: 500px; height: 281px; object-fit: cover; border: 0;">
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
          <path fill="#ffffff" d="M8 5v14l11-7z" />
        </svg>
      </div>
    </a>
  </div>

  <!--*************** PIED DE PAGE ***************-->
  <?php include('components/footer.php'); ?>
  <!--*************** PIED DE PAGE ***************-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>