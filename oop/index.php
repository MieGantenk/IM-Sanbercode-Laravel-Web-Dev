<?php
    require_once 'animal.php';
    require_once 'frog.php';
    require_once 'ape.php';

    $sheep = new Animal("shaun");

    echo "Name: " . $sheep->name . "<br>";
    echo "Legs: " . $sheep->legs . "<br>";
    echo "Cold Blooded: " . $sheep->cold_blooded . "<br><br>";

    $kodok = new Frog("buduk");

    echo "Nama: " . $kodok->name . "<br>";
    echo "Legs: " . $kodok->legs . "<br>";
    echo "Cold Blooded: " . $kodok->cold_blooded . "<br>";
    echo $kodok->jump() . "<br><br>";

    $sungokong = new Ape("kera sakti");

    echo "Nama: " . $sungokong->name . "<br>";
    echo "Legs: " . $sungokong->legs . "<br>";
    echo "Cold Blooded: " . $sungokong->cold_blooded . "<br>";
    echo $sungokong->yell();

?>