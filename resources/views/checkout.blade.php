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
  <header class="max-w-7xl w-full mx-auto px-6 py-4 flex items-center justify-between gap-8">
    <a href="/" class="shrink-0">
      <img src="{{ asset('images/lootkey-logo.svg') }}" alt="Lootkey" class="h-12">
    </a>
    <div class="flex gap-3"> 
        <span class="rounded-full px-2 bg-green-400">1</span>
    <p>cart</p>
    </div>
   
    <div class="flex  gap-3"><span class="rounded-full px-2 bg-gray-700">2</span>
    <p>Payment</p></div>
    
    <div class="flex  gap-3"> <span class="rounded-full px-2 bg-gray-700">3</span>
    <p>get your product</p></div>
   
   <div class="flex  gap-3">
     <button class="flex items-center gap-2 border border-white px-4 py-2 font-semibold">
        🇱🇹 Lietuvių <span class="text-white/40">|</span> EUR
      </button>
   </div>
  </header>

  <!-- if no items in cart
    <div class="flex flex-col gap-5 justify-center items-center mt-15" id="message">
        <h1 class="font-bold text-2xl">Your cart is empty</h1>
        <p class="text-gray-300/50">it seems you haven't choosen your products yet</p>
        <a href="/" class="shadow-[0_0_10px_rgba(0,0,0,0.2)]  bg-yellow-500 text-black p-1">Back to Homepage</a>
    </div>-->

    
    <main class="flex flex-col mt-10 mx-auto w-full max-w-5xl px-6" id="mycart"> 
        <div class="flex justify-between items-start gap-10 w-full">
            <div class="flex flex-col bg-[#350da1] p-5 gap-5 text-sm ">         
                <p class="font-bold ">My cart</p>
                <div class="flex  justify-center  gap-y-10 gap-x-5 ">
                    <div class="flex">
                        <img class="w-30 h-30 border-1 border-green-400" src="{{ asset('images/lootkey-logo.svg') }}">
                    </div>
                    
                    <div class="flex flex-col justify-between w-100 pr-5">
                        <div class="flex justify-between ">
                            <p class="text-xs">sold by (seller)</p> 
                            <div class="flex  items-center gap-2"><button type="button" class=" hover:text-[#00FA9A]"><i class="ti ti-heart text-lg"></i></button>
                            <p class="text-white/40">|</p>
                            <button type="button" class="hover:text-red-400"><i class="ti ti-trash text-lg"></i></button>
                        </div>
                    
                    </div>
                    
                        <p class="text-xs" >description</p>
                        <p class="text-xs">is active in my region?</p>
                        <div class="flex justify-between ">
                            <p class="text-xs" >item type(physical/digital?)</p>
                            <div class="flex gap-x-4">
                            <button>-</button> 
                                <span>1</span> 
                            <button>+</button> 
                        
                            </div>  
                            <p>price</p>
                        </div>
                        
                        <p class="text-xs">cashback amount</p>
                    </div>
                </div>
                
        
            
            
            </div>
        <div class="flex flex-col  gap-y-5">
            <div class="flex flex-col bg-[#350da1] gap-y-2  p-5">
                <p>Where to deliver the order?</p>
                <p>Email</p>
                <input class=" bg-[#2a0c7a] p-2 ">
                <div class="flex"><button type="checkmark"></button>
                <p>Remember me</p></div>
                

            </div>
            <div class="flex flex-col gap-y-2">
                <div class="flex flex-col bg-[#350da1] p-5 ">
                    <div class="flex flex-col gap-y-2">
                        <p class="text-xl font-bold">Summary</p>
                    <button class="bg-yellow-500 p-1 text-black font-bold">Proceed to checkout</button>
                    </div>
                    
                    <div class="flex justify-between mt-2">
                        <p class="text-sm">1 product</p> 
                        <p class="font-bold">total</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-sm">service fee</p> 
                        <p class="font-bold">fee</p>
                    </div>
                </div>

                <div class="flex flex-col bg-[#350da1] p-5 ">
                    <div class="flex justify-between">
                        <p>total:</p>
                        <div class="flex  flex-col">
                            <p>total</p>
                            <p>cashback</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col bg-[#350da1] p-5 gap-y-2 ">
                    <div class="flex justify-between">
                        <p>Got discount code?</p>
                        <button onclick="onclickopensupthecodescreen"> ^ </button>
                    </div>
                    <p class="p-5 border-1 border-yellow-500 w-70">Important: Cashback wont be given if a
                         discount code is used,as only one 
                         promotion can be applied per product
                        </p>
                        <div class="flex justify-between gap-x-2">
                        <input class="bg-[#2a0c7a]"> <button class="border-1 p-2 font-bold">Apply</button>
                        </div>
                </div>
            </div>
            
        </div>
     </div>
        <div class="flex bg-[#350da1] p-5 mt-10 w-full">
        <div class="flex flex-col gap-y-5 w-full">
            <p>Inspired by your picks</p>
            <div class="grid grid-cols-5 gap-5">
                <div class="flex flex-col border-1 border-green-400">
                    <img class='w-full aspect-square object-cover' src="{{ asset('images/lootkey-logo.svg') }}">
                    <div class="flex p-1 flex-col">
                        <div><p>name</p></div>
                        <div><p>region</p></div>
                        <div><p>price</p></div>
                        <div><p>cashback</p></div> 
                    </div>
                </div>
                 <div class="flex flex-col border-1 border-green-400">
                    <img class='w-full aspect-square object-cover' src="{{ asset('images/lootkey-logo.svg') }}">
                    <div class="flex p-1 flex-col">
                        <div><p>name</p></div>
                        <div><p>region</p></div>
                        <div><p>price</p></div>
                        <div><p>cashback</p></div> 
                    </div>
                </div>
                <div class="flex flex-col border-1 border-green-400">
                    <img class='w-full aspect-square object-cover' src="{{ asset('images/lootkey-logo.svg') }}">
                    <div class="flex p-1 flex-col">
                        <div><p>name</p></div>
                        <div><p>region</p></div>
                        <div><p>price</p></div>
                        <div><p>cashback</p></div> 
                    </div>
                </div>
                <div class="flex flex-col border-1 border-green-400">
                    <img class='w-full aspect-square object-cover' src="{{ asset('images/lootkey-logo.svg') }}">
                    <div class="flex p-1 flex-col">
                        <div><p>name</p></div>
                        <div><p>region</p></div>
                        <div><p>price</p></div>
                        <div><p>cashback</p></div> 
                    </div>
                </div>
                <div class="flex flex-col border-1 border-green-400">
                    <img class='w-full aspect-square object-cover' src="{{ asset('images/lootkey-logo.svg') }}">
                    <div class="flex p-1 flex-col">
                        <div><p>name</p></div>
                        <div><p>region</p></div>
                        <div><p>price</p></div>
                        <div><p>cashback</p></div> 
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>




   


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