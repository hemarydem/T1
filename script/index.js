function displaySignUp() {
    let body = document.getElementById('container'); 
    let request = new XMLHttpRequest;
    request.open("GET", "include/signUp.php", true);
        request.onreadystatechange = function() {
        if (request.readyState == 4 ) {
            if(request.status == 200) {
                body.innerHTML = request.responseText;
            }
        }
    };
    request.send();
}

function displaySignIn() {
    let body = document.getElementById('container'); 
    let request = new XMLHttpRequest;
    request.open("GET", "include/signIn.php", true);
        request.onreadystatechange = function() {
        if (request.readyState == 4 ) {
            if(request.status == 200) {
                body.innerHTML = request.responseText;
            }
        }
    };
    request.send();
}

function displayHome() {
    let body = document.getElementById('container'); 
    let request = new XMLHttpRequest;
    request.open("GET", "include/indexBody.php", true);
        request.onreadystatechange = function() {
        if (request.readyState == 4 ) {
            if(request.status == 200) {
                body.innerHTML = request.responseText;
            }
        }
    };
    request.send();
}

function checkStringLen(str,maxLen, minlen) {
    if(str > maxLen) return false;
    if(str < minlen) return false;
    return true;
}

function checkSpeChar(str) {
    let i = 0;
    while(str.length) {
        if(str.charCodeAt(i) <= 58 && str.charCodeAt(i) <= 64) return true;
        if(str.charCodeAt(i) <= 33 && str.charCodeAt(i) <= 47) return true;
        if(str.charCodeAt(i) <= 91 && str.charCodeAt(i) <= 96) return true;
        i++;
    }
    return false;
}

function checkNumChar(str) {
    let i = 0;
    while(str.length) {
        if(str.charCodeAt(i) <= 48 && str.charCodeAt(i) <= 57) return true;
        i++;
    }
    return false;
}

function checkMajChar(str) {
    let i = 0;
    while(str.length) {
        if(str.charCodeAt(i) <= 65 && str.charCodeAt(i) <= 90) return true;
        i++;
    }
    return false;
}

function checkForm() {
    let age  = document.getElementById('age').value
    let name = document.getElementById('name').value;
    checkStringLen(age,2,1);
    checkStringLen(name,50,1);
}