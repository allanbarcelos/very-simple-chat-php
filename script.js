var username = prompt("Choose an username")

function fetchMessages() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chat-box").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "fetch_messages.php", true);
    xhttp.send();
}

function sendMessage() {
    var message = document.getElementById("message").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            fetchMessages();
            document.getElementById("message").value = '';
        }
    };
    xhttp.open("POST", "send_message.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("message=" + message + "&" + "username=" + username);
}

document.getElementById("message").addEventListener("keydown", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        sendMessage();
    }
});

setInterval(fetchMessages, 1000);
