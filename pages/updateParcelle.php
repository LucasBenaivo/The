<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>QualiTh&eacute</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/autre/images/icons/tea2.ico"/>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="../assets/header/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <!-- <link rel="stylesheet" href="../assets/header/assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/header/assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="../assets/header/assets/css/animated.css">
    <link rel="stylesheet" href="../assets/header/assets/css/owl.css"> -->

    <link href="../assets/header/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/header/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/header/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/header/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/header/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/header/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/header/assets/css/style.css" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="../assets/css/animated.css">
    <link rel="stylesheet" href="../assets/css/owl.css">

    <link rel="stylesheet" href="../assets/form/css/styles.min.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../assets/table/css/style.css">
  <script src="gestion_the.js"></script>
  <script>fetchTableData();</script>

  </head>
  <style>

    /* Styles pour le select personnalisé */
.select-personnalise {
  padding: 12px 20px; /* Ajoute de l'espace à l'intérieur */
  font-size: 16px; /* Taille de la police */
  width: 100%; /* Largeur du select */
  border-radius: 8px; /* Ajoute un peu de bord arrondi */
  border: 2px solid #4CAF50; /* Ajoute une bordure */
  background-color: #fff; /* Couleur de fond */
  appearance: none; /* Masque l'apparence par défaut du select */
  -webkit-appearance: none; /* Pour les navigateurs basés sur WebKit */
  -moz-appearance: none; /* Pour les navigateurs basés sur Gecko */
}

/* Style pour les options du select */
.select-personnalise option {
  padding: 10px; /* Ajoute de l'espace à l'intérieur des options */
  font-size: 16px; /* Taille de la police */
}

/* Lorsque le select est survolé */
.select-personnalise:hover {
  border-color: #45a049; /* Changement de couleur de la bordure au survol */
}
.bouton-vert {
            background-color: #5cb874; /* Couleur de fond verte */
            border: none; /* Supprimer les bordures */
            color: white; /* Couleur du texte blanc */
            padding: 15px 32px; /* Ajouter un peu de rembourrage pour le style */
            text-align: center; /* Centrer le texte */
            text-decoration: none; /* Supprimer la décoration du texte */
            display: inline-block; /* Afficher le bouton comme un élément en ligne */
            font-size: 16px; /* Taille de la police */
            margin: 4px 2px; /* Marge autour du bouton */
            cursor: pointer; /* Curseur de souris pointer */
            border-radius: 8px; /* Ajouter un peu de bord arrondi */
            /* color : white; */
            text-decoration: none;
    }
    .bouton-vert a{
        color: white;
    }

    .bouton-vert:hover {
        background-color: #45a049; /* Changer la couleur de fond au survol */
    }
        .container1 {
        display: flex;
        justify-content: center;
        align-items: center; 
    }

  </style>
  <body>
    <?php
        include ("header.html"); ?>
  <h5 class="card-title fw-semibold mb-4" style="text-align:center;">Gestion de Parcelle</h5>
        <div class="card">
          <div class="card-body">
          <form>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Vari&eacutet&eacute Parcelle</label>
            <select name="parcelle" class="select-personnalise">
                    <option value="">Ok</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Surface</label>
              <input type="number" class="form-control" id="surface" name ="occupation">
            </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Vari&eacutet&eacute de th&eacute Plant&eacute</label>
            <select name="parcelle" class="select-personnalise">
                    <option value="">Ok</option>
                </select>
            </div>
            
            </form>
            <button id="submitt" type="submit" class="btn btn-primary" style = "background-color: #5cb874">Updater</button>
        </div>
       </div>     
       <div class="container1">
            <button class="bouton-vert"><a href="accueilBack.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Retour</a></button>
        </div>

      <?php  include ("footer.html");
    ?>
  </body>
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/animation.js"></script>
  <script src="../assets/js/imagesloaded.js"></script>
  <script src="../assets/js/popup.js"></script>
  <script src="../assets/js/custom.js"></script>

  <script src="../assets/header/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/header/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/header/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/header/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/header/assets/vendor/php-email-form/validate.js"></script>

  <script src="../assets/form/libs/jquery/dist/jquery.min.js"></script>
	  <script src="../assets/form/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	  <script src="../assets/form/js/sidebarmenu.js"></script>
	  <script src="../assets/form/js/app.min.js"></script>
	  <script src="../assets/form/libs/simplebar/dist/simplebar.js"></script>

    <script src="../assets/table/js/jquery.min.js"></script>
  <script src="../assets/table/js/popper.js"></script>
  <script src="../assets/table/js/bootstrap.min.js"></script>
  <script src="../assets/table/js/main.js"></script>
    <script src="../assets/boutton/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/boutton/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/boutton/js/sidebarmenu.js"></script>
  <script src="../assets/boutton/js/app.min.js"></script>
  <script src="../assets/boutton/libs/simplebar/dist/simplebar.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/header/assets/js/main.js"></script>

  
  </html>







  
