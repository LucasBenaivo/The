window.addEventListener("load", function(){
    function sendData() {
            var xhr;
            try {
                xhr = new XMLHttpRequest();
            } catch (e) {
                xhr = false;
            }

            var form = document.getElementById("form");
            var formData = new FormData(form);

            xhr.addEventListener("load", function (event) {
                if (xhr.status === 200) {
                    var response = event.target.responseText;
                    if (response === "success") {
                        alert(event.target.responseText);
                    } else {
                        alert(event.target.responseText);
                    }
                } else {
                    alert("Something went wrong!");
                }
            });

            xhr.open("POST", "traitementLogin.php");
            xhr.send(formData);
        }

        var form = document.getElementById("form");
        form.addEventListener("submit", function (event) {
            event.preventDefault();
            sendData();
        });
  });