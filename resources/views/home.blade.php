<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Home</title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans min-h-screen flex flex-col">

  <!-- Navbar -->
  <x-Navbar />

  <!-- Konten utama -->
  <main class="flex-grow">
    <div class="max-w-4xl mx-auto mt-10 px-4 text-center">
      <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Home Page</h1>
      <p class="text-lg text-gray-600">Ini adalah halaman utama dari website kamu.</p>
      <a href="/daftar" class="inline-block mt-4 text-blue-500 hover:underline">Daftar</a>
    </div>
  </main>

  <!-- Footer -->
  <x-Footer />

</body>

</html>
