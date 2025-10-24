<?php
// Recuperar valores enviados
$x = $_POST['x'] ?? '';
$y = $_POST['y'] ?? '';

// Inicializar variables de mensaje
$error = '';
$resultado = '';

// ✅ Validaciones
if ($x === '' || $y === '') {
    $error = "Error: Ambos campos son obligatorios. Ingrese un valor para X y Y.";
} elseif (!is_numeric($x) || !is_numeric($y)) {
    $error = "Error: Las coordenadas deben ser valores numéricos válidos (pueden ser positivos, negativos o decimales).";
} elseif (abs($x) > 10000 || abs($y) > 10000) {
    // Validación adicional: evitar números absurdamente grandes
    $error = "Error: Los valores son demasiado grandes. Ingrese coordenadas dentro de un rango razonable.";
} else {
    // Convertir a número real
    $x = (float)$x;
    $y = (float)$y;

    // Determinar la posición del punto
    if ($x == 0 && $y == 0) {
        $resultado = "El punto está en el <strong>origen</strong> (0,0).";
    } elseif ($x == 0) {
        $resultado = "El punto está sobre el <strong>eje Y</strong>.";
    } elseif ($y == 0) {
        $resultado = "El punto está sobre el <strong>eje X</strong>.";
    } elseif ($x > 0 && $y > 0) {
        $resultado = "El punto está en el <strong>Primer cuadrante</strong> (X+, Y+).";
    } elseif ($x < 0 && $y > 0) {
        $resultado = "El punto está en el <strong>Segundo cuadrante</strong> (X−, Y+).";
    } elseif ($x < 0 && $y < 0) {
        $resultado = "El punto está en el <strong>Tercer cuadrante</strong> (X−, Y−).";
    } elseif ($x > 0 && $y < 0) {
        $resultado = "El punto está en el <strong>Cuarto cuadrante</strong> (X+, Y−).";
    }
}
?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Resultado — Cuadrante</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <?php if ($error): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-5 rounded-lg shadow-lg text-center w-96">
      <p class="font-semibold mb-3"><?= $error ?></p>
      <a href="ejercicio3.php" class="inline-block mt-2 px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Volver</a>
    </div>
  <?php else: ?>
    <div class="bg-white p-8 rounded-xl shadow-lg w-96 text-center">
      <h2 class="text-2xl font-bold text-indigo-700 mb-4">Resultado</h2>
      <p class="text-lg text-gray-700 mb-4"><?= $resultado ?></p>
      <a href="ejercicio3.php" class="inline-block mt-4 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Volver</a>
    </div>
  <?php endif; ?>

</body>
</html>
