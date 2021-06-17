<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
</head>
<body>

    <h3> {{$nome}} {{$cognome}} </h3>
    <p><em> {{$mail}} </em></p>
    <p> {{$indirizzo}} </p>

    <hr>

    <p>Torna alla <a href=" {{ route('home') }} ">Home</a></p>

    
</body>
</html>