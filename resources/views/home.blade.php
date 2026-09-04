<x-layout>
  <main class="py-12 px-8">
    <h1 class="text-3xl font-bold underline">Veja os seus hábitos ganharem vidas!</h1>
    @auth
    <p class="mt-4 text-gray-400">
      Bem-vindo de volta, {{ auth()->user()->name }}! Continue a sua jornada para uma rotina melhor.
    </p>
    @else
    <p class="mt-4 text-gray-400">
      Faça login para acessar o seu painel de hábitos e continue a sua jornada para uma rotina melhor.
    </p>
    @endauth
  </main>
</x-layout>