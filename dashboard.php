<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100">
<!-- Topbar -->
<header class="bg-white border-b">
<div class="max-w-5xl mx-auto px-4 py-4 flex items-center justify-between">
<h1 class="text-xl font-semibold">Dashboard</h1>
<a href="logout.php" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-red-600 text-white font-medium hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"><path d="M16 13v-2H7V8l-5 4 5 4v-3h9z"/><path d="M20 3h-8a2 2 0 00-2 2v4h2V5h8v14h-8v-4h-2v4a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2z"/></svg>
Cierre de sesión
</a>
</div>
</header>


<!-- Content -->
<main class="max-w-5xl mx-auto px-4 py-8">
<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
<!-- Ejercicio 2 -->
<a href="ejercicio2.php" class="group block rounded-2xl bg-white shadow-sm border hover:shadow-md transition-shadow">
<div class="p-6">
<div class="flex items-center justify-between">
<h2 class="text-lg font-semibold">Ejercicio 2</h2>
<span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-gray-100">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 opacity-70 group-hover:opacity-100">
<path d="M3 6h18v2H3zM3 11h18v2H3zM3 16h18v2H3z"/>
</svg>
</span>
</div>
<p class="mt-2 text-sm text-gray-600">Ir al contenido del ejercicio 2.</p>
</div>
</a>


<!-- Ejercicio 3 -->
<a href="ejercicio3.php" class="group block rounded-2xl bg-white shadow-sm border hover:shadow-md transition-shadow">
<div class="p-6">
<div class="flex items-center justify-between">
<h2 class="text-lg font-semibold">Ejercicio 3</h2>
<span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-gray-100">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 opacity-70 group-hover:opacity-100">
<path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 5v5h5v2h-7V7h2z"/>
</svg>
</span>
</div>
<p class="mt-2 text-sm text-gray-600">Ir al contenido del ejercicio 3.</p>
</div>
</a>
</div>

<!-- Optional footer/help -->
<div class="mt-8 text-center text-sm text-gray-500">© 2025 — Tu App</div>
</main>
</body>
</html>