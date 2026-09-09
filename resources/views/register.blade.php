<x-layout>
  <main class="py-12 px-8">
    <section class="min-h-[calc(100vh-5rem)] px-6 py-16">
      <div class="mx-auto max-w-md"> {{-- Cabeçalho --}}
        <div class="mb-8 text-center">
          <div class="rounded-xl border border-orange-500/20 bg-orange-500/10 px-6 py-5 text-center text-sm font-semibold text-orange-400"> Crie sua conta e comece a transformar seus hábitos! </div>
          <h1 class="mt-5 text-3xl font-black tracking-tight text-gray-400"> Criar sua conta </h1>
          <p class="mt-2 text-sm text-gray-500"> Comece sua jornada para uma rotina melhor. </p>
        </div> {{-- Formulário --}}
        <form action="{{ route('auth.register') }}" method="POST" class="rounded-2xl border border-gray-800 bg-gray-950 p-8 shadow-2xl shadow-black/40"> @csrf {{-- Nome --}}
          <div class="mb-6"> <label for="name" class="mb-2 block text-sm font-semibold text-gray-300"> Nome </label>
            <div class="relative">
              <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4"> <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M20 21a8 8 0 0 0-16 0" />
                  <circle cx="12" cy="7" r="4" />
                </svg> </div> <input type="text" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Seu nome" class="w-full rounded-lg border border-gray-800 bg-black py-3 pl-11 pr-4 text-sm text-white placeholder-gray-600 outline-none transition duration-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20">
            </div> @error('name') <p class="mt-2 text-sm text-red-500"> {{ $message }} </p> @enderror
          </div> {{-- Email --}}
          <div class="mb-6"> <label for="email" class="mb-2 block text-sm font-semibold text-gray-300"> Email </label>
            <div class="relative">
              <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4"> <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5A2.5 2.5 0 0 1 5.5 5h13A2.5 2.5 0 0 1 21 7.5v9a2.5 2.5 0 0 1-2.5 2.5h-13A2.5 2.5 0 0 1 3 16.5v-9Z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8 5 8-5" />
                </svg> </div> <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" placeholder="seu@email.com" class="w-full rounded-lg border border-gray-800 bg-black py-3 pl-11 pr-4 text-sm text-white placeholder-gray-600 outline-none transition duration-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20">
            </div> @error('email') <p class="mt-2 text-sm text-red-500"> {{ $message }} </p> @enderror
          </div> {{-- Senha --}}
          <div class="mb-6"> <label for="password" class="mb-2 block text-sm font-semibold text-gray-300"> Senha </label>
            <div class="relative">
              <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4"> <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                  <rect x="4" y="10" width="16" height="11" rx="2" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8 10V7a4 4 0 0 1 8 0v3" />
                </svg> </div> <input type="password" name="password" id="password" required autocomplete="new-password" placeholder="••••••••" class="w-full rounded-lg border border-gray-800 bg-black py-3 pl-11 pr-4 text-sm text-white placeholder-gray-600 outline-none transition duration-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20">
            </div> @error('password') <p class="mt-2 text-sm text-red-500"> {{ $message }} </p> @enderror
          </div> {{-- Confirmar senha --}}
          <div class="mb-7"> <label for="password_confirmation" class="mb-2 block text-sm font-semibold text-gray-300"> Confirmar senha </label>
            <div class="relative">
              <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4"> <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                  <rect x="4" y="10" width="16" height="11" rx="2" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8 10V7a4 4 0 0 1 8 0v3" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="m9 16 2 2 4-4" />
                </svg> </div> <input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="new-password" placeholder="••••••••" class="w-full rounded-lg border border-gray-800 bg-black py-3 pl-11 pr-4 text-sm text-white placeholder-gray-600 outline-none transition duration-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20">
            </div>
          </div> {{-- Botão --}} <button type="submit" class="group flex w-full items-center justify-center gap-2 rounded-lg bg-orange-500 px-4 py-3 text-sm font-bold text-black transition duration-300 hover:bg-orange-400 hover:shadow-lg hover:shadow-orange-500/20 active:scale-[0.98]"> Criar conta <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6" />
            </svg> </button> {{-- Login --}}
          <div class="mt-7 border-t border-gray-800 pt-6 text-center">
            <p class="text-sm text-gray-500"> Já possui uma conta? <a href="/login" class="ml-1 font-semibold text-orange-500 transition hover:text-orange-400"> Entrar </a> </p>
          </div>
        </form> {{-- Segurança --}}
        <p class="mt-6 text-center text-xs text-gray-600"> Seus dados estão protegidos e seguros. </p>
      </div>
    </section>
  </main>
</x-layout>