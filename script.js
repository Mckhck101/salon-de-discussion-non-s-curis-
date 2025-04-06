function loadMessages() {
    fetch('get_messages.php')
        .then(res => res.text())
        .then(data => {
            document.getElementById('chatbox').innerHTML = data;
            document.getElementById('chatbox').scrollTop = document.getElementById('chatbox').scrollHeight;
        });
}

document.getElementById('chat-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const user = encodeURIComponent(document.getElementById('username').value);
    const msg = encodeURIComponent(document.getElementById('message').value);
    fetch(`send_message.php?username=${user}&message=${msg}`)
        .then(() => {
            document.getElementById('message').value = '';
            loadMessages();
        });
});

// Chargement initial
loadMessages();
setInterval(loadMessages, 2000);
