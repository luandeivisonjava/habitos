<!DOCTYPE html>
<html lang="pt-BR" class="h-full">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Acompanhe seus hábitos e construa uma rotina melhor, um dia de cada vez.">
  <title>{{ config('app.name') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FFEDD6] text-[#1C1917]">
  <x-header />
  <main>
    {{ $slot }}
  </main>
  <x-footer />
</body>

</html>