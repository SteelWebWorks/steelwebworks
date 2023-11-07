window.streamerbotClient = new StreamerbotClient({
    host: '127.0.0.1',
    port: '8080',
    endpoint: '/',
    subscribe: '*',
});

window.streamerbotCustomClient = new WebSocket("ws://127.0.0.1:8080");
streamerbotCustomClient.addEventListener("open", (event) => {
    streamerbotCustomClient.send(JSON.stringify({
        "request": "Subscribe",
        "events": {
            "General": ["Custom"]
        },
        "id": "1"
    }));
});