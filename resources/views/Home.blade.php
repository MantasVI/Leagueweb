
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class='bg-[#0A1428] text-white overflow-x-hidden'> 
<div class="  flex p-5 bg-black justify-between fixed w-full z-50 ">
    
    <div class='flex items-center'> <a href='https://github.com/MantasVI'><p class='ml-10' >Githubas</p></a> </div>
   

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
        <p class='font-bold text-black text-6xl mt-10 mb-10'>Welcome to the League of Legends database!</p>
    </div>
    <div>
        <p class='text-black text-lg'>Here you can find information about champions, skins, and items in the game.</p>
    </div>

    
</div>

<div class='flex flex-col items-center justify-center mt-15 '>
    <div class='mt-10 hover:scale-105 transition-transform duration-300 shadow-md rounded-sm border border-[#C89B3C]'>
        <input class='text-[#C89B3C] bg-white w-150 p-5 rounded outline-none 'type='text' placeholder='Search'>
    </div>
</div>


<div class='flex items-center justify-center'>
    <div class='grid grid-cols-4 gap-10 mt-40 bg-black rounded-sm border-2 border-[#C89B3C] p-7'>
        <div class='relative rounded-xl bg-center bg-cover bg-[url("/public/images/League-of-Legends-12.jpg")] w-90 h-90 hover:scale-105 transition-transform duration-300 border-2 border-[#C89B3C]'  >

            <a href="Champions" class='absolute top-0 left-0 right-0 bottom-0'></a>
            <p class= 'absolute  bottom-5/100 left-1/2  -translate-x-1/2 -translate-y-5/100  font-bold text-3xl'>Champions </p>
        </div>
        <div class='relative rounded-xl bg-center bg-cover bg-[url("/public/images/Skins.png")] w-90 h-90 hover:scale-105 transition-transform duration-300 border-2 border-[#C89B3C]'>
            <a href="Skins"  class='absolute top-0 left-0 right-0 bottom-0'></a>
            <p class='absolute  bottom-5/100 left-1/2  -translate-x-1/2 -translate-y-5/100  font-bold text-3xl'>Skins</p>
        </div>
        <div class='relative rounded-xl bg-center bg-cover bg-[url("/public/images/Items.png")] w-90 h-90 hover:scale-105 transition-transform duration-300 border-2 border-[#C89B3C]'>
            <a href="Items" class='absolute top-0 left-0 right-0 bottom-0' ></a>
            <p class='absolute  bottom-5/100 left-1/2  -translate-x-1/2 -translate-y-5/100  font-bold text-3xl '>Items</p>
        </div>
        <div class='relative rounded-xl bg-right bg-cover bg-[url("/public/images/Sorcery.png")] w-90 h-90 hover:scale-105 transition-transform duration-300 border-2 border-[#C89B3C]'>
            <a href="Runes" class='absolute top-0 left-0 right-0 bottom-0'></a>
            <p  class='absolute  bottom-5/100 left-1/2  -translate-x-1/2 -translate-y-5/100  font-bold text-3xl '>Runes</p>
        </div>
        
    </div>
</div>

<div class=' mt-30 border-1 border-[#C89B3C]'>
    <div class='p-10 bg-black w-full absolute'>
       
</div>



</body>
</html>