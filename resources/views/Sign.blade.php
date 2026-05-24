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
    <div class='flex items-center justify-center'> 
        <a href='Home'><button class='p-3 bg-black border border-blue-900  rounded-sm  hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 '>Return</button></a>
    </div>

   

     <div class='flex items-center mr-10 gap-10'>
           <a href='Login'>  <button id='btn2' class='p-3 bg-black border border-blue-900  rounded-sm hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 '>log in </button></a>
        <select class='p-3 bg-black border border-blue-900  rounded-sm hover:border-[#C89B3C] hover:bg-[#0A1428] hover:transition-transform duration-300 outline-none'>
            <option  value='lt'>LT</option>
            <option  value='en'>EN</option>
        </select>
    </div>

</div>
        <div class='flex text-black items-center justify-center flex-col p-40 bg-[#C89B3C]'>
            <div class='items-center justify-center'>
                <p class='text-3xl font-bold mt-20 '>Sign Up Page! </p>
            </div>
        </div>
    <form method='POST' action='/Sign' >
        @csrf
        <div class='flex flex-col justify-center items-center  mt-10 border-2 border-[#C89B3C] w-[600px] mx-auto h-full  p-5'>
        
            
            
            <div class='flex flex-col items-center  mb-10'>
                <label class='mb-5 text-2xl font-bold'>email</label>
                <input class='w-[300px] outline-none border-2 border-[#C89B3C] p-2 hover:bg-black hover:transition-transform duration-300 ' type='text' name='email' placeholder='email'>   
                @error('email')
                <p class='text-red-600 mt-1'>{{$message}}</p>
                @enderror
            </div>
            
           

            <div class='flex flex-col items-center mb-10'> 
                <label class='mb-5 text-2xl font-bold'>password</label>
                <input class='w-[300px] outline-none border-2 border-[#C89B3C] p-2 hover:bg-black hover:transition-transform duration-300 ' type='password' name='password' placeholder='pass'>
                @error('password')
                <p class='text-red-600 mt-1'>{{$message}}</p>
                @enderror
            </div>

           

            <div class='flex flex-col items-center mb-10'> 
                <label class='mb-5 text-2xl font-bold'>username</label>
                <input class='w-[300px] outline-none border-2 border-[#C89B3C] p-2 hover:bg-black hover:transition-transform duration-300 ' type='text' name='username' placeholder='username'>
                @error('username')
                <p class='text-red-600 mt-1'>{{$message}}</p>
                @enderror
            </div>  
            
           
            <button class='border-2 border-[#C89B3C] mt-20 p-5 pl-10 pr-10 rounded-sm hover:border-[#C89B3C] hover:bg-black hover:transition-transform duration-300 ' type='submit'>Submit</button>
        </div>

    </form>
     <div class='mt-60 p-10 bottom-0 right-0 left-0 bg-black w-full absolute border-1 border-[#C89B3C]'></div>
</body>
</html>