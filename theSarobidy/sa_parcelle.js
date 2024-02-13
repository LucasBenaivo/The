function chargerProduits() {
       var xhr = new XMLHttpRequest();
        xhr.open('GET', 'parcelles.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var produits = JSON.parse(xhr.responseText);
                    afficherProduitsListeDeroulante(produits);
                } else {
                    gestionErreur(xhr.status);
                }
            }
        };
        xhr.send();
    }
    
    function afficherProduitsListeDeroulante(produits) {
        var container = document.getElementById('produitsContainer');
    
        
        produits.forEach(function(produit) {
            var option = document.createElement('option');
            option.value = produit.id;
            option.textContent = produit.nom;
            container.appendChild(option);
        });
    
    }
    

    function gestionErreur(status) {
        alert('Une erreur s\'est produite : ' + status);
    }

 chargerProduits();
