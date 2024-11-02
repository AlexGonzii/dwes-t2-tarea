<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Establecer la fuente predeterminada como monospace */
        body {
            font-family: monospace;
        }
    </style>
</head>
<body>
<?php 
    require_once("clases/TriangleGenerator.php");
    $triangulo = generateTriangle(7);
    echo($triangulo);
?>
</body>
</html>