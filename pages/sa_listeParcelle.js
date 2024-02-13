alert("coucou");
function chargerProduits() {
    var container = document.getElementById('produitsContainer1').value;
    var xhr = new XMLHttpRequest();
     xhr.open('GET', 'listeParcelles.php', true);
     xhr.onreadystatechange = function() {
         if (xhr.readyState === XMLHttpRequest.DONE) {
             if (xhr.status === 200) {
                 var produits = JSON.parse(xhr.responseText);
                 console.log(produits);
                 afficherProduitsListeDeroulante(produits);
             } else {
                 gestionErreur(xhr.status);
             }
         }
     };
     xhr.send('container=' + encodeURIComponent(container));
 }
 
 function afficherProduitsListeDeroulante(produits) {
     var container = document.getElementById('parcelle').value;
 
     
     produits.forEach(function(produit) {
         var option = document.createElement('option');
         option.value = produit.id;
         option.textContent = produit.numero;
         container.appendChild(option);
     });
 
 }
 

 function gestionErreur(status) {
     alert('Une erreur s\'est produite : ' + status);
 }

chargerProduits();

function afficherProduits(produits) {
    var tbody = document.querySelector('#tableProduits tbody');
    tbody.innerHTML = ''; // Efface le contenu précédent
    produits.forEach(function(produit) {
        var tr = document.createElement('tr');
        tr.innerHTML = '<td>' + produit.id_parcelle + '</td>' + '<td>' + produit.numero + '</td>' + '<td>' + produit.nom + '</td>'+ '<td>' + produit.surface + '</td>';
        tbody.appendChild(tr);
    });
}


function getProduits() {
    var containerValue = document.getElementById('parcelle').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'test.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var produits = JSON.parse(xhr.responseText);
                afficherProduits(produits);
            } else {
                console.error('Erreur lors de la requête AJAX : ' + xhr.status);
            }
        }
    };
    xhr.send('container=' + encodeURIComponent(containerValue));
    
 }



 
