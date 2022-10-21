<?php
/*
 * Funcões para comportamentos
 * */


//hora e data na página inicial

function mostrarHora (){

    $date = date("d/m/Y H:i");

    if($date >= 4 && $date <=11){

        echo "Bom dia! {$date}";
    }elseif ($date >= 12 && $date <=18){

        echo "Boa tarde! {$date}";
    }else{

        echo "Boa noite! {$date}";
    }
}
