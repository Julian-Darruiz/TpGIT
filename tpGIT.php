<?php
$nombre= $_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$dni=$_POST['dni'];


if(!$nombre || !$apellido || !$telefono || !$dni){
    echo "Todos los campos son obligatorios!";
} else{
    echo "Se ha registrado correctamente!";
}





