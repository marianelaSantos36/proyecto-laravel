<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    
</head>
<body>
    @yield('cuerpo')


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9QbBzDgYzG2d/OAiE5s3HPTK9ErgWfXYAroGckDfxCk5xyl3Ad" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha384-ps2t4FvO2bR0hZZTZjmtHsDbD1E7pykT9lL2HneZvlN7KOZTh8JbF/0Lb2DfzVf9B" crossorigin="anonymous"></script>
    @vite('resources/js/app.js')
</body>
</html>