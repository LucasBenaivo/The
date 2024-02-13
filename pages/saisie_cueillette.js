// Fonction pour effectuer la requête AJAX
function fetchDropdownDataCueil() {
    // Créer un nouvel objet XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Configurer la requête
    xhr.open('GET', '../toky_part1/getAllCueilleur.php', true);

    // Définir le type de réponse attendu
    //xhr.responseType = 'json';

    // Gérer la réponse du serveur
    xhr.onload = function() {
        if (this.status >=   200 && this.status <   400) {
            // Supposons que 'dropdown' est l'ID de votre élément select HTML
            var dropdown = document.getElementById('selectCueil');
            dropdown.innerHTML="";
            var data = JSON.parse(xhr.responseText);
            console.log(data);

            // Parcourir les données et créer les options pour chaque élément de la liste
            for (var i =   0; i < data.length; i++) {
                var option = document.createElement('option');
                option.text = data[i].nom; // Assurez-vous que 'nom' correspond à la propriété de vos données
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

function fetchDropdownDataParc() {
    // Créer un nouvel objet XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Configurer la requête
    xhr.open('GET', '../toky_part1/getAllParcelles.php', true);

    // Définir le type de réponse attendu
    //xhr.responseType = 'json';

    // Gérer la réponse du serveur
    xhr.onload = function() {
        if (this.status >=   200 && this.status <   400) {
            // Supposons que 'dropdown' est l'ID de votre élément select HTML
            var dropdown = document.getElementById('selectParc');
            dropdown.innerHTML="";
            var data = JSON.parse(xhr.responseText);
            console.log(data);

            // Parcourir les données et créer les options pour chaque élément de la liste
            for (var i =   0; i < data.length; i++) {
                var option = document.createElement('option');
                option.text = data[i].numero; // Assurez-vous que 'nom' correspond à la propriété de vos données
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
document.addEventListener('DOMContentLoaded', function() {
    fetchDropdownDataCueil();
    fetchDropdownDataParc();
});


// Function to handle the AJAX call
function submitForm() {
    // Assuming you have input elements with ids 'date', 'id_cueilleur', 'id_parcelle', 'poids'
    var date = document.getElementById('date').value;
    var id_cueilleur = document.getElementById('selectCueil').value;
    var id_parcelle = document.getElementById('selectParc').value;
    var poids = document.getElementById('poids').value;

    // Create an instance of XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Prepare the data to be sent
    var data = 'date=' + encodeURIComponent(date) +
               '&id_cueilleur=' + encodeURIComponent(id_cueilleur) +
               '&id_parcelle=' + encodeURIComponent(id_parcelle) +
               '&poids=' + encodeURIComponent(poids);

    // Open a POST connection
    xhr.open('POST', '../toky_part1/insertCueillette.php', true);

    // Set the request header to tell the server what kind of data we're sending
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    // Handle the response
    xhr.onreadystatechange = function() {
        if (xhr.readyState ==  4 && xhr.status ==  200) {
            // The request was successful, process the response here
            alert(xhr.responseText);
        }
    };

    // Send the data
    xhr.send(data);
}

// Example usage: call submitForm when a button is clicked
//document.getElementById('submitButton').addEventListener('click', submitForm);
