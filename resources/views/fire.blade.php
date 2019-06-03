<!DOCTYPE HTML>
<html>

<head>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/6.0.4/firebase-app.js"></script>
    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#config-web-app -->
<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyC1tdNvS3BIIGfgINcwIJTbT3o8XE9T1h4",
        authDomain: "reminding-226dc.firebaseapp.com",
        databaseURL: "https://reminding-226dc.firebaseio.com",
        projectId: "reminding-226dc",
        storageBucket: "reminding-226dc.appspot.com",
        messagingSenderId: "305958247202",
        appId: "1:305958247202:web:0af3df6e162b377b"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
    <!-- Add additional services that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.3/firebase-messaging.js"></script>
</head>
<body>
<script>
    const messaging = firebase.messaging();
    messaging.requestPermission().then(res=>
    {
        return messaging.getToken();
    }, err => {
        // 若拒絕通知
        console.log(err);
    })
        .then(token => {
            // 成功取得 token
            console.log(token);
            document.write(token);
        });
</script>
<p></p>
<div>
    <button class=" col-md-12">123</button>
</div>
<script>
        @if($number2->current_no==="$a"){
    messaging.onMessage(payload => {
        console.log('onMessage: ', payload);
        var notifyMsg = payload.notification;
        var notification = new Notification(notifyMsg.title, {
            body: notifyMsg.body,
            icon: notifyMsg.icon
        });
    });  }@endif
    var key = 'AAAARzyIWyI:APA91bGUpB1RIiGv3W9vDpCWWacl71X6GEx6PI9fe9JXTp8hMXUrB4TaafOpYYJROJetTRoUGgxzGNRoltq0cRG4hvKn7neDKKsK8RUzG2BhtRK9uqVBa1xbMrEfjypBHTekE3VoSAmV';
    var to = 'fXBRQnqdcVo:APA91bEVvrBRXL7VyCiIikWeQFPvk7VvH4KUmFuh1pZFItkRaREdWkHOYhp6PBBsU5NxV9CtXCGbWSn631kNAvz6few6cEsrU-0qkvkgPSz_Vg5g-SgAS5eXGiC-QrNBr5_uZTjar5Qm';

        var notification = {
            'title': 'xx診所預約提醒',
            'body': '目前看診號碼為{{$number2->current_no}}號,還須等待{{$registers->reminding_no}}人',
            'click_action': 'http://localhost:8000',
            'icon': '/img/app/collaboration.jpg'
          };

    fetch('https://fcm.googleapis.com/fcm/send', {
        'method': 'POST',
        'headers': {
            'Authorization': 'key=' + key,
            'Content-Type': 'application/json'
        },
        'body': JSON.stringify({
            'notification': notification,
            'to': to
        })
    }).then(function(response) {
        console.log(response);
    }).catch(function(error) {
        console.error(error);
    });
</script>

</body>
</html>