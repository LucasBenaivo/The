// Function to fetch and populate the table with data
function fetchTableData() {
    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    //var someIdVariable=document.getElementById('selectCat').value;
    // Configure the request
    xhr.open('POST', '../toky_part1/getConfigSalaire.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    // Set the expected response type to JSON
    //xhr.responseType = 'json';

    // Handle the server response
    xhr.onload = function() {
        if (xhr.status ===  200) {
            // Get the table element by its ID
            var table = document.getElementById('table');
            var data = JSON.parse(xhr.responseText);
            console.log(data[0]);


            // Clear existing table content
            table.innerHTML = "";

            // Loop through the received data and add rows to the table
                var row = document.createElement('tr');
                
                var nomCell = document.createElement('td');
                nomCell.textContent = data[0].valeur;
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
    xhr.send(); // Replace someIdVariable with the actual ID value you want to send
}

function submitCategoryForm() {
    // Sélectionnez le formulaire par son ID
    //var formElement = document.getElementById(formId);

        // Collectez les données du formulaire
        var categorie = document.getElementById('salaire').value;

        // Créez un nouvel objet XMLHttpRequest
        var xhr = new XMLHttpRequest();

        // Configurez la requête
        xhr.open('POST', '../toky_part1/updateConfigSalaire.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        // Gérez la réponse du serveur
        xhr.onload = function() {
            if (xhr.readyState ===   4 && xhr.status ===   200) {
                alert(xhr.responseText); // Affichez la réponse du serveur
                fetchTableData();
            } else {
                console.error('Une erreur s\'est produite pendant la transaction');
            }
        };

        // Envoyez la requête avec les données du formulaire
        xhr.send('valeur=' + encodeURIComponent(categorie)); 
}



document.addEventListener('DOMContentLoaded', function() {
    fetchTableData();
});
