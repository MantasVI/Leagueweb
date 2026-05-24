<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        @vite('resources/css/app.css')
</head>
<body class='bg-[#0A1428] text-white overflow-x-hidden italic '>
 <div class="flex p-5 bg-black justify-between fixed  w-full z-50 ">
    <div class='flex items-center'> 
       <a href='/Champions'>  <button id='btn2' class='p-3 bg-black border border-blue-900 ml-5 pr-10 pl-10 rounded-sm hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 '>Back</button></a>
        <a href='/Home'>  <button id='btn2' class='p-3 bg-black border border-blue-900 ml-5 pr-10 pl-10 rounded-sm hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 '>Home</button></a>
    </div>
    @guest
     <div class='flex items-center mr-10 gap-10'>
       <a href='/Sign'> <button id='btn1' class='p-3 bg-black border border-blue-900 rounded-sm  hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 '>sign up </button></a>
      <a href='/Login'>  <button id='btn2' class='p-3 bg-black border border-blue-900  rounded-sm hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 '>log in </button></a>
        <select id='btn3' class='p-3 bg-black border border-blue-900  rounded-sm hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 outline-none'>
            <option id='o1'  value='lt'>LT</option>
            <option id='o2' value='en'>EN</option>
        </select>
    </div>
@endguest

@auth
  <div class='flex items-center mr-10 gap-10'>
        <p class='font-bold text-white text-2xl'>User Conected: <b class='text-[#C89B3C]'>{{Auth::user()->username}}</b></p>
        <select id='btn3' class='p-3 bg-black border border-blue-900  rounded-sm hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 outline-none'>
            <option id='o1'  value='lt'>LT</option>
            <option id='o2' value='en'>EN</option>
        </select>
    </div>
@endauth
 </div>
<div class='pb-10'></div> 
    
   
    <div style="background-image: url('https://ddragon.leagueoflegends.com/cdn/img/champion/splash/{{$champion['id']}}_0.jpg')" class="bg-cover bg-center flex  items-center justify-center flex-col   h-[1500px] w-full">

        <div class='flex-col justify-center items-center '>
            <p class='text-[#C89B3C] italic text-8xl font-bold'>{{ $champion['title']}}</p>
            <p class='font-bold italic text-white text-4xl  text-center mt-10 mb-5'>{{ $champion['name'] }}</p>
        </div>

       

            <div class='flex flex-col items-center justify-center p-5 mt-20 border-2 border-[#C89B3C] bg-black  ' >
                @foreach($champion['tags'] as $tag)
                
                <p class='text-4xl font-bold text-[#C89B3C] mb-5'>{{$tag}}</p>
                @endforeach
            </div>

    </div>
    
    
</div>

<div class='flex text-black items-center justify-center flex-col p-40 bg-[#C89B3C]'>
    <p class='font-bold text-6xl mb-15'>Lore</p>
    
    <p class='text-2xl text-center mb-10'>{{$champion['lore'] }}</p>


</div>

<div class=' grid-col-5 text-white items-center  justify-center p-20 bg-black border-1 border-[#C89B3C]'>

    <div class=' flex items-center justify-center gap-40 mr-'>

        <div class='relative flex items-center justify-center'>

            <p class='white-text text-6xl '>Champion Abillities</p>
        </div>

        <div class='relative group border-1 border-[#C89B3C] w-32 h-32'>
            <img src="https://ddragon.leagueoflegends.com/cdn/16.10.1/img/passive/{{ $champion['passive']['image']['full'] }}" class='w-32 h-32  border-2 border-[#C89B3C]'>
            <p class='absolute  -left-5 -bottom-15 right-0 text-center opacity-100 group-hover:opacity-0 text-[#C89B3C] text-xl hover:transition-transform duration-400 font-bold  text-shadow-lg  z-10  w-[150px]'><b class='text-white'>Passive Ability</b></p>
            <p class='absolute top-40 -left-20 pointer-events-none text-center opacity-0 group-hover:opacity-90 text-[#C89B3C] text-xl hover:transition-transform duration-400 font-bold p-2  text-shadow-lg border-2 border-[#C89B3C] z-10 bg-black w-[300px]'><b class='text-white'>{{$champion['passive']['name']}}</b><br>{{$champion['passive']['description']}} </p>
        </div>
        
        @foreach($champion['spells'] as $spell)
        <div class='relative group border-1 border-[#C89B3C] w-32 h-32'>
        <img src="https://ddragon.leagueoflegends.com/cdn/16.10.1/img/spell/{{ $spell['image']['full'] }}" class='  w-32 h-32 border-2 border-[#C89B3C]'>
        <p class='absolute  left-0 -bottom-10 right-0 text-center opacity-100 group-hover:opacity-0 text-[#C89B3C] text-xl hover:transition-transform duration-400 font-bold  text-shadow-lg  z-10  w-[100px]'><b class='text-white'>{{Str::substr($spell['id'],-1,1)}}</b></p>
       
        <p class='absolute top-40 -left-20 text-center opacity-0 pointer-events-none group-hover:opacity-90 text-[#C89B3C] text-xl hover:transition-transform duration-400 font-bold p-2  text-shadow-lg border-2 border-[#C89B3C] z-10 bg-black w-[300px]'><b class='text-white'>{{$spell['name']}}</b><br>{{ strip_tags($spell['description']) }}</p>
        </div>
        @endforeach
        
    </div>
</div>



<div class='flex  items-center justify-center flex-col'>
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


<div class=' mt-30 border-1 border-[#C89B3C]'>
    <div class='p-10 bg-black w-full absolute'>
       
</div>
</body>
</html>