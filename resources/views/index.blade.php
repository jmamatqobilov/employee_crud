<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application</title>
    <link rel="icon" href="/flowlogo.svg">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>

<body>
    <div class="" style="background-color:#F7F8FA;min-height:100vh;display:flex;flex-direction:column;justify-content:space-between">
        <div class="">
            @include('layout.header')
            @yield('application')
        </div>
        @include('layout.footer')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
     @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

     *{
        padding: 0;
        margin: 0;
        box-sizing: border-box
     }
</style>
</html>