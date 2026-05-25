
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
    
    <a href='https://github.com/MantasVI/Leagueweb'> <button id='btn2' class='p-3 bg-black border border-blue-900 ml-5 pr-10 pl-10 rounded-sm hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 '>Githubas</button></a>
   
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
    <div class='flex flex-col justify-center items-center'>
        <p class='font-bold text-black text-6xl mt-10 mb-10'>Welcome to the League of Legends database!</p>
        <p class='text-black text-lg'>Here you can find information about champions, skins, and items in the game.</p>
    </div>

</div>




<div class='flex items-center justify-center '>
    <div class='grid grid-cols-4 gap-15 mt-20 bg-black rounded-sm border-2 border-[#C89B3C] p-20 rounded-sm '>
        <div class='relative rounded-xl bg-center bg-cover bg-[url("/public/images/League-of-Legends-12.jpg")] w-90 h-90 hover:scale-105 transition-transform duration-300 border-2 border-[#C89B3C] hover:text-[#C89B3C] transition-transform duration-300'  >

            <a href="Champions" class='absolute top-0 left-0 right-0 bottom-0'></a>
            <p class= 'absolute  -bottom-10 left-0 right-0 text-center font-bold text-3xl '>Champions </p>
        </div>
        <div class='relative rounded-xl bg-center bg-cover bg-[url("/public/images/Skins.png")] w-90 h-90 hover:scale-105 transition-transform duration-300 border-2 border-[#C89B3C] hover:text-[#C89B3C] transition-transform duration-300'>
            <a href="Skins"  class='absolute top-0 left-0 right-0 bottom-0'></a>
            <p class='absolute  -bottom-10 left-0 right-0  text-center font-bold text-3xl'>Skins</p>
        </div>
        <div class='relative rounded-xl bg-center bg-cover bg-[url("/public/images/Items.png")] w-90 h-90 hover:scale-105 transition-transform duration-300 border-2 border-[#C89B3C] hover:text-[#C89B3C] transition-transform duration-300'>
            <a href="Items" class='absolute top-0 left-0 right-0 bottom-0' ></a>
            <p class='absolute -bottom-10 left-0 right-0 text-center font-bold text-3xl '>Items</p>
        </div>
        <div class='relative rounded-xl bg-right bg-cover bg-[url("/public/images/Sorcery.png")] w-90 h-90 hover:scale-105 transition-transform duration-300 border-2 border-[#C89B3C] hover:text-[#C89B3C] transition-transform duration-300'>
            <a href="Runes" class='absolute top-0 left-0 right-0 bottom-0'></a>
            <p  class='absolute  -bottom-10 left-0 right-0 text-center  font-bold text-3xl '>Runes</p>
        </div>
        
    </div>
</div>

<div class='mt-30 p-10 bottom-0 right-0 left-0 bg-black w-full absolute border-1 border-[#C89B3C]'></div>

  
</body>
</html>