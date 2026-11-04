<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=favorite,person,search,shopping_cart,menu,stadia_controller" />
    <title>Isigyk nauju zaidimu!</title>
</head>
<body class="bg-[#3DEC55]">
        <header class="flex justify-center items-center gap-10 mt-5">
            <img name='logo ' src="{{ asset('images/lootkey-logo.svg') }}" alt="logo" class ="h-20 ">
            <div class='border-2 border-grey-400 pl-5 pr-30 pt-5 pb-5 flex items-center justify-center gap-5'>
                   <span class="material-symbols-outlined">search</span>
                   <input class="w-80" placeholder="Ieskoti zaidimu,papildymu ir daugiau">
             
            </div>
          

            <div class="flex justify-center items-center gap-10">
                <div class="flex  gap-5"> 
                <a href="">
                    <span class="material-symbols-outlined">favorite</span></a> 
                <a href="">
                    <span class="material-symbols-outlined">shopping_cart</span></a>
                </div> 

                <div class="flex gap-2">
                <a class="flex justify-center items-center" href=""><span class="  material-symbols-outlined">person</span>Prisijungti</a> 
                <p>|</p>
                <a href="">Registruotis</a>
            </div>
        
                
           
        </header>
        <div class="flex items-center justify-center mt-5 p-2 bg-[#008F11]">
            <ul>
                <li>
                    <button class="flex justify-center items-center gap-2">
                        <span class="material-symbols-outlined">menu</span>
                        Kategorijos
                    </button>
                </li>



            </ul>
        </div>
        <div id="carousel">
           <ul><li><button><span class="material-symbols-outlined">
stadia_controller
</span></button></li></ul>
        </div>

</body>
</html>