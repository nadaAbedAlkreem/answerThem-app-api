<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCM Token</title>
    <!-- Add Firebase SDK -->
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-messaging.js"></script>
</head>
<body>
<h1>Retrieve FCM Token</h1>

<script>
    // Your Firebase configuration
    const firebaseConfig = {
        apiKey: "YOUR_API_KEY",
        authDomain: "YOUR_AUTH_DOMAIN",
        projectId: "answerthem-api-notification",
        storageBucket: "YOUR_STORAGE_BUCKET",
        messagingSenderId: "YOUR_MESSAGING_SENDER_ID",
        appId: "YOUR_APP_ID",
        measurementId: "YOUR_MEASUREMENT_ID"
    };

    // Initialize Firebase
    const app = firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();

    // Get the FCM Token
    messaging.getToken({ vapidKey: 'YOUR_VAPID_KEY' }).then((currentToken) => {
        if (currentToken) {
            console.log('FCM Token:', currentToken);
            // Send token to the server
            fetch('/api/update-device-token', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ fcm_token: currentToken }),
            }).then(response => {
                return response.json();
            }).then(data => {
                console.log(data.message);
            }).catch(error => {
                console.error('Error sending token to server:', error);
            });
        } else {
            console.log('No registration token available. Request permission to generate one.');
        }
    }).catch((err) => {
        console.log('An error occurred while retrieving token. ', err);
    });
</script>
</body>
</html>
