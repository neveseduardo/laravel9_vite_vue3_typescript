<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/sass/app.scss')
</head>
<body>
    <noscript>Precisa habilitar o javascrit</noscript>
    <div id="app">
    </div>

    @vite('resources/ts/app.ts')
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>