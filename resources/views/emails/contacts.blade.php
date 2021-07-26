<?php

/* dd($name); */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hai ricevuto un nuovo messaggio</h1>




    <p><em>Da: {{$name}}</em></p>
    <em>Email: {{$email}}</em>

    <em>Message</em>
    <p>{{$message}}</p>


    Thanks,
    {{ config('app.name') }}

</body>

</html>