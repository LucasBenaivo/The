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

    <script src="gestion_cueilleur.js"></script>


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

.select2 {
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

      .select2 option {
  padding: 10px; /* Ajoute de l'espace à l'intérieur des options */
  font-size: 16px; /* Taille de la police */
}

/* Lorsque le select est survolé */
.select2:hover {
  border-color: #45a049; /* Changement de couleur de la bordure au survol */
}

/* Style pour le conteneur des boutons radio */
.genre-select {
  margin-bottom: 20px; /* Ajoute de l'espace en bas */
}

/* Style pour le label */
.genre-select label {
  display: block; /* Affiche en bloc */
  margin-bottom: 5px; /* Ajoute de l'espace en bas */
}

/* Style pour les boutons radio */
.genre-select input[type="radio"] {
  display: none; /* Masque les boutons radio par défaut */
}

/* Style pour les labels des boutons radio */
.genre-select label {
  display: inline-block; /* Affiche en ligne */
  padding: 10px; /* Ajoute de l'espace autour du texte */
  font-size: 16px; /* Taille de la police */
  cursor: pointer; /* Curseur pointer */
  border-radius: 8px; /* Ajoute un peu de bord arrondi */
  border: 2px solid #ccc; /* Ajoute une bordure */
}

/* Lorsque le label d'un bouton radio est survolé */
.genre-select label:hover {
  border-color: #4CAF50; /* Changement de couleur de la bordure au survol */
}

/* Lorsqu'un bouton radio est coché */
.genre-select input[type="radio"]:checked + label {
  background-color: #4CAF50; /* Couleur de fond verte */
  color: #fff; /* Couleur du texte blanc */
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
        <br>
  <h5 class="card-title fw-semibold mb-4" style="text-align:center;">Gestion Cueilleur</h5>
        <div class="card">
          <div class="card-body">
          <form action ="" method ="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" name="nom">
            </div>
            <div class="mb-3">
                <div class="genre-select" id="genre-select">
                    <label>Sexe :</label>
                    <div>
                        <input type="radio" id="homme" name="genre" value="Homme">
                        <label for="homme">Homme</label>
                    </div>
                    <div>
                        <input type="radio" id="femme" name="genre" value="Femme">
                        <label for="femme">Femme</label>
                    </div>
                    </div>

            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Date de naissance</label>
              <input type="date" class="form-control" id="dtn" aria-describedby="emailHelp" name="dtn">
            </div>
            
            </form>
            <button type="submit" class="btn btn-primary" style = "background-color: #5cb874" onclick="submitForm()">Inserer</button>


        </div>
       </div>  
       
       <div class="card">
          <div class="card-body">
       <form action ="" method ="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Liste cueilleur</label>
            <select name="the" class="select-personnalise" id="selectCueil">
                
                </select>
            </div>
            </form>
            <button id="showbut" type="submit" class="btn btn-primary" style = "background-color: #5cb874">Afficher tableau</button>
        </div>
       </div>  

       <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Table</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-responsive-xl" name = "table" >
						  <thead>
						    <tr>
						    	<th>Nom</th>
						      <th>Genre</th>
						      <th>Date de naissance</th>
						      <!-- <th>&nbsp;</th>	
						      <th>&nbsp;</th>	 -->
						    </tr>
						  </thead>
						  <tbody id="tableCueil">
						    <tr class="alert" role="alert">
						      <!-- <td>ok</td> -->
						      <!-- <td><%= m.getPrixNormal() %></td>
							  <td><%= m.getPrixIntermediaire() %></td> -->
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
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
  <script src="gestion_cueilleur.js"></script>
      <script>//
   


</script>

  
  </html>