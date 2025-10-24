<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Ejercicio 3 — Identificación de Cuadrantes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col items-center min-h-screen py-10">

  <h1 class="text-2xl font-bold mb-8">Ejercicio 3: Identificación de Cuadrantes</h1>

  <section class="bg-white p-6 rounded-lg shadow-md w-96">
    <form action="procesar_cuadrante.php" method="POST" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700">Coordenada X</label>
        <input type="text" name="x" class="w-full border px-3 py-2 rounded-md">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Coordenada Y</label>
        <input type="text" name="y" class="w-full border px-3 py-2 rounded-md">
      </div>
      <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700">
        Identificar cuadrante
      </button>
    </form>
  </section>

</body>
</html>
