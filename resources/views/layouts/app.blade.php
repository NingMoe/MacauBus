<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/app.css">
           
        
        <title>澳門巴士營運管理平台</title>
    </head>

    <body>

        
        <div class='b'>
            @include('inc.navbar')

        </div>
        
        <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
        </div>
        <div id='app'></div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/js/pikaday.js"></script>
    <script src="/js/app.js"></script> 
</html>