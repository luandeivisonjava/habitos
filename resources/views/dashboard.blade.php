<x-layout>
  <main class="py-12 px-8">

    <div class="mx-auto max-w-3xl px-4 py-10">

      {{-- Título --}}
      <div class="mb-8">
        <p class="text-sm font-semibold uppercase tracking-widest text-orange-500">
          Minha rotina
        </p>

        <h1 class="mt-2 text-3xl font-bold text-white">
          Meus hábitos
        </h1>

        <p class="mt-2 text-gray-400">
          Acompanhe seus hábitos diariamente.
        </p>
      </div>


      {{-- Lista de hábitos --}}
      <ul class="space-y-4">

        @forelse ($habits as $habit)

        <li
          class="group relative overflow-hidden rounded-2xl
                       border border-white/10 bg-zinc-950
                       p-5 shadow-lg shadow-black/20
                       transition-all duration-300
                       hover:-translate-y-1
                       hover:border-orange-500/50
                       hover:shadow-xl hover:shadow-orange-500/10">

          {{-- Barra laranja no hover --}}
          <div
            class="absolute left-0 top-0 h-full w-1
                           bg-orange-500
                           transition-all duration-300
                           group-hover:w-2"></div>


          <div class="flex items-center justify-between gap-4">

            {{-- Nome do hábito --}}
            <div class="flex items-center gap-4">

              {{-- Ícone --}}
              <div
                class="flex h-11 w-11 shrink-0 items-center justify-center
                                   rounded-xl bg-orange-500/10
                                   text-lg font-bold text-orange-500
                                   transition-all duration-300
                                   group-hover:scale-110
                                   group-hover:bg-orange-500
                                   group-hover:text-black">
                ✓
              </div>

              <div>
                <h2
                  class="font-semibold text-white
                                       transition-colors duration-300
                                       group-hover:text-orange-500">
                  {{ $habit->name }}
                </h2>

                <p class="mt-1 text-xs text-gray-500">
                  Hábito cadastrado
                </p>
                <span class="text-xs text-gray-500">
                  {{ $habit->created_at->format('d/m/Y') }}
                </span>
              </div>

            </div>


            {{-- Status --}}
            <span
              class="hidden rounded-full border border-green-500/20
                               bg-green-500/10 px-3 py-1
                               text-xs font-medium text-green-400
                               sm:block">
              Ativo
            </span>

          </div>

        </li>

        @empty
        <p class="text-black">Nenhum hábito cadastrado.</p>

        @endforelse

      </ul>

    </div>


  </main>
</x-layout>