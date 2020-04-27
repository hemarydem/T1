function displayHome() {
    let body = document.getElementById('container'); 
    let request = new XMLHttpRequest;
    request.open("GET", "signIn.php", true);
        request.onreadystatechange = function() {
        if (request.readyState == 4 ) {
            if(request.status == 200) {
                body.innerHTML = request.responseText;
            }
        }
    };
    request.send();
}