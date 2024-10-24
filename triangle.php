<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 
include "clases/triangleGenerator.php";
 
$triangulo = new TriangleGenerator();
echo $triangulo->generate_triangle(6);
 
?>
 
</body>
</html>