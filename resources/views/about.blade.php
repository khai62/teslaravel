<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>About</title>

  <!-- Tambahkan link Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans min-h-screen flex flex-col">

  <!-- Navbar -->
<x-Navbar></x-Navbar>

  <!-- Konten -->
  <div class="max-w-4xl mx-auto mt-10 px-4 flex-grow">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">About</h1>
    <h2 class="text-lg text-gray-700 mb-6">Owner: {{ $nama }}</h2>
    <img src="img/image.jpeg" alt="About Image" class="rounded-lg shadow-md w-full max-w-md mx-auto">
  </div>
      <!-- footer -->
 <x-Footer />
</body>
</html>
