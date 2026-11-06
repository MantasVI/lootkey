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

  <main class="max-w-7xl w-full mx-auto px-6 pb-16">

    <h1 class="text-3xl font-bold my-8">Games, Gift Cards, Top-Ups &amp; More | Best Deals</h1>

    <!-- STORE: sidebar (240px) + products (rest) -->
    <div class="grid grid-cols-[240px_minmax(0,1fr)] gap-6 items-start">

      <!-- SIDEBAR -->
      <aside class="bg-[#5a2be0]">

        <!-- PRICE RANGE -->
        <details open class="group border-b border-white/10 p-4">
          <summary class="flex justify-between items-center font-bold text-sm cursor-pointer list-none">
            Price range (EUR) <i class="ti ti-chevron-up group-open:rotate-0 rotate-180 transition"></i>
          </summary>
          <div class="mt-3 flex items-center gap-2">
            <input type="number" placeholder="Min" class="w-full border border-white/30 bg-[#2a0a85] px-2 py-1.5 text-sm outline-none">
            <span>-</span>
            <input type="number" placeholder="Max" class="w-full border border-white/30 bg-[#2a0a85] px-2 py-1.5 text-sm outline-none">
          </div>
        </details>

        <!-- COUNTRY -->
        <details open class="group border-b border-white/10 p-4">
          <summary class="flex justify-between items-center font-bold text-sm cursor-pointer list-none">
            Country <i class="ti ti-chevron-up group-open:rotate-0 rotate-180 transition"></i>
          </summary>
          <select class="mt-3 w-full border border-white/30 bg-[#2a0a85] px-2 py-1.5 text-sm outline-none">
            <option>All countries</option>
            <option>Lithuania</option>
            <option>Europe</option>
            <option>North America</option>
            <option>South America</option>
          </select>
        </details>

        <!-- PRODUCT TYPE -->
        <details open class="group border-b border-white/10 p-4">
          <summary class="flex justify-between items-center font-bold text-sm cursor-pointer list-none">
            Product type <i class="ti ti-chevron-up group-open:rotate-0 rotate-180 transition"></i>
          </summary>
          <div class="mt-3">
          <div class="flex items-center gap-2 border border-white/30 bg-[#2a0a85] px-2 py-1.5 mb-3">
            <input type="text" class="w-full bg-transparent text-sm outline-none">
            <i class="ti ti-search text-white/60"></i>
          </div>
          <div class="flex flex-col gap-2">
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Game</span>
              <span class="text-xs text-white/50">103728</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">DLC</span>
              <span class="text-xs text-white/50">30597</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">eGift Cards</span>
              <span class="text-xs text-white/50">21532</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Gaming eCards</span>
              <span class="text-xs text-white/50">5323</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">E-money Prepaid</span>
              <span class="text-xs text-white/50">3388</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Game points</span>
              <span class="text-xs text-white/50">3352</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Software</span>
              <span class="text-xs text-white/50">2649</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Subscription</span>
              <span class="text-xs text-white/50">2075</span>
            </label>
          </div>
          <button class="mt-3 text-xs font-bold text-[#00FA9A] flex items-center gap-1">3 more <i class="ti ti-chevron-down"></i></button>
          </div>
        </details>

        <!-- OPERATING SYSTEM -->
        <details open class="group border-b border-white/10 p-4">
          <summary class="flex justify-between items-center font-bold text-sm cursor-pointer list-none">
            Operating system <i class="ti ti-chevron-up group-open:rotate-0 rotate-180 transition"></i>
          </summary>
          <div class="mt-3">
          <div class="flex flex-col gap-2">
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Windows</span>
              <span class="text-xs text-white/50">41691</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Mac</span>
              <span class="text-xs text-white/50">10629</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Linux</span>
              <span class="text-xs text-white/50">6987</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Android</span>
              <span class="text-xs text-white/50">237</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">iOS</span>
              <span class="text-xs text-white/50">234</span>
            </label>
          </div>
          </div>
        </details>

        <!-- PLATFORMS -->
        <details open class="group border-b border-white/10 p-4">
          <summary class="flex justify-between items-center font-bold text-sm cursor-pointer list-none">
            Platforms <i class="ti ti-chevron-up group-open:rotate-0 rotate-180 transition"></i>
          </summary>
          <div class="mt-3">
          <div class="flex items-center gap-2 border border-white/30 bg-[#2a0a85] px-2 py-1.5 mb-3">
            <input type="text" class="w-full bg-transparent text-sm outline-none">
            <i class="ti ti-search text-white/60"></i>
          </div>
          <div class="flex flex-col gap-2">
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Steam</span>
              <span class="text-xs text-white/50">64949</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Xbox Live</span>
              <span class="text-xs text-white/50">45690</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Epic Games</span>
              <span class="text-xs text-white/50">8822</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">PSN</span>
              <span class="text-xs text-white/50">3529</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Nintendo</span>
              <span class="text-xs text-white/50">3009</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Riot Games</span>
              <span class="text-xs text-white/50">2923</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Steam Gift Card</span>
              <span class="text-xs text-white/50">2086</span>
            </label>
          </div>
          <button class="mt-3 text-xs font-bold text-[#00FA9A] flex items-center gap-1">292 more <i class="ti ti-chevron-down"></i></button>
          </div>
        </details>

        <!-- GENRES -->
        <details open class="group border-b border-white/10 p-4">
          <summary class="flex justify-between items-center font-bold text-sm cursor-pointer list-none">
            Genres <i class="ti ti-chevron-up group-open:rotate-0 rotate-180 transition"></i>
          </summary>
          <div class="mt-3">
          <div class="flex items-center gap-2 border border-white/30 bg-[#2a0a85] px-2 py-1.5 mb-3">
            <input type="text" class="w-full bg-transparent text-sm outline-none">
            <i class="ti ti-search text-white/60"></i>
          </div>
          <div class="flex flex-col gap-2">
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Single Player</span>
              <span class="text-xs text-white/50">60962</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Action</span>
              <span class="text-xs text-white/50">59223</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Adventure</span>
              <span class="text-xs text-white/50">51523</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Simulation</span>
              <span class="text-xs text-white/50">29331</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Strategy</span>
              <span class="text-xs text-white/50">25979</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Indie</span>
              <span class="text-xs text-white/50">25941</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Multiplayer</span>
              <span class="text-xs text-white/50">21409</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">RPG</span>
              <span class="text-xs text-white/50">19171</span>
            </label>
          </div>
          <button class="mt-3 text-xs font-bold text-[#00FA9A] flex items-center gap-1">24 more <i class="ti ti-chevron-down"></i></button>
          </div>
        </details>

        <!-- REGIONS -->
        <details open class="group border-b border-white/10 p-4">
          <summary class="flex justify-between items-center font-bold text-sm cursor-pointer list-none">
            Regions <i class="ti ti-chevron-up group-open:rotate-0 rotate-180 transition"></i>
          </summary>
          <div class="mt-3">
          <div class="flex items-center gap-2 border border-white/30 bg-[#2a0a85] px-2 py-1.5 mb-3">
            <input type="text" class="w-full bg-transparent text-sm outline-none">
            <i class="ti ti-search text-white/60"></i>
          </div>
          <div class="flex flex-col gap-2">
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Global</span>
              <span class="text-xs text-white/50">72181</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Europe</span>
              <span class="text-xs text-white/50">27464</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">United States</span>
              <span class="text-xs text-white/50">17127</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Argentina</span>
              <span class="text-xs text-white/50">8287</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Latin America</span>
              <span class="text-xs text-white/50">4322</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Turkey</span>
              <span class="text-xs text-white/50">4186</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">United Kingdom</span>
              <span class="text-xs text-white/50">4105</span>
            </label>
            <label class="flex items-center gap-2 text-sm cursor-pointer hover:text-[#00FA9A]">
              <input type="checkbox" class="size-4 accent-[#00FA9A]">
              <span class="grow">Canada</span>
              <span class="text-xs text-white/50">2356</span>
            </label>
          </div>
          <button class="mt-3 text-xs font-bold text-[#00FA9A] flex items-center gap-1">128 more <i class="ti ti-chevron-down"></i></button>
          </div>
        </details>

      </aside>

      <!-- PRODUCTS -->
      <section>
        <div class="flex justify-between items-center mb-4 text-sm">
          <p>Results found: <span class="font-bold">1000+</span></p>
          <label class="flex items-center gap-2 font-bold">
            <i class="ti ti-sort-descending"></i> Popularity:
            <select class="bg-transparent text-[#00FA9A] font-bold outline-none cursor-pointer">
              <option class="text-black">Most popular</option>
              <option class="text-black">Price: low to high</option>
              <option class="text-black">Price: high to low</option>
              <option class="text-black">Newest</option>
            </select>
          </label>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

        <a href="#" class="group flex flex-col bg-[#1f0a5c] border border-transparent hover:border-[#00FA9A] transition">
          <div class="relative aspect-[3/4] overflow-hidden bg-black">
            <img src="/images/game.jpg" alt="Rivals of Aether II (PC) Steam Key" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <span class="absolute bottom-7 left-1 flex items-center gap-1 bg-[#00FA9A] text-[#12062e] text-[10px] font-bold px-1.5 py-0.5 rounded-sm">
              <i class="ti ti-coin"></i> CASHBACK
            </span>
            <span class="absolute bottom-0 left-0 right-0 bg-black/80 text-[11px] text-center py-1">Steam</span>
          </div>
          <div class="flex flex-col gap-1 p-3 grow">
            <p class="text-xs font-bold leading-snug line-clamp-2">Rivals of Aether II (PC) Steam Key</p>
            <p class="text-[11px] font-bold text-[#00FA9A]">GLOBAL</p>
            <div class="mt-auto pt-3">
            <p class="text-xs text-white/50">From <s>€188.70</s> <span class="text-[#00FA9A] font-bold">-59%</span></p>
            <p class="text-lg font-bold">€76.91</p>
            <p class="text-xs font-bold text-[#7fff00]">11% Cashback</p>
            </div>
          </div>
        </a>

        <a href="#" class="group flex flex-col bg-[#1f0a5c] border border-transparent hover:border-[#00FA9A] transition">
          <div class="relative aspect-[3/4] overflow-hidden bg-black">
            <img src="/images/game.jpg" alt="Airalo eSIM 50 USD Voucher" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <span class="absolute bottom-0 left-0 right-0 bg-black/80 text-[11px] text-center py-1">Airalo</span>
          </div>
          <div class="flex flex-col gap-1 p-3 grow">
            <p class="text-xs font-bold leading-snug line-clamp-2">Airalo eSIM 50 USD Voucher</p>
            <p class="text-[11px] font-bold text-[#00FA9A]">GLOBAL, EUROPE</p>
            <div class="mt-auto pt-3">
            <p class="text-xs text-white/50">From</p>
            <p class="text-lg font-bold">€278.13</p>

            </div>
          </div>
        </a>

        <a href="#" class="group flex flex-col bg-[#1f0a5c] border border-transparent hover:border-[#00FA9A] transition">
          <div class="relative aspect-[3/4] overflow-hidden bg-black">
            <img src="/images/game.jpg" alt="Back 4 Blood (PC) Steam Key" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <span class="absolute bottom-7 left-1 flex items-center gap-1 bg-[#00FA9A] text-[#12062e] text-[10px] font-bold px-1.5 py-0.5 rounded-sm">
              <i class="ti ti-coin"></i> CASHBACK
            </span>
            <span class="absolute bottom-0 left-0 right-0 bg-black/80 text-[11px] text-center py-1">Steam</span>
          </div>
          <div class="flex flex-col gap-1 p-3 grow">
            <p class="text-xs font-bold leading-snug line-clamp-2">Back 4 Blood (PC) Steam Key</p>
            <p class="text-[11px] font-bold text-[#00FA9A]">EMEA, EUROPE</p>
            <div class="mt-auto pt-3">
            <p class="text-xs text-white/50">From <s>€446.35</s> <span class="text-[#00FA9A] font-bold">-71%</span></p>
            <p class="text-lg font-bold">€129.23</p>
            <p class="text-xs font-bold text-[#7fff00]">11% Cashback</p>
            </div>
          </div>
        </a>

        <a href="#" class="group flex flex-col bg-[#1f0a5c] border border-transparent hover:border-[#00FA9A] transition">
          <div class="relative aspect-[3/4] overflow-hidden bg-black">
            <img src="/images/game.jpg" alt="Minecraft: Java & Bedrock Edition (PC)" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <span class="absolute bottom-7 left-1 flex items-center gap-1 bg-[#00FA9A] text-[#12062e] text-[10px] font-bold px-1.5 py-0.5 rounded-sm">
              <i class="ti ti-coin"></i> CASHBACK
            </span>
            <span class="absolute bottom-0 left-0 right-0 bg-black/80 text-[11px] text-center py-1">Windows Store</span>
          </div>
          <div class="flex flex-col gap-1 p-3 grow">
            <p class="text-xs font-bold leading-snug line-clamp-2">Minecraft: Java & Bedrock Edition (PC)</p>
            <p class="text-[11px] font-bold text-[#00FA9A]">GLOBAL</p>
            <div class="mt-auto pt-3">
            <p class="text-xs text-white/50">From <s>€224.17</s> <span class="text-[#00FA9A] font-bold">-47%</span></p>
            <p class="text-lg font-bold">€117.80</p>
            <p class="text-xs font-bold text-[#7fff00]">11% Cashback</p>
            </div>
          </div>
        </a>

        <a href="#" class="group flex flex-col bg-[#1f0a5c] border border-transparent hover:border-[#00FA9A] transition">
          <div class="relative aspect-[3/4] overflow-hidden bg-black">
            <img src="/images/game.jpg" alt="Roblox - 1000 Robux Key" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <span class="absolute bottom-0 left-0 right-0 bg-black/80 text-[11px] text-center py-1">Roblox</span>
          </div>
          <div class="flex flex-col gap-1 p-3 grow">
            <p class="text-xs font-bold leading-snug line-clamp-2">Roblox - 1000 Robux Key</p>
            <p class="text-[11px] font-bold text-[#00FA9A]">GLOBAL</p>
            <div class="mt-auto pt-3">
            <p class="text-xs text-white/50">From</p>
            <p class="text-lg font-bold">€73.63</p>

            </div>
          </div>
        </a>

        <a href="#" class="group flex flex-col bg-[#1f0a5c] border border-transparent hover:border-[#00FA9A] transition">
          <div class="relative aspect-[3/4] overflow-hidden bg-black">
            <img src="/images/game.jpg" alt="Microsoft Windows 11 Pro Key" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <span class="absolute bottom-0 left-0 right-0 bg-black/80 text-[11px] text-center py-1">Microsoft</span>
          </div>
          <div class="flex flex-col gap-1 p-3 grow">
            <p class="text-xs font-bold leading-snug line-clamp-2">Microsoft Windows 11 Pro Key</p>
            <p class="text-[11px] font-bold text-[#00FA9A]">GLOBAL</p>
            <div class="mt-auto pt-3">
            <p class="text-xs text-white/50">From</p>
            <p class="text-lg font-bold">€104.57</p>

            </div>
          </div>
        </a>

        <a href="#" class="group flex flex-col bg-[#1f0a5c] border border-transparent hover:border-[#00FA9A] transition">
          <div class="relative aspect-[3/4] overflow-hidden bg-black">
            <img src="/images/game.jpg" alt="Project Zomboid Steam Gift" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <span class="absolute bottom-7 left-1 flex items-center gap-1 bg-[#00FA9A] text-[#12062e] text-[10px] font-bold px-1.5 py-0.5 rounded-sm">
              <i class="ti ti-coin"></i> CASHBACK
            </span>
            <span class="absolute bottom-0 left-0 right-0 bg-black/80 text-[11px] text-center py-1">Steam Gift</span>
          </div>
          <div class="flex flex-col gap-1 p-3 grow">
            <p class="text-xs font-bold leading-snug line-clamp-2">Project Zomboid Steam Gift</p>
            <p class="text-[11px] font-bold text-[#00FA9A]">GLOBAL</p>
            <div class="mt-auto pt-3">
            <p class="text-xs text-white/50">From <s>€146.76</s> <span class="text-[#00FA9A] font-bold">-61%</span></p>
            <p class="text-lg font-bold">€57.03</p>
            <p class="text-xs font-bold text-[#7fff00]">11% Cashback</p>
            </div>
          </div>
        </a>

        <a href="#" class="group flex flex-col bg-[#1f0a5c] border border-transparent hover:border-[#00FA9A] transition">
          <div class="relative aspect-[3/4] overflow-hidden bg-black">
            <img src="/images/game.jpg" alt="Farming Simulator 25 (PC) Steam Key" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <span class="absolute bottom-7 left-1 flex items-center gap-1 bg-[#00FA9A] text-[#12062e] text-[10px] font-bold px-1.5 py-0.5 rounded-sm">
              <i class="ti ti-coin"></i> CASHBACK
            </span>
            <span class="absolute bottom-0 left-0 right-0 bg-black/80 text-[11px] text-center py-1">Steam</span>
          </div>
          <div class="flex flex-col gap-1 p-3 grow">
            <p class="text-xs font-bold leading-snug line-clamp-2">Farming Simulator 25 (PC) Steam Key</p>
            <p class="text-[11px] font-bold text-[#00FA9A]">REST OF THE WORLD</p>
            <div class="mt-auto pt-3">
            <p class="text-xs text-white/50">From <s>€224.17</s> <span class="text-[#00FA9A] font-bold">-53%</span></p>
            <p class="text-lg font-bold">€104.50</p>
            <p class="text-xs font-bold text-[#7fff00]">11% Cashback</p>
            </div>
          </div>
        </a>

        <a href="#" class="group flex flex-col bg-[#1f0a5c] border border-transparent hover:border-[#00FA9A] transition">
          <div class="relative aspect-[3/4] overflow-hidden bg-black">
            <img src="/images/game.jpg" alt="Xbox Game Pass Ultimate – 1 Month" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <span class="absolute bottom-7 left-1 flex items-center gap-1 bg-[#00FA9A] text-[#12062e] text-[10px] font-bold px-1.5 py-0.5 rounded-sm">
              <i class="ti ti-coin"></i> CASHBACK
            </span>
            <span class="absolute bottom-0 left-0 right-0 bg-black/80 text-[11px] text-center py-1">Xbox Live</span>
          </div>
          <div class="flex flex-col gap-1 p-3 grow">
            <p class="text-xs font-bold leading-snug line-clamp-2">Xbox Game Pass Ultimate – 1 Month</p>
            <p class="text-[11px] font-bold text-[#00FA9A]">EUROPE</p>
            <div class="mt-auto pt-3">
            <p class="text-xs text-white/50">From</p>
            <p class="text-lg font-bold">€105.99</p>
            <p class="text-xs font-bold text-[#7fff00]">11% Cashback</p>
            </div>
          </div>
        </a>

        <a href="#" class="group flex flex-col bg-[#1f0a5c] border border-transparent hover:border-[#00FA9A] transition">
          <div class="relative aspect-[3/4] overflow-hidden bg-black">
            <img src="/images/game.jpg" alt="Call of Duty: Modern Warfare 4" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <span class="absolute bottom-7 left-1 flex items-center gap-1 bg-[#00FA9A] text-[#12062e] text-[10px] font-bold px-1.5 py-0.5 rounded-sm">
              <i class="ti ti-coin"></i> CASHBACK
            </span>
            <span class="absolute bottom-0 left-0 right-0 bg-black/80 text-[11px] text-center py-1">Xbox Live</span>
          </div>
          <div class="flex flex-col gap-1 p-3 grow">
            <p class="text-xs font-bold leading-snug line-clamp-2">Call of Duty: Modern Warfare 4</p>
            <p class="text-[11px] font-bold text-[#00FA9A]">GLOBAL</p>
            <div class="mt-auto pt-3">
            <p class="text-xs text-white/50">From</p>
            <p class="text-lg font-bold">€412.38</p>
            <p class="text-xs font-bold text-[#7fff00]">11% Cashback</p>
            </div>
          </div>
        </a>

        <a href="#" class="group flex flex-col bg-[#1f0a5c] border border-transparent hover:border-[#00FA9A] transition">
          <div class="relative aspect-[3/4] overflow-hidden bg-black">
            <img src="/images/game.jpg" alt="Terraria Steam Gift" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <span class="absolute bottom-7 left-1 flex items-center gap-1 bg-[#00FA9A] text-[#12062e] text-[10px] font-bold px-1.5 py-0.5 rounded-sm">
              <i class="ti ti-coin"></i> CASHBACK
            </span>
            <span class="absolute bottom-0 left-0 right-0 bg-black/80 text-[11px] text-center py-1">Steam Gift</span>
          </div>
          <div class="flex flex-col gap-1 p-3 grow">
            <p class="text-xs font-bold leading-snug line-clamp-2">Terraria Steam Gift</p>
            <p class="text-[11px] font-bold text-[#00FA9A]">GLOBAL</p>
            <div class="mt-auto pt-3">
            <p class="text-xs text-white/50">From <s>€72.85</s> <span class="text-[#00FA9A] font-bold">-81%</span></p>
            <p class="text-lg font-bold">€14.13</p>
            <p class="text-xs font-bold text-[#7fff00]">11% Cashback</p>
            </div>
          </div>
        </a>

        <a href="#" class="group flex flex-col bg-[#1f0a5c] border border-transparent hover:border-[#00FA9A] transition">
          <div class="relative aspect-[3/4] overflow-hidden bg-black">
            <img src="/images/game.jpg" alt="PUBG Mobile UC" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <span class="absolute bottom-7 left-1 flex items-center gap-1 bg-[#00FA9A] text-[#12062e] text-[10px] font-bold px-1.5 py-0.5 rounded-sm">
              <i class="ti ti-coin"></i> CASHBACK
            </span>
            <span class="absolute bottom-0 left-0 right-0 bg-black/80 text-[11px] text-center py-1">PUBG Mobile</span>
          </div>
          <div class="flex flex-col gap-1 p-3 grow">
            <p class="text-xs font-bold leading-snug line-clamp-2">PUBG Mobile UC</p>
            <p class="text-[11px] font-bold text-[#00FA9A]">GLOBAL</p>
            <div class="mt-auto pt-3">
            <p class="text-xs text-white/50">From</p>
            <p class="text-lg font-bold">€7.47</p>
            <p class="text-xs font-bold text-[#7fff00]">11% Cashback</p>
            </div>
          </div>
        </a>

        </div>

        <!-- PAGINATION -->
        <nav class="flex justify-center items-center gap-1 mt-10 text-sm font-bold">
          <a href="#" class="size-8 grid place-items-center border border-white/30 text-white/40"><i class="ti ti-chevron-left"></i></a>
          <a href="#" class="size-8 grid place-items-center border border-[#00FA9A] text-[#00FA9A]">1</a>
          <a href="#" class="size-8 grid place-items-center hover:text-[#00FA9A]">2</a>
          <a href="#" class="size-8 grid place-items-center hover:text-[#00FA9A]">3</a>
          <a href="#" class="size-8 grid place-items-center hover:text-[#00FA9A]">4</a>
          <a href="#" class="size-8 grid place-items-center hover:text-[#00FA9A]">5</a>
          <span class="size-8 grid place-items-center">…</span>
          <a href="#" class="size-8 grid place-items-center hover:text-[#00FA9A]">50</a>
          <a href="#" class="size-8 grid place-items-center border border-white hover:border-[#00FA9A] hover:text-[#00FA9A]"><i class="ti ti-chevron-right"></i></a>
        </nav>
      </section>

    </div>
  </main>

  <!-- FOOTER -->
  <footer class="bg-[#12062e] mt-auto">
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