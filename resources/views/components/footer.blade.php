<footer class="bg-black text-gray-400">
  <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">

    {{-- Parte principal --}}
    <div class="grid gap-12 lg:grid-cols-4">

      {{-- Logo / descrição --}}
      <div class="lg:col-span-2">

        <a
          href="/"
          class="inline-flex items-center gap-2 text-2xl font-black tracking-tight text-white">
          <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-orange-500 text-black">
            H
          </span>

          Habit<span class="text-orange-500">Flow</span>
        </a>

        <p class="mt-5 max-w-md text-sm leading-7 text-gray-500">
          Construa hábitos melhores, acompanhe seu progresso
          e transforme pequenas ações em grandes resultados.
        </p>

        {{-- Social --}}
        <div class="mt-7 flex gap-3">

          <a
            href="#"
            aria-label="Instagram"
            class="group flex h-10 w-10 items-center justify-center rounded-lg
                               border border-gray-800 bg-gray-950
                               transition duration-300
                               hover:border-orange-500 hover:bg-orange-500">
            <svg
              class="h-5 w-5 text-gray-400 transition group-hover:text-black"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              viewBox="0 0 24 24">
              <rect x="3" y="3" width="18" height="18" rx="5" />
              <circle cx="12" cy="12" r="4" />
              <circle cx="17.5" cy="6.5" r="1" />
            </svg>
          </a>

          <a
            href="#"
            aria-label="GitHub"
            class="group flex h-10 w-10 items-center justify-center rounded-lg
                               border border-gray-800 bg-gray-950
                               transition duration-300
                               hover:border-orange-500 hover:bg-orange-500">
            <svg
              class="h-5 w-5 text-gray-400 transition group-hover:text-black"
              fill="currentColor"
              viewBox="0 0 24 24">
              <path d="M12 .5a12 12 0 0 0-3.79 23.39c.6.11.82-.26.82-.58v-2.04c-3.34.73-4.04-1.61-4.04-1.61-.55-1.39-1.34-1.76-1.34-1.76-1.09-.75.08-.73.08-.73 1.2.09 1.83 1.23 1.83 1.23 1.07 1.83 2.8 1.3 3.48.99.11-.77.42-1.3.76-1.6-2.67-.3-5.47-1.34-5.47-5.95 0-1.31.47-2.38 1.24-3.22-.12-.3-.54-1.52.12-3.17 0 0 1.01-.32 3.3 1.23a11.45 11.45 0 0 1 6 0c2.29-1.55 3.3-1.23 3.3-1.23.66 1.65.24 2.87.12 3.17.77.84 1.24 1.91 1.24 3.22 0 4.62-2.81 5.64-5.49 5.94.43.37.81 1.1.81 2.22v3.29c0 .32.22.69.83.57A12 12 0 0 0 12 .5Z" />
            </svg>
          </a>

        </div>
      </div>

      {{-- Produto --}}
      <div>
        <h3 class="text-sm font-semibold uppercase tracking-wider text-white">
          Produto
        </h3>

        <ul class="mt-5 space-y-3 text-sm">
          <li>
            <a href="#" class="transition hover:text-orange-500">
              Recursos
            </a>
          </li>

          <li>
            <a href="#" class="transition hover:text-orange-500">
              Como funciona
            </a>
          </li>

          <li>
            <a href="#" class="transition hover:text-orange-500">
              Preços
            </a>
          </li>

          <li>
            <a href="#" class="transition hover:text-orange-500">
              FAQ
            </a>
          </li>
        </ul>
      </div>

      {{-- Empresa --}}
      <div>
        <h3 class="text-sm font-semibold uppercase tracking-wider text-white">
          Empresa
        </h3>

        <ul class="mt-5 space-y-3 text-sm">
          <li>
            <a href="#" class="transition hover:text-orange-500">
              Sobre nós
            </a>
          </li>

          <li>
            <a href="#" class="transition hover:text-orange-500">
              Contato
            </a>
          </li>

          <li>
            <a href="#" class="transition hover:text-orange-500">
              Privacidade
            </a>
          </li>

          <li>
            <a href="#" class="transition hover:text-orange-500">
              Termos de uso
            </a>
          </li>
        </ul>
      </div>

    </div>

    {{-- CTA --}}
    <div
      class="relative mt-16 overflow-hidden rounded-2xl
                   border border-orange-500/20 bg-gray-950 p-8">
      {{-- brilho --}}
      <div
        class="pointer-events-none absolute -right-20 -top-20
                       h-40 w-40 rounded-full bg-orange-500/20 blur-3xl"></div>

      <div class="relative flex flex-col justify-between gap-6 md:flex-row md:items-center">

        <div>
          <p class="text-lg font-bold text-white">
            Pronto para criar uma rotina melhor?
          </p>

          <p class="mt-1 text-sm text-gray-500">
            Comece hoje e acompanhe sua evolução.
          </p>
        </div>

        <a
          href="#"
          class="inline-flex items-center justify-center gap-2 rounded-lg
                           bg-orange-500 px-5 py-3 text-sm font-bold text-black
                           transition duration-300
                           hover:bg-orange-400 hover:shadow-lg hover:shadow-orange-500/20">
          Começar agora

          <svg
            class="h-4 w-4"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            viewBox="0 0 24 24">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M5 12h14m-6-6 6 6-6 6" />
          </svg>
        </a>

      </div>
    </div>

    {{-- Copyright --}}
    <div class="mt-10 border-t border-gray-900 pt-8">

      <div class="flex flex-col justify-between gap-4 text-xs text-gray-600 sm:flex-row">

        <p>
          © {{ date('Y') }} {{ config('app.name') }}.
          Todos os direitos reservados.
        </p>

        <p>
          Feito com
          <span class="text-orange-500">♥</span>
          para construir hábitos melhores.
        </p>

      </div>

    </div>

  </div>
</footer>