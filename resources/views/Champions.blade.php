
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class='bg-[#0A1428] text-white h-2000'>
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
    <div class='flex '>
        <p class='font-bold text-black text-6xl mt-10 mb-10'>What are Champions?</p>
    </div>
    <div>
        <p class='text-black mt-5 text-xl text-center'>There are many champions in League of Legends, each with their own unique abilities, playstyles, and roles. Some champions are designed for specific positions on the map, such as top lane, mid lane, bot lane (ADC), or jungle. Others are more versatile and can be played in multiple roles. Champions can be categorized into different classes based on their primary attributes and playstyles, such as assassins, mages, tanks, marksmen, fighters, and supports. Each champion has a distinct visual design and lore that adds depth to the game's universe. Players often choose champions that complement their team's composition and strategy for a match. </p>
    </div>

    
</div>
<div class='flex justify-center items-center  mt-30 '>    
 <p class='text-3xl font-bold '>Here you can find information about all the champions in the game, including their abilities, lore, and tips! </p>
</div>
<div class='flex justify-center items-center  mt-40'>    
 <p class='text-xl font-bold '>Filter Champions by type:</p>
</div>
<div class='flex justify-center items-center gap-20 mt-10'>
    
 <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-black hover:transition-transform duration-400'>Fighters</button>
 <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-black hover:transition-transform duration-400'>Assassins</button>
 <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-black hover:transition-transform duration-400'>Mages</button>
 <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-black hover:transition-transform duration-400'>Marksmen</button>
 <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-black hover:transition-transform duration-400'>Supports</button>
 <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-black hover:transition-transform duration-400'>Tanks</button>

</div>

<div class='flex justify-center items-center  mt-20'>    
 <p class='text-xl font-bold '>Filter Champions by Role:</p>
</div>
<div class='flex justify-center items-center gap-20 mt-10'>
    
 <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-black hover:transition-transform duration-400'>Top</button>
 <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-black hover:transition-transform duration-400'>Mid</button>
 <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-black hover:transition-transform duration-400'>Jungle</button>
 <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-black hover:transition-transform duration-400'>ADC</button>
 <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-black hover:transition-transform duration-400'>Support</button>
 

</div>
 
<div class='flex justify-center items-center '>
<div class='grid grid-cols-7 gap-10 p-10 mt-40 border-2 rounded-sm border-[#C89B3C] bg-black  place-items-center mx-auto'>
    @foreach ($champions['data'] as $champion)
        <a href="/Champion/{{ $champion['name'] }}"><div class='relative cursor-pointer hover:scale-105 transition-transform duration-200 border-2 rounded-sm border-[#C89B3C]  '>
            <img 
                class='w-[200px] h-[200px] object-cover rounded' 
                src="{{ $url . $champion['image']['full'] }}"
            >
            <p class='absolute bottom-2 left-0 right-0 text-center text-xl font-bold text-white text-shadow-lg'>
                {{ $champion['name'] }}
            </p>
        </div></a>
    @endforeach
</div>
</div>
</body>
</html>