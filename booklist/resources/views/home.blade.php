<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Booklist</title>
  @vite(['resources/css/app.css', 
    'resources/css/book-list.css', 
    'resources/js/app.js'])
</head>
<body class="p-8">
  <main>
    <h1 class="text-2xl font-bold mb-4">📚 Booklist</h1>

    <p>Home page</p>

    <livewire:book-list/>
  </main>
</body>
</html>
