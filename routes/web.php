<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-path', function () {

    //VARIABLES
    $name = "Julian Godoy";
    $age = 19;
    $isLogin = true;
    $height = 1.86;

    echo "<h1> Hola como estan <p>Mi nombre es $name</p></h1>";

    echo "<p> Tengo 19 años </p>";

    //ARREGLOS

    $names =[
        "Santiago",
        "Gabriela",
        "Jaime",
        "Santiago"
    ];

    $jesus = [
        "name" => "Jesus",
        "age" => 20,
        "height" => 1.79,
        "gener" => "male",
        "Hobbies" => [
            "MMA",
            "Soccer",
            "Motos"
        ]
    ];

    foreach($names as $item){
        echo "$item <br>";
    }

    echo validateAge(19);

    return "================";
});

function validateAge($age){
    if ($age >= 18){
        return "Soy mayor de edad <br>";
    }else{
        return "Soy menor de edad <br>";
    }    
}
