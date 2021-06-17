<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servizi</title>
</head>
<body>

<h1>Corsi disponibili:</h1>

<h2> {{$titolo_corso_1}} </h2>
<p> {{$descrizione_corso_1}} </p>
<h4><em> {{$costo_corso_1}} </em></h4>

<hr>

<h2> {{$titolo_corso_2}} </h2>
<p> {{$descrizione_corso_2}} </p>
<h4><em> {{$costo_corso_2}} </em></h4>

<hr>

<p>Torna alla <a href=" {{ route('home') }} ">Home</a></p>



    
</body>
</html>