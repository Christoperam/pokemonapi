<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a id="navbar-brand" class="navbar-brand">Pok&eacute;mon API</a>
    </div>
</nav>
<?php 
$poke = curl_init();
$url = "https://pokeapi.co/api/v2/pokemon?offset=0&limit=10";
curl_setopt($poke, CURLOPT_URL, $url);
curl_setopt($poke, CURLOPT_RETURNTRANSFER, TRUE);
$respuesta = curl_exec($poke);
if($ex = curl_error($poke))
{
    echo var_dump($ex);
}
else
{
    $data = json_decode($respuesta, true);
    return $data;
}
curl_close($poke);
?>
<body>