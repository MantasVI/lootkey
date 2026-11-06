<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Lootkey — Acquire new games!</title>
  <link rel="icon" type="image/svg+xml" href="{{ asset('images/lootkey-icon.svg') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=favorite,menu,person,search,shopping_cart,stadia_controller" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-[#3d0fba] text-white">

  <!-- HEADER -->
  <header class="max-w-7xl w-full mx-auto px-6 py-4 flex items-center gap-8">
    <a href="/" class="shrink-0">
      <img src="{{ asset('images/lootkey-logo.svg') }}" alt="Lootkey" class="h-12">
    </a>

    <form action="#" class="flex-1 flex items-center gap-3 border border-white/60 px-4 py-2.5">
      <span class="material-symbols-outlined">search</span>
      <input type="search" name="q" placeholder="Search games, add-ons and more" class="flex-1 bg-transparent outline-none placeholder-white/60">
    </form>

    <div class="flex items-center gap-5">
      <a href="#" class="hover:text-[#00FA9A]"><span class="material-symbols-outlined">favorite</span></a>
      <a href="#" class="hover:text-[#00FA9A]"><span class="material-symbols-outlined">shopping_cart</span></a>
      <div class="flex items-center gap-2 text-sm">
        <a href="#" class="flex items-center gap-1 hover:text-[#00FA9A]"><span class="material-symbols-outlined">person</span>Log in</a>
        <span class="text-white/40">|</span>
        <a href="#" class="hover:text-[#00FA9A]">Sign up</a>
      </div>
    </div>
  </header>

  <!-- NAV -->
  <nav class="bg-[#350da1]">
    <ul class="max-w-7xl mx-auto px-6 h-12 flex items-center gap-6 text-sm overflow-x-auto whitespace-nowrap">
      <li><button class="flex items-center gap-2 hover:text-[#00FA9A]"><span class="material-symbols-outlined">menu</span>Categories</button></li>
      <li><a href="#" class="hover:text-[#00FA9A]">Cheap games</a></li>
      <li><a href="#" class="hover:text-[#00FA9A]">Software</a></li>
      <li><a href="#" class="hover:text-[#00FA9A]">E-cards</a></li>
      <li><a href="#" class="hover:text-[#00FA9A]">Lootkey top-ups</a></li>
    </ul>
  </nav>

  <main class="flex-1">

    <!-- PLATFORM CAROUSEL -->
    <section class="py-8">
      <ul class="max-w-7xl mx-auto px-6 flex justify-center gap-8 overflow-x-auto">
      <li><a href="#" class="flex flex-col items-center gap-2 w-24 text-sm font-semibold text-center hover:text-[#00FA9A]">
          <span class="material-symbols-outlined !text-4xl">stadia_controller</span>Games
      </a></li>

      <li><a href="#" class="flex flex-col items-center gap-2 w-24 text-sm font-semibold text-center hover:text-[#00FA9A]">
          <svg class="size-9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3l0 -8"/><path d="M7 16l3 -3l3 3"/><path d="M8 13c-.789 0 -2 -.672 -2 -1.5s.711 -1.5 1.5 -1.5c1.128 -.02 2.077 1.17 2.5 3c.423 -1.83 1.372 -3.02 2.5 -3c.789 0 1.5 .672 1.5 1.5s-1.211 1.5 -2 1.5h-4"/></svg>
          Gift cards
      </a></li>

      <li><a href="#" class="flex flex-col items-center gap-2 w-24 text-sm font-semibold text-center hover:text-[#00FA9A]">
          <svg class="size-9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 11v.01"/><path d="M5.173 8.378a3 3 0 1 1 4.656 -1.377"/><path d="M16 4v3.803a6.019 6.019 0 0 1 2.658 3.197h1.341a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-1.342c-.336 .95 -.907 1.8 -1.658 2.473v2.027a1.5 1.5 0 0 1 -3 0v-.583a6.04 6.04 0 0 1 -1 .083h-4a6.04 6.04 0 0 1 -1 -.083v.583a1.5 1.5 0 0 1 -3 0v-2l0 -.027a6 6 0 0 1 4 -10.473h2.5l4.5 -3"/></svg>
          E-money
      </a></li>

      <li><a href="#" class="flex flex-col items-center gap-2 w-24 text-sm font-semibold text-center hover:text-[#00FA9A]">
          <svg class="size-9" viewBox="0 0 24 24" fill="currentColor"><path d="M11.979 0C5.678 0 .511 4.86.022 11.037l6.432 2.658c.545-.371 1.203-.59 1.912-.59.063 0 .125.004.188.006l2.861-4.142V8.91c0-2.495 2.028-4.524 4.524-4.524 2.494 0 4.524 2.031 4.524 4.527s-2.03 4.525-4.524 4.525h-.105l-4.076 2.911c0 .052.004.105.004.159 0 1.875-1.515 3.396-3.39 3.396-1.635 0-3.016-1.173-3.331-2.727L.436 15.27C1.862 20.307 6.486 24 11.979 24c6.627 0 11.999-5.373 11.999-12S18.605 0 11.979 0zM7.54 18.21l-1.473-.61c.262.543.714.999 1.314 1.25 1.297.539 2.793-.076 3.332-1.375.263-.63.264-1.319.005-1.949s-.75-1.121-1.377-1.383c-.624-.26-1.29-.249-1.878-.03l1.523.63c.956.4 1.409 1.5 1.009 2.455-.397.957-1.497 1.41-2.454 1.012H7.54zm11.415-9.303c0-1.662-1.353-3.015-3.015-3.015-1.665 0-3.015 1.353-3.015 3.015 0 1.665 1.35 3.015 3.015 3.015 1.663 0 3.015-1.35 3.015-3.015zm-5.273-.005c0-1.252 1.013-2.266 2.265-2.266 1.249 0 2.266 1.014 2.266 2.266 0 1.251-1.017 2.265-2.266 2.265-1.253 0-2.265-1.014-2.265-2.265z"/></svg>
          Steam
      </a></li>

      <li><a href="#" class="flex flex-col items-center gap-2 w-24 text-sm font-semibold text-center hover:text-[#00FA9A]">
          <svg class="size-9" viewBox="0 0 24 24" fill="currentColor"><path d="M8.984 2.596v17.547l3.915 1.261V6.688c0-.69.304-1.151.794-.991.636.18.76.814.76 1.505v5.875c2.441 1.193 4.362-.002 4.362-3.152 0-3.237-1.126-4.675-4.438-5.827-1.307-.448-3.728-1.186-5.39-1.502zm4.656 16.241l6.296-2.275c.715-.258.826-.625.246-.818-.586-.192-1.637-.139-2.357.123l-4.205 1.5V14.98l.24-.085s1.201-.42 2.913-.615c1.696-.18 3.785.03 5.437.661 1.848.601 2.04 1.472 1.576 2.072-.465.6-1.622 1.036-1.622 1.036l-8.544 3.107V18.86zM1.807 18.6c-1.9-.545-2.214-1.668-1.352-2.32.801-.586 2.16-1.052 2.16-1.052l5.615-2.013v2.313L4.205 17c-.705.271-.825.632-.239.826.586.195 1.637.15 2.343-.12L8.247 17v2.074c-.12.03-.256.044-.39.073-1.939.331-3.996.196-6.038-.479z"/></svg>
          PSN
      </a></li>

      <li><a href="#" class="flex flex-col items-center gap-2 w-24 text-sm font-semibold text-center hover:text-[#00FA9A]">
          <svg class="size-9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"/><path d="M6.5 5c7.72 2.266 10.037 7.597 12.5 12.5"/><path d="M17.5 5c-7.72 2.266 -10.037 7.597 -12.5 12.5"/></svg>
          Xbox
      </a></li>

      <li><a href="#" class="flex flex-col items-center gap-2 w-24 text-sm font-semibold text-center hover:text-[#00FA9A]">
          <svg class="size-9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 20v-16h-3a4 4 0 0 0 -4 4v8a4 4 0 0 0 4 4h3"/><path d="M14 20v-16h3a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-3"/><path d="M16.5 15.5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" fill="currentColor"/><path d="M5.5 8.5a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" fill="currentColor"/></svg>
          Nintendo
      </a></li>

      <li><a href="#" class="flex flex-col items-center gap-2 w-24 text-sm font-semibold text-center hover:text-[#00FA9A]">
          <svg class="size-9" viewBox="0 0 24 24" fill="currentColor"><path d="m15.767 14.171.097-5.05H12.4V5.197h3.99L16.872 0H7.128v24l5.271-.985V14.17z"/></svg>
          Fortnite
      </a></li>

      <li><a href="#" class="flex flex-col items-center gap-2 w-24 text-sm font-semibold text-center hover:text-[#00FA9A]">
          <svg class="size-9" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/></svg>
          Spotify
      </a></li>
      </ul>
    </section>

    <!-- RECENTLY VIEWED (tracks last 5 viewed) -->
    <section class="mt-12">
      <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-6">Recently viewed</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        </div>
      </div>
    </section>

    <!-- RECOMMENDED -->
    <section class="mt-12 bg-[#350da1] py-12">
      <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-6">Recommended</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        </div>
      </div>
    </section>

    <!-- MOST POPULAR GAMES -->
    <section class="mt-12">
      <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-6">Most popular games</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        </div>
      </div>
    </section>

    <!-- MOST POPULAR GIFT CARDS -->
    <section class="mt-12">
      <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-6">Most popular gift cards</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        <a href="#" class="group relative block h-96 rounded-lg overflow-hidden border-2 border-[#5a2be0] hover:border-[#00FA9A] transition">
          <img src="/images/game.jpg" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
          <div class="absolute bottom-0 left-0 right-0 bg-black/75 p-3 flex flex-col gap-1">
            <p class="font-semibold truncate">Name</p>
            <p class="text-xs text-white/60">Global</p>
            <p class="text-xl font-bold">€19.99</p>
            <p class="text-xs text-[#00FA9A]">€1.20 cashback</p>
          </div>
        </a>

        </div>
      </div>
    </section>

    <!-- CATEGORIES -->
    <section class="max-w-7xl mx-auto px-6 mt-12">
      <h2 class="text-3xl font-bold mb-6">Categories</h2>
      <ul class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-7 gap-6">
        <li>
          <a href="#" class="flex flex-col items-center gap-3 bg-[#5a2be0] py-4 shadow-lg hover:bg-[#350da1] transition">
            <span class="text-sm font-bold">20467</span>
            <i class="ti ti-run text-4xl"></i>
            <span class="text-sm font-semibold">Action</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex flex-col items-center gap-3 bg-[#5a2be0] py-4 shadow-lg hover:bg-[#350da1] transition">
            <span class="text-sm font-bold">19676</span>
            <i class="ti ti-map-2 text-4xl"></i>
            <span class="text-sm font-semibold">Adventure</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex flex-col items-center gap-3 bg-[#5a2be0] py-4 shadow-lg hover:bg-[#350da1] transition">
            <span class="text-sm font-bold">15591</span>
            <i class="ti ti-steering-wheel text-4xl"></i>
            <span class="text-sm font-semibold">Simulation</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex flex-col items-center gap-3 bg-[#5a2be0] py-4 shadow-lg hover:bg-[#350da1] transition">
            <span class="text-sm font-bold">14814</span>
            <i class="ti ti-chess-knight text-4xl"></i>
            <span class="text-sm font-semibold">Strategy</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex flex-col items-center gap-3 bg-[#5a2be0] py-4 shadow-lg hover:bg-[#350da1] transition">
            <span class="text-sm font-bold">5569</span>
            <i class="ti ti-sword text-4xl"></i>
            <span class="text-sm font-semibold">RPG</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex flex-col items-center gap-3 bg-[#5a2be0] py-4 shadow-lg hover:bg-[#350da1] transition">
            <span class="text-sm font-bold">5350</span>
            <i class="ti ti-alien text-4xl"></i>
            <span class="text-sm font-semibold">Indie</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex flex-col items-center gap-3 bg-[#5a2be0] py-4 shadow-lg hover:bg-[#350da1] transition">
            <span class="text-sm font-bold">2781</span>
            <i class="ti ti-target text-4xl"></i>
            <span class="text-sm font-semibold">FPS / TPS</span>
          </a>
        </li>
      </ul>
      <div class="flex justify-center mt-8">
        <button class="border border-white px-12 py-2 font-semibold hover:bg-white hover:text-[#3d0fba]">Load more</button>
      </div>
    </section>

  </main>

  <!-- FOOTER -->
  <footer class="bg-[#12062e] mt-16">
    <div class="max-w-7xl mx-auto px-6 py-10 flex flex-wrap justify-between items-end gap-6">
      <div class="flex flex-col gap-3">
        <p class="font-semibold">Get personalized game deals</p>
        <form action="#" class="flex">
          <input type="email" name="email" placeholder="Enter your email address" class="w-72 border border-white bg-transparent px-4 py-2 placeholder-white/60 outline-none">
          <button class="border border-l-0 border-white px-4 py-2 font-semibold hover:bg-white hover:text-[#12062e]">Subscribe</button>
        </form>
      </div>
      <button class="flex items-center gap-2 border border-white px-4 py-2 font-semibold">
        🇬🇧 English <span class="text-white/40">|</span> EUR
      </button>
    </div>
  </footer>

</body>
</html>