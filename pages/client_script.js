function prefillform(mail,motDePasse) {
    document.getElementById("email").value = mail;
    document.getElementById("password").value = motDePasse;
}

function getLoginDetails() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'client.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var produits = JSON.parse(xhr.responseText);
                prefillform(produits[0].mail,produits[0].mdp);
            } else {
                gestionErreur(xhr.status);
            }
        }
    };
    xhr.send();
}

window.onload = getLoginDetails();