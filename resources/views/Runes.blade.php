<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class='bg-[#0A1428] text-white overflow-x-hidden italic '>
    <div class="  flex p-5 bg-black justify-between fixed w-full z-50 ">
    <div class='flex items-center'> 
       <a href='/Home'>  <button id='btn2' class='p-3 bg-black border border-blue-900 ml-5 pr-10 pl-10 rounded-sm hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 '>Back</button></a>
      
    </div>
@guest
     <div class='flex items-center mr-10 gap-10'>
       <a href='/Sign'> <button class='p-3 bg-black border border-blue-900 rounded-sm  hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 '>sign up </button></a>
      <a href='/Login'>  <button  class='p-3 bg-black border border-blue-900  rounded-sm hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 '>log in </button></a>
        
    </div>
@endguest

@auth
  <div class='flex items-center mr-10 gap-10'>
        <p class='font-bold text-white text-2xl'>User Conected: <b class='text-[#C89B3C]'>{{Auth::user()->username}}</b></p>
        <form method='POST' action='/Logout'>
            @csrf
         <button type='submit' class='p-3 bg-black border border-blue-900  rounded-sm hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 '>log out </button>
        </form>
    </div>
@endauth

</div>

<div class='flex text-black items-center justify-center flex-col p-40 bg-[#C89B3C]'>
    <div class='mt-10'>
        <p class='font-bold text-black text-6xl mt-10 mb-10'>What are Runes?</p>
    </div>
    <div class='mt-10 text-center'>
        <p class='text-black text-xl tracking-wide'>Runes are a customizable system that lets players strengthen and personalize their champions before a match begins.
             They provide bonuses and special effects that can improve <b class='text-red-600'>damage</b>, <b class='text-[#613714]'>defense</b>, <b class='text-green-600'>healing</b>, <b class='text-white'>movement speed </b>, or <b>utility</b> depending on a player’s strategy and playstyle. Runes are divided into different paths, such as <b class='text-orange-700'>Precision</b>, <b class='text-[#7a092f]'>Domination</b>, <b class='text-blue-600'>Sorcery</b>, <b class='text-green-800'>Resolve</b>, and <b class='text-teal-600'>Inspiration</b>, each designed for specific roles or tactics. Players choose a primary rune path with a powerful “keystone” rune and a secondary path for additional bonuses, allowing them to adapt their setup to different champions and matchups. This system adds depth to the game because the right rune choices can greatly influence how a champion performs during the early, mid, and late stages of a match.</p>
    </div>

</div>
<div class='flex items-center justify-center'>
    <div class='grid grid-cols-5 p-10 gap-10 mt-40 bg-black border border-[#C89B3C] rounded-sm'>
        @foreach ($runes as $rune)
        <div style="background-image: url('/images/runes/{{ $rune['name'] }}_splash_art.webp')" class="relative border border-[#C89B3C] rounded-xl bg-right bg-cover  w-80 h-80 hover:scale-105 transition-transform duration-300 ">

            <a href="/Rune/{{$rune['name']}}" class='absolute top-0 left-0 right-0 bottom-0'></a>
            <p class= 'absolute  bottom-3 left-0  right-0 text-center font-bold text-3xl'>{{$rune['name']}}</p>
        </div>
       @endforeach
    </div>
</div>



<div class=' mt-30 border-1 border-[#C89B3C]'>
    <div class='p-10 bg-black w-full absolute'>
       
</div>



</body>
</html>