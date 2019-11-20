<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forever Alone</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css" media="screen">
        #messages{
            color: #1abc9c;
        }
        #messages li{
            max-width: 50%;
            margin-bottom:10px;
            border-color: #34495e;
        }
    </style>
</head>
<body>
<p class="container">
    <div class="content">
        <h1>Nhân Mad Dog</h1>
    </div>
</p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>
<script>
    $(document).ready(function(){
        var pusher = new Pusher('53525704a83ec1ac3f72', {
            cluster: 'ap1',
            encrypted: false
        });
        var channel = pusher.subscribe('directchat-channel');
        channel.bind('App\\Events\\DirectChatEvent', addMessageDemo);
    });
    function addMessageDemo(data) {
        var liTag = $("<li class='list-group-item'></li>");
        liTag.html(data.customermess);
        $('#messages').append(liTag);
    }
</script>
</body>
</html>
