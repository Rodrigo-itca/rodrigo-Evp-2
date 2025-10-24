<?php
$base = $_POST['base'] ?? '';
$altura = $_POST['altura'] ?? '';

if (!is_numeric($base) || !is_numeric($altura) || $base <= 0 || $altura <= 0) {
    echo "<p style='color:red; font-weight:bold;'>Error: ingrese valores numéricos válidos para base y altura.</p>";
    echo "<a href='ejercicio2.php'>Volver</a>";
    exit();
}

$area = $base * $altura;
$perimetro = 2 * ($base + $altura);

?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Resultados — Rectángulo</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-xl shadow-lg w-96 text-center">
    <h2 class="text-2xl font-bold text-indigo-700 mb-4">Resultados del Rectángulo</h2>
    <p class="text-lg text-gray-700 mb-2">Área: <span class="font-semibold"><?= round($area, 2) ?> cm²</span></p>
    <p class="text-lg text-gray-700 mb-4">Perímetro: <span class="font-semibold"><?= round($perimetro, 2) ?> cm</span></p>
    <a href="ejercicio2.php" class="inline-block mt-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Volver</a>
  </div>
</body>
</html>
