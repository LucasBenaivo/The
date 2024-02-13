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

  </head>
  <style>

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
  <h5 class="card-title fw-semibold mb-4" style="text-align:center;">Resultat</h5>
        <div class="card">
          <div class="card-body">
          <form action ="" method ="POST">

            
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Date debut</label>
              <input type="date" class="form-control" id="datedeb" name ="dateDebut">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Date Fin</label>
              <input type="date" class="form-control" id="datefin" name ="dateDebut">
            </div>
            
            </form>
<button onclick="postData() " type="submit" class="btn btn-primary" style = "background-color: #5cb874">Valider</button>


        </div>
       </div>  
            
<section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">Table différence</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-wrap">
            <table class="table table-responsive-xl" name = "table"  id="firstTable">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <!-- <th>&nbsp;</th>  
                  <th>&nbsp;</th>  -->
                </tr>
              </thead>
              <tbody id="table">
                <tr class="alert" role="alert">
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

       <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Table resultats</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-responsive-xl" name = "table" id="secondTable">
						  <thead>
						    <tr>
						    	<th></th>
						    	<th></th>
						    	<th></th>
						    	<th></th>
						    	<th></th>
						    	<th></th>
						    	<th></th>
						      <!-- <th>&nbsp;</th>	
						      <th>&nbsp;</th>	 -->
						    </tr>
						  </thead>
						  <tbody id="table">
						    <tr class="alert" role="alert">
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
            <button class="bouton-vert"><a href="accueilFront.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Retour</a></button>
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

  <script>
// Function to send AJAX POST request
function postData() {
  var dateDeb=document.getElementById('datedeb').value;
  var dateFin=document.getElementById('datefin').value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../TheFinal/result_array.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function() {
        if (this.status >=  200 && this.status <  400) {
            // Success! Parse the JSON response and populate the tables
            var data = JSON.parse(this.response);
            console.log(data);
            populateTables(data);
        } else {
            console.error("Server responded with status " + this.status);
        }
    };

    xhr.onerror = function() {
        console.error("An error occurred during the transaction");
    };

    // Send the POST request with URL-encoded form data
    var params = "datedeb=" + encodeURIComponent(dateDeb) + "&datefin=" + encodeURIComponent(dateFin);
    xhr.send(params);
}

// Function to populate the tables with data
function populateTables(data) {
    var firstTableBody = document.getElementById("firstTable").getElementsByTagName("tbody")[0];
    var secondTableBody = document.getElementById("secondTable").getElementsByTagName("tbody")[0];

    // Clear existing rows
    firstTableBody.innerHTML = '';
    secondTableBody.innerHTML = '';

    // Populate the first table with the first part of the data
    Object.keys(data).forEach(function(key) {
        var row = document.createElement("tr");
        var cell = document.createElement("td");
        cell.textContent = key + ": " + data[key];
        row.appendChild(cell);
        firstTableBody.appendChild(row);
    });

    // Populate the second table with the rest of the data
    // Assuming there's another set of data that needs to be displayed
    var secondDataSet = {}; // Replace with actual logic to get the second dataset
    Object.keys(secondDataSet).forEach(function(key) {
        var row = document.createElement("tr");
        var cell = document.createElement("td");
        cell.textContent = key + ": " + secondDataSet[key];
        row.appendChild(cell);
        secondTableBody.appendChild(row);
    });
}


</script>
  </html>