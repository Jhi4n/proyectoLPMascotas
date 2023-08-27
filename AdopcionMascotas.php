<!DOCTYPE html>
<html>
<head>
    <title>United Pets</title>    
</head>
<body>
    <?php
    $archivo = fopen('datos_mascotas.csv', 'r');

    $datos = [];
    while (($linea = fgetcsv($archivo)) !== false) {
        $datos[] = $linea;
    }
    fclose($archivo);
    ?>

    <?php foreach ($datos as $dato): ?>
    <?php if ($dato[3]=="adopcion"):?>
   <div class="mascota-container" align="center">
      <?php $imagen = $dato[11];?>
   <img class="mascota-image" src="fotos/<?php echo $imagen; ?>">
    <p><?php echo $dato[0]; ?></p>
    <p><?php echo $dato[1]; ?></p>
    <p><?php echo $dato[2]; ?></p>
    <p><?php echo $dato[3]; ?></p>
    <p><?php echo $dato[4]; ?></p>
    <p><?php echo $dato[5]; ?></p>
        </div>
    <?php endif;?>
    <?php endforeach; ?>
</body>
</html>