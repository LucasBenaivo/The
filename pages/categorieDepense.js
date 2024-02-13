// Fonction pour effectuer la requête AJAX
function fetchDropdownDataCat() {
    // Créer un nouvel objet XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Configurer la requête
    xhr.open('POST', '../toky_part1/getAllCategorieDepense.php', true);

    // Définir le type de réponse attendu
    //xhr.responseType = 'json';

    // Gérer la réponse du serveur
    xhr.onload = function() {
        if (this.status >=   200 && this.status <   400) {
            // Supposons que 'dropdown' est l'ID de votre élément select HTML
            var dropdown = document.getElementById('selectCat');
            dropdown.innerHTML="";
            var data = JSON.parse(xhr.responseText);
            console.log(data);

            // Parcourir les données et créer les options pour chaque élément de la liste
            for (var i =   0; i < data.length; i++) {
                var option = document.createElement('option');
                option.text = data[i].categorie; // Assurez-vous que 'nom' correspond à la propriété de vos données
                option.value = data[i].id; // Assurez-vous que 'id' correspond à la propriété de vos données
                dropdown.appendChild(option);
            }
        } else {
            // Une erreur s'est produite lors de la requête
            console.error('Erreur lors de la requête AJAX : ' + this.status);
        }
    };

    // Envoyer la requête
    xhr.send();
}

// Appeler la fonction pour charger les données dans la liste déroulante

//document.addEventListener('DOMContentLoaded', function() {
    
//});
function submitCategoryForm() {
    // Sélectionnez le formulaire par son ID
    //var formElement = document.getElementById(formId);

        // Collectez les données du formulaire
        var categorie = document.getElementById('categorieNom').value;

        // Créez un nouvel objet XMLHttpRequest
        var xhr = new XMLHttpRequest();

        // Configurez la requête
        xhr.open('POST', '../toky_part1/insertCategorieDepense.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        // Gérez la réponse du serveur
        xhr.onload = function() {
            if (xhr.readyState ===   4 && xhr.status ===   200) {
                alert(xhr.responseText); // Affichez la réponse du serveur
                fetchDropdownDataCat();
            } else {
                console.error('Une erreur s\'est produite pendant la transaction');
            }
        };

        // Envoyez la requête avec les données du formulaire
        xhr.send('categorie=' + encodeURIComponent(categorie)); 
}

// Function to fetch and populate the table with data
function fetchTableData() {
    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    var someIdVariable=document.getElementById('selectCat').value;
    // Configure the request
    xhr.open('POST', '../toky_part1/getCategorieDepenseById.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    // Set the expected response type to JSON
    //xhr.responseType = 'json';

    // Handle the server response
    xhr.onload = function() {
        if (xhr.status ===  200) {
            // Get the table element by its ID
            var table = document.getElementById('tableCueil');
            var data = JSON.parse(xhr.responseText);
            console.log(data.categorie);


            // Clear existing table content
            table.innerHTML = "";

            // Loop through the received data and add rows to the table
                var row = document.createElement('tr');
                
                var nomCell = document.createElement('td');
                nomCell.textContent = data.categorie;
                row.appendChild(nomCell);
                
                //var genreCell = document.createElement('td');
                //genreCell.textContent = data.cout;
                //row.appendChild(genreCell);

                //var dtnCell = document.createElement('td');
                //dtnCell.textContent = data.dtn;
                //row.appendChild(dtnCell);

                table.appendChild(row);
            
        } else {
            console.error('Error: ' + xhr.status);
        }
    };

    // Send the request with the form data
    xhr.send('id=' + encodeURIComponent(someIdVariable)); // Replace someIdVariable with the actual ID value you want to send
}

document.addEventListener('DOMContentLoaded', function() {
    var button = document.getElementById('showbut');

// Ajoutez un écouteur d'événements de clic au bouton
button.addEventListener('click', function() {
    // Ici, vous pouvez appeler la fonction fetchTableData()
    fetchTableData();
});
});
