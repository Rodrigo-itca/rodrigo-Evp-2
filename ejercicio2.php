<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Ejercicio 2 — Áreas y Volúmenes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col items-center min-h-screen py-10">

  <h1 class="text-2xl font-bold mb-8">Ejercicio 2: Cálculos Geométricos</h1>

  <!-- Formulario cilindro -->
  <section class="bg-white p-6 rounded-lg shadow-md w-96 mb-8">
    <h2 class="text-lg font-semibold mb-4">Cilindro</h2>
    <form action="procesar_cilindro.php" method="POST" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700">Radio (cm)</label>
        <input type="text" name="radio" class="w-full border px-3 py-2 rounded-md">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Altura (cm)</label>
        <input type="text" name="altura" class="w-full border px-3 py-2 rounded-md">
      </div>
      <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700">
        Calcular área y volumen
      </button>
    </form>
  </section>

  <!-- Formulario rectángulo -->
  <section class="bg-white p-6 rounded-lg shadow-md w-96">
    <h2 class="text-lg font-semibold mb-4">Rectángulo</h2>
    <form action="procesar_rectangulo.php" method="POST" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700">Base (cm)</label>
        <input type="text" name="base" class="w-full border px-3 py-2 rounded-md">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Altura (cm)</label>
        <input type="text" name="altura" class="w-full border px-3 py-2 rounded-md">
      </div>
      <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700">
        Calcular área y perímetro
      </button>
    </form>
  </section>

</body>
</html>
