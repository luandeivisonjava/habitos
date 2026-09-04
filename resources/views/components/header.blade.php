<header class="border-b border-gray-900 bg-black">
  <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6 lg:px-8">

    {{-- Logo --}}
    <a
      href="/"
      class="group inline-flex items-center gap-3">
      <span
        class="flex h-10 w-10 items-center justify-center
                       rounded-lg bg-orange-500
                       text-lg font-black text-black
                       transition duration-300
                       group-hover:bg-orange-400
                       group-hover:shadow-lg
                       group-hover:shadow-orange-500/20">
        H
      </span>

      <span class="text-xl font-black tracking-tight text-white">
        Habit<span class="text-orange-500">Flow</span>
      </span>
    </a>


    {{-- Ações --}}
    <div class="flex items-center gap-3">

      {{-- GitHub --}}
      <a
        href="#"
        aria-label="GitHub"
        class="group flex h-10 w-10 items-center justify-center
                       rounded-lg border border-gray-800
                       bg-gray-950
                       transition duration-300
                       hover:border-orange-500
                       hover:bg-orange-500">
        <svg
          class="h-5 w-5 text-gray-400 transition duration-300
                           group-hover:text-black"
          fill="currentColor"
          viewBox="0 0 24 24"
          aria-hidden="true">
          <path
            d="M12 .5a12 12 0 0 0-3.79 23.39c.6.11.82-.26.82-.58v-2.04c-3.34.73-4.04-1.61-4.04-1.61-.55-1.39-1.34-1.76-1.34-1.76-1.09-.75.08-.73.08-.73 1.2.09 1.83 1.23 1.83 1.23 1.07 1.83 2.8 1.3 3.48.99.11-.77.42-1.3.76-1.6-2.67-.3-5.47-1.34-5.47-5.95 0-1.31.47-2.38 1.24-3.22-.12-.3-.54-1.52.12-3.17 0 0 1.01-.32 3.3 1.23a11.45 11.45 0 0 1 6 0c2.29-1.55 3.3-1.23 3.3-1.23.66 1.65.24 2.87.12 3.17.77.84 1.24 1.91 1.24 3.22 0 4.62-2.81 5.64-5.49 5.94.43.37.81 1.1.81 2.22v3.29c0 .32.22.69.83.57A12 12 0 0 0 12 .5Z" />
        </svg>
      </a>


      {{-- Login --}}
      <a
        href="/login"
        class="inline-flex items-center gap-2
                       rounded-lg bg-orange-500
                       px-5 py-2.5
                       text-sm font-bold text-black
                       transition duration-300
                       hover:bg-orange-400
                       hover:shadow-lg
                       hover:shadow-orange-500/20">
        <svg
          class="h-4 w-4"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          viewBox="0 0 24 24">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />

          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="m10 17 5-5-5-5" />

          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15 12H3" />
        </svg>

        Entrar
      </a>

    </div>

  </div>
</header>