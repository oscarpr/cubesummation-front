function send() {
    var content = document.getElementById('content-request').value.trim();
    document.getElementById('content-request').value = content;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            onResponse(this);
        }
    };
    xhttp.open('POST', 'http://localhost:8000/api/operation', true);
    xhttp.send(content);
}

function onResponse(response) {
    var content = response.response.split(' ');
    display = '<ul>';
    content.forEach(digit => {
        if (digit !== '') {
            display = display + '<li>' + digit + '</li>';
        }
    });
    displat = display + '</ul>';
    document.getElementById('content-response').innerHTML = display;
}