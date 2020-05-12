<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Solent Futures Bot</title>

    <script>

    var botmanWidget = {
      title: 'Solent Futures Bot',
      introMessage: 'Hi! 👋 I\'m Solent Futures Bot. How can I help you today? Please type your enquiry below.✍️',
      mainColor: '#91c8ed',
      bubbleBackground: '#91c8ed',
      bubbleAvatarUrl: 'https://i.ibb.co/Wz8dHDS/Copy-of-Handdrawn-Circle-Logo-1.png',
      aboutText: 'Created by MS',
      aboutLink: 'https://github.com/msmolen258/chat_bot_SF',
    };

    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        body {
            font-family: "Source Sans Pro", sans-serif;
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
    </style>
</head>
<body>
<div class="container">
    <div class="content" id="app">
        <botman-tinker api-endpoint="/botman"></botman-tinker>
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>
