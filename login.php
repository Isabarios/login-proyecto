<?php
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

// Datos de prueba
$usuario_valido = "admin";
$clave_valida = "12345";

if ($usuario === $usuario_valido && $clave === $clave_valida) {
    echo "Bienvenido, $usuario";
} else {
    echo "Credenciales incorrectas.";
}
?>