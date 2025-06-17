<!-- resources/views/daftar.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans min-h-screen flex flex-col">

  <!-- Navbar -->
  <x-Navbar></x-Navbar>

  <!-- Konten -->
  <div class="max-w-2xl mx-auto mt-10 px-4 text-center flex-grow">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Formulir Pendaftaran</h1>
    <form action="#" method="POST" class="bg-white p-6 rounded shadow-md space-y-4">
      @csrf
      <input type="text" name="nama" placeholder="Nama Lengkap" class="w-full p-2 border rounded" />
      <input type="email" name="email" placeholder="Email" class="w-full p-2 border rounded" />
      <input type="password" name="password" placeholder="Password" class="w-full p-2 border rounded" />
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Daftar</button>
    </form>
  </div>
    <!-- footer -->
 <x-Footer />
</body>

</html>
