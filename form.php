<?php

    $dato1= $_POST["txtnombre"]; // usamos un arreglo para almacenar  

    if ($dato1=="eduardo"){
        echo "<h1>Hola</h1> " . $dato1;
        echo "<h1>
        <hr>
        <p>Acceso del usuario con exito</p>
        </h1>";

    ?>
        <pre>
        hola
        como 
        estas 
        tu
        </pre>
    <?php
        echo "<br>";
        echo '<a href="index.php">aquí</a>';

    }else {
        echo "usuario desconocido";
        echo "<br>";
        echo '<a href="index.php">aquí</a>';

    }


?>