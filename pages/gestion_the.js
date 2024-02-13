function fetchTableData() {
    var xhr = new XMLHttpRequest();

    xhr.open('GET', '../toky_part1/getAllThe.php', true);
    //xhr.responseType = 'json';

    xhr.onload = function() {
        if (this.status >=  200 && this.status <  400) {
            var table = document.getElementById('table');
            var data = JSON.parse(xhr.responseText);

            for (var i =  0; i < data.length; i++) {
                var row = document.createElement('tr');
                
                var idCell = document.createElement('td');
                idCell.textContent = data[i].nom;
                row.appendChild(idCell);
                
                var nomCell = document.createElement('td');
                nomCell.textContent = data[i].occupation_par_m2;
                row.appendChild(nomCell);

                 var nomCell = document.createElement('td');
                nomCell.textContent = data[i].rendement;
                row.appendChild(nomCell);
                
                table.appendChild(row);
            }
        } else {
            console.error('Error during AJAX request: ' + this.status);
        }
    };

    xhr.send();
}

function submitForm() {
    var formElement = document.getElementById('submitt');
    formElement.addEventListener('click', function(event) {
        event.preventDefault(); // Empêche la soumission normale du formulaire

        var nom = document.getElementById('nom').value;
        var occupationParM2 = document.getElementById('occupationParM2').value;
        var rendement = document.getElementById('rendement').value;

        // Crée un nouvel objet XMLHttpRequest
        var xhr = new XMLHttpRequest();

        // Configure la requête
        xhr.open('POST', '../toky_part1/insertThe.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        // Gère la réponse
        xhr.onload = function() {
            if (xhr.readyState ===  4 && xhr.status ===  200) {
                alert(xhr.responseText); // Affiche la réponse du serveur
                fetchTableData();
            } else {
                console.error('Une erreur s\'est produite pendant la transaction');
            }
        };

        // Envoie la requête avec les données du formulaire
        xhr.send('nom=' + encodeURIComponent(nom) + '&occupationParM2=' + encodeURIComponent(occupationParM2) + '&rendement=' + encodeURIComponent(rendement));
    });
}

// Fonction pour effectuer la requête AJAX
function fetchListData() {
    // Créer un nouvel objet XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Configurer la requête
    xhr.open('GET', '../toky_part1/getAllThe.php', true);

    // Définir le type de réponse attendu
    //xhr.responseType = 'json';

    // Gérer la réponse du serveur
    xhr.onload = function() {
        if (this.status >=  200 && this.status <  400) {
            // Supposons que 'selectList' est l'ID de votre élément select HTML
            var selectList = document.getElementById('selectThe');
            selectList.innerHTML="";
            var data = JSON.parse(xhr.responseText);

            // Parcourir les données et créer les options pour chaque élément de la liste
            for (var i =  0; i < data.length; i++) {
                var option = document.createElement('option');
                option.text = data[i].nom; // Assurez-vous que 'nom' correspond à la propriété de vos données
                option.value = data[i].id; // Assurez-vous que 'id' correspond à la propriété de vos données
                selectList.appendChild(option);
            }
        } else {
            // Une erreur s'est produite lors de la requête
            console.error('Erreur lors de la requête AJAX : ' + this.status);
        }
    };

    // Envoyer la requête
    xhr.send();
}

// Fonction pour envoyer les données du formulaire via AJAX
function submitUpdateForm() {
    // Sélectionnez le formulaire par son ID
    var formElement = document.getElementById('submitt');

    formElement.addEventListener('click', function(event) {
        event.preventDefault(); // Empêchez la soumission normale du formulaire

        // Collectez les données du formulaire
        var id = document.getElementById('selectThe').value;
        var nom = document.getElementById('nom').value;
        var occupationParM2 = document.getElementById('occupation').value;
        var rendement = document.getElementById('rendement').value;

        // Créez un nouvel objet XMLHttpRequest
        var xhr = new XMLHttpRequest();

        // Configurez la requête
        xhr.open('POST', '../toky_part1/updateThe.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        // Gérez la réponse du serveur
        xhr.onload = function() {
            if (xhr.readyState ===  4 && xhr.status ===  200) {
                alert(xhr.responseText); // Affichez la réponse du serveur
                fetchListData();
            } else {
                console.error('Une erreur s\'est produite pendant la transaction');
            }
        };

        // Envoyez la requête avec les données du formulaire
        xhr.send('id=' + encodeURIComponent(id) + '&nom=' + encodeURIComponent(nom) + '&occupationParM2=' + encodeURIComponent(occupationParM2) + '&rendement=' + encodeURIComponent(rendement));
    });
}







