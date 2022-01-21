<?php

function saludar(){
    return 'Hola mundo';
}

function saludaMe($nombre){
    return 'Hola'.$nombre;
}

//Llamada de funcion
echo saludar();

echo saludaMe('Karen');

?>