<?php
include 'conexion.php';

$nombre_persona = $_POST['nombre_persona'];
$nombre_planta = $_POST['nombre_planta'];
$tipo_planta = $_POST['tipo_planta'];
$polinizador_atrae = $_POST['polinizador_atrae'];
$ubicacion = $_POST['ubicacion'];
$fecha_siembra = $_POST['fecha_siembra'];
$frecuencia_riego = $_POST['frecuencia_riego'];
$observaciones = $_POST['observaciones'];

$sql = "INSERT INTO plantas (
    nombre_persona,
    nombre_planta,
    tipo_planta,
    polinizador_atrae,
    ubicacion,
    fecha_siembra,
    frecuencia_riego,
    observaciones
) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "ssssssss",
    $nombre_persona,
    $nombre_planta,
    $tipo_planta,
    $polinizador_atrae,
    $ubicacion,
    $fecha_siembra,
    $frecuencia_riego,
    $observaciones
);

if($stmt->execute()){
    echo "Registro guardado correctamente";
}else{
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
