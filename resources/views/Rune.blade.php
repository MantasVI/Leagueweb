<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      @vite('resources/css/app.css')
</head>
<body class='bg-[#0A1428] text-white overflow-x-hidden italic'>
<div class="flex p-5 bg-black justify-between fixed w-full z-50 ">
    <div class='flex items-center'> 
        <p class='ml-10' >Logo</p>
    </div>

    <div class='flex items-center justify-center'> 
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
@if ($name == 'Domination')
<div class='flex text-black items-center justify-center flex-col p-40 bg-[#C89B3C]'>
    <div class='flex flex-col justify-center items-center '>
        <p class='font-bold text-black text-6xl mt-10 mb-10'>{{$name}}</p>
        <p class='text-black mt-5 text-xl text-center'>Burst damage and quick assassinations.<br>Best for:<b> assassins, burst mages<b></p>
    </div>
  
@endif
   @if ($name == 'Inspiration')
<div class='flex text-black items-center justify-center flex-col p-40 bg-[#C89B3C]'>
    <div class='flex flex-col justify-center items-center '>
        <p class='font-bold text-black text-6xl mt-10 mb-10'>{{$name}}</p>
        <p class='text-black mt-5 text-xl text-center'>Creative utility and rule-breaking mechanics.

<br>Best for:<b> utility champions, scaling setups<b></p>
    </div>
  
@endif
@if ($name == 'Resolve')
<div class='flex text-black items-center justify-center flex-col p-40 bg-[#C89B3C]'>
    <div class='flex flex-col justify-center items-center '>
        <p class='font-bold text-black text-6xl mt-10 mb-10'>{{$name}}</p>
        <p class='text-black mt-5 text-xl text-center'>Defense, durability, and survivability.<br>Best for:<b> tanks, supports<b></p>
    </div>
  
@endif
@if ($name == 'Sorcery')
<div class='flex text-black items-center justify-center flex-col p-40 bg-[#C89B3C]'>
    <div class='flex flex-col justify-center items-center '>
        <p class='font-bold text-black text-6xl mt-10 mb-10'>{{$name}}</p>
        <p class='text-black mt-5 text-xl text-center'>Magic damage, poke, and ability enhancement.<br>Best for:<b> mages, poke champions<b></p>
    </div>
  
@endif 

@if ($name == 'Precision')
<div class='flex text-black items-center justify-center flex-col p-40 bg-[#C89B3C]'>
    <div class='flex flex-col justify-center items-center '>
        <p class='font-bold text-black text-6xl mt-10 mb-10'>{{$name}}</p>
        <p class='text-black mt-5 text-xl text-center'>Focused on sustained damage and stronger attacks over time.<br>Best for:<b> ADCs, fighters, duelists<b></p>
    </div>
  
@endif 
</div>

<div class='flex flex-col justify-center items-center text-[#C89B3C] font-bold'>
    @foreach( $runes as $rune)
    @if ($name == $rune['name'])
    <div class='flex flex-col justify-center items-center mb-20 mt-20 border-2 p-10 border-[#C89B3C] rounded-sm'>
        <p class='text-center'> {{ $rune['name'] }}</p>
        <img class='w-20 h-20' src="{{ $url }}/{{ $rune['icon'] }}">
    </div>

   <div class="mr-20 ml-20 p-10 border border-[#C89B3C] rounded-sm" > 
        @foreach ($rune['slots'] as $slot)
        <div class='grid grid-col-3 justify-center items-center p-20 border border-[#C89B3C] '> 
            <div class='flex justify-center items-center gap-40 '>
                @foreach ($slot['runes'] as $perk)
                    <div class='group relative flex flex-col justify-center items-center '>
                        
                        <img class='w-30 h-30' src="{{ $url }}/{{ $perk['icon'] }}">
                        <p class='absolute  left-0 -bottom-10 right-0 text-center opacity-100 group-hover:opacity-0 text-[#C89B3C] text-xl hover:transition-transform duration-400 font-bold  text-shadow-lg    w-[100px]'><b class='text-white'>{{$perk['name']}}</b></p>
       
                        <p class='absolute top-40 -left-20 text-center opacity-0 pointer-events-none group-hover:opacity-90 text-[#C89B3C] text-xl hover:transition-transform duration-400 font-bold p-2  text-shadow-lg border-2 border-[#C89B3C] z-10 bg-black w-[300px]'><b class='text-white'>{{$perk['name']}}</b><br>{{ strip_tags($perk['longDesc']) }}</p>
                    </div>
                    
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
    @endif
    @endforeach 

</div>


<div class=' mt-30 border-1 border-[#C89B3C]'>
    <div class='p-10 bg-black w-full absolute'>
       
</div>
</body>
</html>