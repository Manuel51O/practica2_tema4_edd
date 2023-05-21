<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_archivo = $_FILES["archivo"]["name"];
    $ruta_temporal = $_FILES["archivo"]["tmp_name"];
    $destino = "uploads/" . $nombre_archivo;
    
    if (move_uploaded_file($ruta_temporal, $destino)) {
        echo "Archivo subido con éxito.";
    } else {
        echo "Error al subir el archivo.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Subir Archivo</title>
</head>
<body>
    <form method="post" action="" enctype="multipart/form-data">
        <label for="archivo">Selecciona un archivo:</label>
        <input type="file" name="archivo" id="archivo">
        <input type="submit" value="Subir">
    </form>
</body>
</html>
