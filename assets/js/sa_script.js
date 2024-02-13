function prefillform(mail,motDePasse) {
    document.getElementById("mail").value = mail;
    document.getElementById("mdp").value = motDePasse;
}

function getLoginDetails() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../pages/admin.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var produits = JSON.parse(xhr.responseText);
                prefillform(produits[0].mail,produits[0].mdp);
            } else {
                alert(xhr.status);
            }
        }
    };
    xhr.send();
}

window.onload = getLoginDetails();