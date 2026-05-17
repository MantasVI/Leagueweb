<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      @vite('resources/css/app.css')
</head>

<body class='bg-[#0A1428] text-white overflow-x-hidden'> 
<div class="  flex p-5 bg-black justify-between fixed w-full z-50 ">
    
    <div class='flex items-center'> <a href='https://github.com/MantasVI'><p class='ml-10' >Githubas</p></a> </div>
   
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
<div class='flex text-black items-center justify-center flex-col p-40 bg-[#C89B3C]'>
    <div class='flex '>
        <p class='font-bold text-black text-6xl mt-10 mb-10'>{{$champ['id']}} skins!</p>
    </div>
    <div>
        <p class='text-black text-2xl'></p>
    </div>

    
</div>
<div class='grid grid-cols-4 justify-center items-center gap-y-10 gap-x-20  mt-30 border-2 border-[#C89B3C] p-20 bg-black ml-20 mr-20 mb-20 rounded-sm'>
    @foreach($skin as $skins ) 
    @if(!isset($skins['parentSkin']))
    <div class=' relative flex justify-center items-center hover:scale-105 transition-transform duration-300 '>
        <p class='font-bold italic text-white drop-shadow-lg text-3xl absolute bottom-10 left-0 right-0 text-center'>{{ $skins['name'] }}</p> 
        <img class='object-cover w-full h-full border-2 rounded-sm border-[#C89B3C]' src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/{{$champ['id']}}_{{$skins['num']}}.jpg">
    </div>
    @endif
    @endforeach
</div>
</body>
</html>