<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreArchivoCSV = "datos_mascotas.csv"; // Nombre del archivo CSV
    $carpetaFotos = "fotos/"; 
    // Obtener datos del formulario
    $nombre = $_POST["nombre"];
    $raza = $_POST["raza"];
    $genero = $_POST["genero"];
    $tipo_publicacion = $_POST["tipo_publicacion"];
    $especie = $_POST["especie"];
    $color = $_POST["color"];
    $descripcion = $_POST["descripcion"];
    $nombreDueno = $_POST["nombre_dueno"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $nombreFoto = $_FILES["foto"]["name"];
    $rutaFoto = $carpetaFotos . $nombreFoto;
    move_uploaded_file($_FILES["foto"]["tmp_name"], $rutaFoto);


    // Crear una fila de datos para el CSV
    $datosCSV = array(
        $nombre, $raza, $genero, $tipo_publicacion, $especie, $color, $descripcion,
        $nombreDueno, $telefono, $correo, $mensaje,$nombreFoto
    );

    // Abrir o crear el archivo CSV
    $archivoCSV = fopen($nombreArchivoCSV, "a"); // Usar "a" para agregar datos al archivo

    // Escribir los datos en el archivo CSV
    fputcsv($archivoCSV, $datosCSV);

    // Cerrar el archivo CSV
    fclose($archivoCSV);
  
    // Redirigir a adoption.php
    header("Location: adoption.php");
    exit(); // Asegurarse de que el script se detenga después de la redirección
}
?>