<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        @vite('resources/css/app.css')
</head>
<body class='bg-[#0A1428] text-white'>
    <div class="  flex p-5 bg-black justify-between fixed w-full z-50 ">
    <div class='flex items-center'> 
        <p class='ml-10' >Logo</p>
    </div>
     <div class='flex items-center'> 
        <a href='/Home'><button class='p-3 bg-black border border-blue-900  rounded-sm  hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 '>Return</button></a>
       
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
    <div style="background-image: url('https://ddragon.leagueoflegends.com/cdn/img/champion/splash/{{ $champion['id'] }}_0.jpg')" class="bg-cover bg-center flex  items-center justify-center flex-col p-120 h-full w-full">
    <div class='flex '>
        <p class='text-[#C89B3C] italic text-8xl font-bold'>{{ $champion['title']}}</p>
        
    </div>
    <div>
        <p class='font-bold italic text-white text-4xl  mt-10 mb-5'>{{ $champion['name'] }}</p>
    </div>
        <div class='flex  items-center justify-center flex-col p-5 mt-20 border-2 border-[#C89B3C] bg-black  ' >
        <p class='text-4xl font-bold text-[#C89B3C]'>{{$champion['tags'][0]}}</p>

        </divs>

</div>
    
    
</div>
<div class='flex text-black items-center justify-center flex-col p-40 bg-[#C89B3C]'>
    <p class='font-bold text-6xl mb-15'>Lore</p>
    
    <p class='text-2xl text-center mb-10'>{{$champion['lore'] }}</p>


</div>
<div class='flex  items-center justify-center flex-col  '>
     <p class='text-6xl font-bold mt-20 mb-20'>Stats</p>
    <div class='grid p-10 text-white items-center justify-center border-[#C89B3C] mb-30  border-2 mt-10 bg-black' >
       
        <p class='text-4xl  mb-5'><b class='text-green-600'>Base HP:</b> {{$champion['stats']['hp']}}</p>
        <p class='text-4xl  mb-5'><b class='text-green-600'>HP per Level:</b> {{$champion['stats']['hpperlevel']}}</p>
        <p class='text-4xl  mb-5'><b class='text-white'>Move Speed:</b> {{$champion['stats']['movespeed']}}</p>
        <p class='text-4xl mb-5'><b class='text-[#C89B3C]'>Armor:</b> {{$champion['stats']['armor']}}</p>
        <p class='text-4xl mb-5'><b class='text-[#C89B3C]'>Armor per Level:</b> {{$champion['stats']['armorperlevel']}}</p>
        <p class='text-4xl mb-5'><b class='text-white'>Magic Resist:</b> {{$champion['stats']['spellblock']}}</p>
        <p class='text-4xl mb-5'><b class='text-blue-300'>Magic Resist per Level:</b> {{$champion['stats']['spellblockperlevel']}}</p>
        <p class='text-4xl mb-5'><b class='text-blue-300'>Attack Range:</b> {{$champion['stats']['attackrange']}}</p>
        <p class='text-4xl mb-5'><b class='text-green-600'>HP Regen:</b> {{$champion['stats']['hpregen']}}</p>
        <p class='text-4xl mb-5'><b class='text-green-600'>HP Regen per Level:</b> {{$champion['stats']['hpregenperlevel']}}</p>
        <p class='text-4xl mb-5'><b class='text-orange-600'>Attack Damage:</b> {{$champion['stats']['attackdamage']}}</p>
        <p class='text-4xl mb-5'><b class='text-yellow-200'>Attack Speed:</b> {{$champion['stats']['attackspeed']}}</p>
        <p class='text-4xl mb-5'><b class='text-yellow-200'>Attack Speed per Level:</b> {{$champion['stats']['attackspeedperlevel']}}</p>
  
    </div>
</div>

</body>
</html>