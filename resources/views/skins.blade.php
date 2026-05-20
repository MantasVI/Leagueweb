<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class=' relative bg-[#0A1428] text-white overflow-x-hidden italic '>
  <div class="flex p-5 bg-black justify-between fixed w-full z-50 ">
    <div class='flex items-center'> 
        <p class='ml-10' >Logo</p>
    </div>

    <div class='flex items-center justify-center'> 
        <a href='Home'><button class='p-3 bg-black border border-blue-900  rounded-sm  hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 '>Return</button></a>
       
    </div>

     <div class='flex items-center mr-10 gap-10'>
       <button class='p-3 bg-black border border-blue-900 rounded-sm  hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 '>sign up </button>
       <button class='p-3 bg-black border border-blue-900  rounded-sm hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 '>log in </button>
        <select class='p-3 bg-black border border-blue-900  rounded-sm hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 outline-none'>
            <option  value='lt'>LT</option>
            <option  value='en'>EN</option>
        </select>
    </div>

</div>

<div class='flex text-black items-center justify-center flex-col p-40 bg-[#C89B3C]'>
    <div class='flex flex-col justify-center items-center'>
        <p class='font-bold text-black text-6xl mt-10 mb-10'>What are Skins?</p>
         <p class='text-black mt-5 text-xl text-center'>Skins are cosmetic appearances that change how a champion looks in the game without affecting gameplay balance or stats. A skin can alter a champion’s outfit, colors, animations, sound effects, voice lines, spell visuals, and even recall animations, making the character feel completely different while still playing the same mechanically. Riot Games releases skins in many themes and collections, such as futuristic, fantasy, cyberpunk, or seasonal events, and they are usually purchased with Riot Points (RP) or earned through loot systems like Hextech Chests. Some skins are simple visual recolors, while higher-tier skins—such as Legendary or Ultimate skins—can include entirely new effects, transformations, and unique interactions.</p>
    </div>


    
</div>
<hr class="border-1 ml-20 mr-20 border-[#C89B3C] mt-30 w-90%">
<div class='flex justify-center items-center  mt-30 '>    
     
 <p class='text-3xl font-bold '>Here you can find information about all the champions in the game, including their abilities, lore, and tips! </p>
</div>
<hr class="border-1 ml-20 mr-20 border-[#C89B3C] mt-30 w-90%">

<div class='flex-col justify-center items-center  mt-40 border-1 border-[#C89B3C] ml-30 mr-30 mb-30 bg-black'>

    <div class='flex justify-center items-center mt-20 '>    
    <p class='text-xl font-bold '>Filter Champions by type:</p>
    </div>

    <div class='flex justify-center items-center gap-20 mt-10'>
        
        <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Fighters</button>
        <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Assassins</button>
        <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Mages</button>
        <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Marksmen</button>
        <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Supports</button>
        <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Tanks</button>

    </div>


    <div class='flex justify-center items-center  mt-20'>    
    <p class='text-xl font-bold '>Filter Champions by Role:</p>
    </div>
    <div class='flex justify-center items-center gap-20 mt-20 mb-20'>
        
    <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Top</button>
    <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Mid</button>
    <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Jungle</button>
    <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>ADC</button>
    <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Support</button>
    

    </div>
    
 </div>

 <div class='flex flex-col items-center justify-center mt-15 '>
    <div class='mt-10 hover:scale-105 transition-transform duration-300 shadow-md rounded-sm border border-[#C89B3C]'>
        <input class='text-[#C89B3C] bg-white w-150 p-5 rounded outline-none 'type='text' placeholder='Search'>
    </div>
</div>


<div class='flex justify-center items-center '>
<div class='grid grid-cols-7 gap-10 gap-y-20 p-10 mt-40 border-2 rounded-sm border-[#C89B3C] bg-black  place-items-center mx-auto'>
    @foreach ($skins['data'] as $skin)
        <a href="/Skin/{{ $skin['id'] }}"><div class='relative cursor-pointer hover:scale-105 transition-transform duration-200 border-2 rounded-sm border-[#C89B3C]  '>
            <img 
                class='w-[200px] h-[200px] object-cover rounded' 
                src="{{ $url . $skin['image']['full'] }}"
            >
            <p class='absolute -bottom-10 left-0 right-0 text-center text-xl font-bold text-white text-shadow-lg'>
                {{ $skin['name'] }}
            </p>
        </div></a>
    @endforeach
</div>
</div>





    <div class='mt-30 p-10 bg-black w-full absolute border-1 border-[#C89B3C]'></div>
       

</body>
</html>