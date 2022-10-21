<?php

//recebendo dados do login
$email = $_POST["email"];
$password = $_POST["password"];

//criando lista de informações para alimentar o tabela de forma estática

var_dump([
    $email,
    $password
]);

$course = [
    "Informática Básica",
    "Cabeleireiro",
    "Barbeiro",
    "Maquiagem",
    "Artesanato"
];

$teachers = [
    "Renato Bezerra",
    "Zé Bob",
    "Xandy Canedo",
    "Agatha Alves",
    "Ivete Santana"
];

$hours = [
    60,
    120,
    30,
    40,
    20
];
