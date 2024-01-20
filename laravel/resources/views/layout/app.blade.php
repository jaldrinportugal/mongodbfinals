<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
<header class="bg-dark p-3">
    <div class="container">
        <div class="row justify-content-between">
            <div id="aa" class="text-warning">Inventory System</div> 
            <nav>
            
            <a class="p-2" href="{{ route('aldrin') }}">Events</a>


            </nav>
        </div>
    </div>
</header>

    @yield('content')
    </body>
</html>