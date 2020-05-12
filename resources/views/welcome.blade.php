<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Solent Futures Chatbot</title>
    <script>

    var botmanWidget = {

      title: 'Solent Futures Bot',
      introMessage: 'Hi! 👋 I\'m Solent Futures Bot. How can I help you today? Please type your enquiry below.✍️',
      mainColor: '#91c8ed',
      bubbleBackground: '#91c8ed',
      bubbleAvatarUrl: 'https://i.ibb.co/Wz8dHDS/Copy-of-Handdrawn-Circle-Logo-1.png',
      desktopHeight: '650',
      desktopWidth: '670',
      aboutText: 'Created by MS',
      aboutLink: 'https://github.com/msmolen258/chat_bot_SF'


    };

    </script>
    

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        body {
            font-family: "Varela Round", sans-serif;
            margin: 0;
            padding: 0;
            background: radial-gradient(#e1ebea, #45a6b3);
        }

        .container {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .content {
            text-align: center;
        }

        .logo {
            margin-right: 40px;
            margin-bottom: 20px;
        }

        .links a {
            font-size: 1.25rem;
            text-decoration: none;
            color: white;
            margin: 10px;
        }

        @media all and (max-width: 500px) {

            .links {
                display: flex;
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="logo">
          <img src="https://i.ibb.co/NFyb6kZ/Handdrawn-Circle-Logo-2.png" alt="Smiley face">
        </div>

        <div class="links">
            <a href="/botman/tinker">Tinker</a>
            <a href="https://github.com/msmolen258/chat_bot_SF" target="_blank">GitHub Repository</a>
        </div>
    </div>
</div>
</body>
</html>
