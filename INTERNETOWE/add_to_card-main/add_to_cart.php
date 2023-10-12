<?php

    //pobieranie tablicy z iloscia produktow z cookies
    function pobierz(){
        $produkty = $_COOKIE["koszyk"];
        $produkty = json_decode($produkty, true);
    }

    //zwiekszanie ilosci produktow w koszyku
    function zwieksz_wartosc(){
        $produkty[$_GET["id"]] = $produkty[$_GET["id"]] + 1;
        print_r($produkty[$_GET["id"]]);
        setcookie("koszyk", json_encode($produkty), time() + 864000);
    }
  

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
    <h3>Dodano do koszyka</h3>
</body>
</html>