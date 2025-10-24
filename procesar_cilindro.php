<?php
$radio = $_POST['radio'] ?? '';
$altura = $_POST['altura'] ?? '';

if (!is_numeric($radio) || !is_numeric($altura) || $radio <= 0 || $altura <= 0) {
    echo "<p style='color:red; font-weight:bold;'>Error: ingrese valores numéricos válidos para radio y altura.</p>";
    echo "<a href='ejercicio2.php'>Volver</a>";
    exit();
}

$area = 2 * M_PI * $radio * ($radio + $altura);
$volumen = M_PI * pow($radio, 2) * $altura;

echo "<h2>Resultados del cilindro</h2>";
echo "<p>Área: " . round($area, 2) . " cm²</p>";
echo "<p>Volumen: " . round($volumen, 2) . " cm³</p>";
echo "<br><a href='ejercicio2.php'>Volver</a>";
?>
