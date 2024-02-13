    function chargerProduits() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'find_parcelles.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var produits = JSON.parse(xhr.responseText);
                    afficherProduits(produits);
                } else {
                    gestionErreur(xhr.status);
                }
            }
        };
        xhr.send();
    }

    function afficherProduits(produits) {
        var tbody = document.querySelector('#tableProduits tbody');
        produits.forEach(function(produit) {
            var tr = document.createElement('tr');
            tr.innerHTML = '<td>' + produit.nom + '</td>';
            tbody.appendChild(tr);
        });
    }

    function gestionErreur(status) {
        alert('Une erreur s\'est produite : ' + status);
    }


chargerProduits();4