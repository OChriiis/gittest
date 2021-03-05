<?php

    $reais = $_GET["valorReais"];
    $moeda = $_GET["moeda"];
  

    $Dollar = $reais / 5.41;
    $Euro = $reais / 6.57;

    if ($moeda == "Dollar"){
        echo "<h1>Conversão em $moeda = $ $Dollar</h1>";
    } else{
        echo "<h1>Conversão em $moeda = £ $Euro </h1>";
    }
    