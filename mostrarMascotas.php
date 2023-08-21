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
    <?php if ($dato[3]=="perdido"):?>
   <div class="mascota-container">
      <?php $imagen = $dato[11];?>
   <img class="mascota-image" src="fotos/<?php echo $imagen; ?>">
   <table>
    <tr>
    <th><?php echo $dato[0]; ?></th>
   </tr>
    <tr>
    <th><?php echo $dato[1]; ?></th>
    </tr>
    <tr>
    <th><?php echo $dato[5]; ?></th>
   </tr>
     <tr>
    <th><?php echo $dato[9]; ?></th>
   </tr>
   </table>
        </div>
    <?php endif;?>
    <?php endforeach; ?>
</body>
</html>