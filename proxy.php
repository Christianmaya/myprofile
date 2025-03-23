<?php
// Establecer cabeceras para permitir solicitudes desde cualquier origen
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// URL de la API de ANU QRNG
$api_url = 'https://qrng.anu.edu.au/API/jsonI.php?length=1&type=uint8';

// Realizar la solicitud GET a la API
$response = file_get_contents($api_url);

// Comprobar si la respuesta es válida
if ($response !== false) {
    // Si la respuesta es válida, devolverla
    echo $response;
} else {
    // Si hubo un error, devolver un mensaje de error en formato JSON
    echo json_encode(["error" => "No se pudo obtener un número cuántico"]);
}

