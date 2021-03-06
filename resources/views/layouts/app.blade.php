<html>
<head>
    <title>Site Panda - @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><link rel="stylesheet"  type="text/css" href="../css/home.css">
    <link rel="stylesheet"  type="text/css" href="../css/home.css">
    <link rel="stylesheet"  type="text/css" href="../css/qui.css">
    <link rel="stylesheet"  type="text/css" href="../css/diapo.css">
    <link rel="stylesheet"  type="text/css" href="../css/contact.css">
</head>
<body>
    @section('sidebar')

    @show

    <div class="header">

        <div class="acceuil">
            <a href="/">Acceuil</a>
        </div>
        <div class="qui">
            <a class="nav-link" href="/qui">Qui sont-ils </a>
        </div>
        <div class="diaporama">
            <a class="nav-link" href="/diaporama">Diaporama</a>
        </div>
        <div class="contact">
            <a class="nav-link" href="/contact">Contact</a>
        </div>
    </div>
    
    
         <div class="container-fluid">
            @yield('content')
        </div> 
    
</div>
<div class="source">
    <div >Sources texte : 
        <a href="https://fr.wikipedia.org/wiki/Panda" style="color:white;" target="_blank">wikipedia</a> 
        <a href="https://www.zoobeauval.com/les-animaux/en-vedette/pandas-geants" style="color:white;" target="_blank">, zoo de beauval</a>
    </div>
    <div >Sources images : <a href="https://www.pexels.com/" style="color:white;" target="_blank">pexels</a> </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>