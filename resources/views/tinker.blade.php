<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SETRAN ChatBot</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        body {
            font-family: "Source Sans Pro", sans-serif;
            margin: 0;
            padding: 0;
            background: radial-gradient(#57bfc7, #45a6b3);
            overflow-y:hidden;
        }

        .container {
            display: flex;
            height: 80vh;
            align-items: center;
            justify-content: center;
            border:1px solid;
            overflow-y:auto;
        }

        .content {
            text-align: center;
        }

        p {
            margin-left:1%;
            font-weight:bold;
        }

        h1{
            margin-top:30px;
            text-align:center;
        }
        h3{
            text-align:center;
        }
    </style>
</head>
<body>
<h1>SETRAN ChatBot</h1>
<h3>Informando a quantidade de municípios e bairros de um estado</h3>
<div class="container">
    <div class="content" id="app">
        <botman-tinker api-endpoint="/botman"></botman-tinker>
        <p>Pressione "Enter" para enviar</p>
    </div>
    <br>
</div>

<script src="/js/app.js"></script>
</body>
</html>