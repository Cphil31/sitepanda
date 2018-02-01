<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            
        @show
        <a href="/">Acceuil</a>
        <a href="qui">Qui sont-ils </a>
        <a href="diaporama">Diaporama </a>
        <a href="contact">Contact</a>
        
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>