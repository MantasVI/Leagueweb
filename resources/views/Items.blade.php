<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class='bg-[#0A1428] text-white h-2000 '>
  <div class="  flex p-5 bg-black justify-between fixed w-full z-50 ">
    <div class='flex items-center'> 
        <p class='ml-10' >Logo</p>
    </div>

    <div class='flex items-center'> 
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
</body>
</html>