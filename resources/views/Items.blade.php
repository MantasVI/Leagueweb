<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class='bg-[#0A1428] text-white overflow-x-hidden italic  '>
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

<div class='flex text-black items-center justify-center flex-col p-50 bg-[#C89B3C]'>
    <div class='flex-col  items-center justify-center' >
        <p class='font-bold text-black text-center text-6xl mt-10 mb-10'>What are items?</p> 
        <p class='text-black text-center text-lg'>items are equipment that champions buy during a match using gold earned from kills, minions, and objectives. 
            Items make champions stronger by granting stats such as damage, health, armor, magic power, attack speed, and movement speed, and many also provide special passive or active effects like healing, shields, slows, or bonus damage.
             Different champions build different items depending on their role and the situation, making item builds an important part of the game’s strategy.</p>
    </div>
  

    
</div>

<hr class="border-1 ml-20 mr-20 border-[#C89B3C]  w-90%">
<div class='flex justify-center items-center p-40 mt-30 '>    
     
 <p class='text-3xl font-bold '>Here you can find information about all the champions in the game, including their abilities, lore, and tips! </p>
</div>
<hr class="border-1 ml-20 mr-20 border-[#C89B3C] mt-30 w-90%">

<div class='flex-col justify-center items-center  mt-40 border-1 border-[#C89B3C] ml-30 mr-30 mb-30 bg-black'>

    <div class='flex justify-center items-center mt-20 '>    
    <p class='text-xl font-bold '>Filter Champions by type:</p>
    </div>

    <div class='flex justify-center items-center gap-20 mt-10'>
        
        <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Fighters</button>
        <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Assassins</button>
        <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Mages</button>
        <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Marksmen</button>
        <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Supports</button>
        <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Tanks</button>

    </div>


    <div class='flex justify-center items-center  mt-20'>    
    <p class='text-xl font-bold '>Filter Champions by Role:</p>
    </div>
    <div class='flex justify-center items-center gap-20 mt-20 mb-20'>
        
    <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Top</button>
    <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Mid</button>
    <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Jungle</button>
    <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>ADC</button>
    <button class='p-5 border rounded-sm border-[#C89B3C]  hover:bg-[#0A1428] hover:transition-transform duration-400'>Support</button>
    

    </div>
 </div>
<div class='flex-col justify-center items-center '>
   <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mt-30 w-90%">

   <div class='flex  items-center justify-center mt-30 mb-30 '>
    
    <p class='text-[#C89B3C] text-6xl italic'>Starter / Basic Items</p>

   </div>
    <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mb-30 w-90%">
    <div class='grid  grid-cols-9 gap-10 gap-y-20 p-15 ml-10 mr-10 border-2 rounded-sm border-[#C89B3C] bg-black  place-items-center mx-auto '>
       @php $uniqueItems = collect($items['data'])->unique('name') ->values() ->all(); 
        $excluded = ['Gunmetal Greaves','Cappa Juice'] ;   @endphp

       @foreach ($uniqueItems as $item)
        @if($item['maps']['11'] == true && ($item['gold']['purchasable'] == true) && (!in_array($item['name'],$excluded)) && ($item['gold']['total']>=250 && $item['gold']['total']<=450 ))
  
            <div class='relative group  cursor-pointer hover:scale-105 transition-transform duration-200 border-2 rounded-sm border-[#C89B3C] hover:z-50 '>
                <img  class='w-full h-[150px] object-cover rounded '    src="{{ $url . $item['image']['full'] }}" >
                <p class='absolute -bottom-10 opacity-100 group-hover:opacity-0  hover:transition-opacity duration-400 font-bold p-2 w-[200px] z-10  '> <b class='text-white'>{{ $item['name'] }}</b></p>
                <p class='absolute top-40 -left-20 opacity-0 group-hover:opacity-90 text-[#C89B3C] pointer-events-none text-xl hover:transition-opacity duration-400 font-bold p-2  text-shadow-lg border-2 border-[#C89B3C] z-10 bg-black w-[300px]'> <b class='text-white'>{{ $item['name'] }}</b> <br> Gold Worth : {{$item['gold']['total']}} <br> Description : {{strip_tags($item['description']) }}</p>
            </div>
        @endif

        @endforeach
    </div>
</div>



<div class='flex-col justify-center items-center '>
    <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mt-30 w-90%">

   <div class='flex  items-center justify-center mt-30 mb-30 '>
    
    <p class='text-[#C89B3C] text-6xl italic'>Epic Items</p>

   </div>
    <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mb-30 w-90%">
    <div class='grid grid-cols-9 gap-10 gap-y-20 p-15 ml-10 mr-10 border-2 rounded-sm border-[#C89B3C] bg-black  place-items-center mx-auto'>
        @php $uniqueItems = collect($items['data'])->unique('name') ->values() ->all(); 
        $excluded = ['Gunmetal Greaves','Cappa Juice','Watchful Wardstone',"Mejai's Soulstealer","Shattered Armguard"] ;   @endphp
    
   

       @foreach ($uniqueItems as $item)
        @if($item['maps']['11'] == true && (!in_array('Boots', $item['tags']))  && (!in_array($item['name'],$excluded))  && ($item['gold']['purchasable'] == true) && ($item['gold']['total']>=600 && $item['gold']['total']<=1600 ) )
  
        
                    
            
            <div class='relative group  cursor-pointer hover:scale-105 transition-transform duration-200 border-2 rounded-sm border-[#C89B3C] hover:z-50 '>
                <img  class='w-full h-[150px] object-cover rounded '    src="{{ $url . $item['image']['full'] }}" >
                <p class='absolute -bottom-10 opacity-100 group-hover:opacity-0  hover:transition-opacity duration-400 font-bold p-2 w-[200px] z-10  '> <b class='text-white'>{{ $item['name'] }}</b></p>
                <p class='absolute top-40 -left-20 opacity-0 group-hover:opacity-90 text-[#C89B3C] pointer-events-none text-xl hover:transition-opacity duration-400 font-bold p-2  text-shadow-lg border-2 border-[#C89B3C] z-10 bg-black w-[300px]'> <b class='text-white'>{{ $item['name'] }}</b> <br> Gold Worth : {{$item['gold']['total']}} <br> Description : {{strip_tags($item['description']) }}</p>
            </div>
        @endif

        @endforeach
    </div>
</div>


<div class='flex-col justify-center items-center '>
  <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mt-30 w-90%">

   <div class='flex  items-center justify-center mt-30 mb-30 '>
    
    <p class='text-[#C89B3C] text-6xl italic'>Legendary Items</p>

   </div>
    <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mb-30 w-90%">
    <div class='grid grid-cols-9 gap-10 gap-y-20 p-15 ml-10 mr-10 border-2 rounded-sm border-[#C89B3C] bg-black  place-items-center mx-auto'>
        @php 
    $excluded = ['Gunmetal Greaves','Cappa Juice','Watchful Wardstone','Vigilant Wardstone','Verdant Barrier',"Seeker's Armguard","Shattered Armguard",'Trailblazer',"Anathema's Chains"];   
    $IncludedTags = ['Armor', 'ArmorPenetration', 'AttackSpeed', 'Aura', 'Consumable', 'CooldownReduction', 'CriticalStrike', 'Damage', 'GoldPer', 'Health', 'HealthRegen', 'Lane', 'LifeSteal', 'MagicPenetration', 'Mana', 'ManaRegen', 'NonbootsMovement', 'OnHit', 'SpellBlock', 'SpellDamage', 'Stealth', 'Tenacity', 'Trinket', 'Vision', 'Active', 'AbilityHaste', 'Slow', 'SpellVamp'];
    $preferredIds = ['8020','6617','3109','6620','3050','323075','3107','3119','3190','3222',"2065","6616","6657","3146","6621","3504","3003","3110","4005", "3004","3152","3599"];
    @endphp

    @foreach(collect($items['data']) as $id => $item)
        @if($item['maps']['11'] == true &&  empty($item['into'] ?? []) && $item['gold']['purchasable'] == true && $item['gold']['total'] >= 1500 &&  $item['gold']['total'] <= 4000 && !empty(array_intersect($item['tags'], $IncludedTags)) && !in_array('Boots', $item['tags']) && !in_array($item['name'], $excluded) &&   (!collect($preferredIds)->contains(fn($pid) => collect($items['data'])->has($pid) && $items['data'][$pid]['name'] == $item['name']) || in_array($id, $preferredIds)) )
 
           
                
            <div class='relative group  cursor-pointer hover:scale-105 transition-transform duration-200 border-2 rounded-sm border-[#C89B3C] hover:z-50 '>
                <img  class='w-full h-[150px] object-cover rounded '    src="{{ $url . $item['image']['full'] }}" >
                <p class='absolute -bottom-10 opacity-100 group-hover:opacity-0  hover:transition-opacity duration-400 font-bold p-2 w-[200px] z-10  '> <b class='text-white'>{{ $item['name'] }}</b></p>
                <p class='absolute top-40 -left-20 opacity-0 group-hover:opacity-90 text-[#C89B3C] pointer-events-none text-xl hover:transition-opacity duration-400 font-bold p-2  text-shadow-lg border-2 border-[#C89B3C] z-10 bg-black w-[300px]'> <b class='text-white'>{{ $item['name'] }}</b> <br> Gold Worth : {{$item['gold']['total']}} <br> Description : {{strip_tags($item['description']) }}</p>
            </div>
        @endif

        @endforeach
    </div>
</div>

<div class='flex-col justify-center items-center '>
  <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mt-30 w-90%">

   <div class='flex  items-center justify-center mt-30 mb-30 '>
    
    <p class='text-[#C89B3C] text-6xl italic'>Boots </p>

   </div>
    <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mb-30 w-90%">
    <div class='grid  grid-cols-9 gap-10 gap-y-20 p-15 ml-10 mr-10 mb-40 border-2 rounded-sm border-[#C89B3C] bg-black  place-items-center mx-auto'>
        @foreach ($items['data'] as $item)
        @if($item['maps']['11'] == true)
        @if(in_array('Boots', $item['tags']))
        
                    
            
            <div class='relative group  cursor-pointer hover:scale-105 transition-transform duration-200 border-2 rounded-sm border-[#C89B3C] hover:z-50 '>
                <img  class='w-full h-[150px] object-cover rounded '    src="{{ $url . $item['image']['full'] }}" >
                <p class='absolute -bottom-10 opacity-100 group-hover:opacity-0  hover:transition-opacity duration-400 font-bold p-2 w-[200px] z-10  '> <b class='text-white'>{{ $item['name'] }}</b></p>
                <p class='absolute top-40 -left-20 opacity-0 group-hover:opacity-90 text-[#C89B3C] pointer-events-none text-xl hover:transition-opacity duration-400 font-bold p-2  text-shadow-lg border-2 border-[#C89B3C] z-10 bg-black w-[300px]'> <b class='text-white'>{{ $item['name'] }}</b> <br> Gold Worth : {{$item['gold']['total']}} <br> Description : {{strip_tags($item['description']) }}</p>
            </div>
            @endif   @endif

        @endforeach
    </div>
</div>


<div class='flex-col justify-center items-center '>
   <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mt-30 w-90%">

   <div class='flex  items-center justify-center mt-30 mb-30 '>
    
    <p class='text-[#C89B3C] text-6xl italic'>Arena Items</p>

   </div>
    <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mb-30 w-90%">
    <div class='grid grid-cols-9 gap-y-20 gap-10 p-15 ml-10 mr-10 border-2 rounded-sm border-[#C89B3C] bg-black  place-items-center mx-auto'>
        @php 
    $excluded = ['Gunmetal Greaves','Cappa Juice','Watchful Wardstone','Vigilant Wardstone','Verdant Barrier',"Seeker's Armguard","Shattered Armguard",'Trailblazer',"Anathema's Chains"];   
    $IncludedTags = ['Armor', 'ArmorPenetration', 'AttackSpeed', 'Aura', 'Consumable', 'CooldownReduction', 'CriticalStrike', 'Damage', 'GoldPer', 'Health', 'HealthRegen', 'Lane', 'LifeSteal', 'MagicPenetration', 'Mana', 'ManaRegen', 'NonbootsMovement', 'OnHit', 'SpellBlock', 'SpellDamage', 'Stealth', 'Tenacity', 'Trinket', 'Vision', 'Active', 'AbilityHaste', 'Slow', 'SpellVamp'];
    $preferredIds = ['8020','6617','3109','6620','3050','323075','3107','3119','3190','3222',"2065","6616","6657","3146","6621","3504","3003","3110","4005", "3004","3152","3599"];
    @endphp

    @foreach(collect($items['data']) as $id => $item)
        @if($item['maps']['30'] == true && $item['maps']['11'] == false &&  empty($item['into'] ?? []) && $item['gold']['purchasable'] == true && ($item['gold']['total'] == 500 ||  $item['gold']['total'] == 2000) && !empty(array_intersect($item['tags'], $IncludedTags)) && !in_array('Boots', $item['tags']) && !in_array($item['name'], $excluded) &&   (!collect($preferredIds)->contains(fn($pid) => collect($items['data'])->has($pid) && $items['data'][$pid]['name'] == $item['name']) || in_array($id, $preferredIds)) )
 
           
                
            <div class='relative group  cursor-pointer hover:scale-105 transition-transform duration-200 border-2 rounded-sm border-[#C89B3C] hover:z-50 '>
                <img  class='w-full h-[150px] object-cover rounded '    src="{{ $url . $item['image']['full'] }}" >
                <p class='absolute -bottom-10 opacity-100 group-hover:opacity-0  hover:transition-opacity duration-400 font-bold p-2 w-[200px] z-10  '> <b class='text-white'>{{ $item['name'] }}</b></p>
                <p class='absolute top-40 -left-20 opacity-0 group-hover:opacity-90 text-[#C89B3C] pointer-events-none text-xl hover:transition-opacity duration-400 font-bold p-2  text-shadow-lg border-2 border-[#C89B3C] z-10 bg-black w-[300px]'> <b class='text-white'>{{ $item['name'] }}</b> <br> Gold Worth : {{$item['gold']['total']}} <br> Description : {{strip_tags($item['description']) }}</p>
            </div>
        @endif

        @endforeach
    </div>
</div>

<div class='flex-col justify-center items-center '>
   <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mt-30 w-90%">

   <div class='flex  items-center justify-center mt-30 mb-30 '>
    
    <p class='text-[#C89B3C] text-6xl italic'>Prismatic Arena Items</p>

   </div>
    <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mb-30 w-90%">
    <div class='grid grid-cols-9 gap-10 gap-y-20 p-15 ml-10 mr-10 border-2 rounded-sm border-[#C89B3C] bg-black  place-items-center mx-auto'>
        @php 
    $excluded = ['Gunmetal Greaves','Cappa Juice','Watchful Wardstone','Vigilant Wardstone','Verdant Barrier',"Seeker's Armguard","Shattered Armguard",'Trailblazer',"Anathema's Chains"];   
    $IncludedTags = ['Armor', 'ArmorPenetration', 'AttackSpeed', 'Aura', 'Consumable', 'CooldownReduction', 'CriticalStrike', 'Damage', 'GoldPer', 'Health', 'HealthRegen', 'Lane', 'LifeSteal', 'MagicPenetration', 'Mana', 'ManaRegen', 'NonbootsMovement', 'OnHit', 'SpellBlock', 'SpellDamage', 'Stealth', 'Tenacity', 'Trinket', 'Vision', 'Active', 'AbilityHaste', 'Slow', 'SpellVamp'];
    $preferredIds = ['8020','6617','3109','6620','3050','323075','3107','3119','3190','3222',"2065","6616","6657","3146","6621","3504","3003","3110","4005", "3004","3152","3599"];
    @endphp

    @foreach(collect($items['data']) as $id => $item)
        @if($item['maps']['30'] == true && $item['maps']['11'] == false &&  empty($item['into'] ?? []) && $item['gold']['purchasable'] == true && ($item['gold']['total'] == 1000) && !empty(array_intersect($item['tags'], $IncludedTags)) && !in_array('Boots', $item['tags']) && !in_array($item['name'], $excluded) &&   (!collect($preferredIds)->contains(fn($pid) => collect($items['data'])->has($pid) && $items['data'][$pid]['name'] == $item['name']) || in_array($id, $preferredIds)) )
 
           
                
            <div class='relative group  cursor-pointer hover:scale-105 transition-transform duration-200 border-2 rounded-sm border-[#C89B3C] hover:z-50 '>
                <img  class='w-full h-[150px] object-cover rounded '    src="{{ $url . $item['image']['full'] }}" >
                <p class='absolute -bottom-10 opacity-100 group-hover:opacity-0  hover:transition-opacity duration-400 font-bold p-2 w-[200px] z-10  '> <b class='text-white'>{{ $item['name'] }}</b></p>
                <p class='absolute top-40 -left-20 opacity-0 group-hover:opacity-90 text-[#C89B3C] pointer-events-none text-xl hover:transition-opacity duration-400 font-bold p-2  text-shadow-lg border-2 border-[#C89B3C] z-10 bg-black w-[300px]'> <b class='text-white'>{{ $item['name'] }}</b> <br> Gold Worth : {{$item['gold']['total']}} <br> Description : {{strip_tags($item['description']) }}</p>
            </div>
        @endif

        @endforeach
    </div>
</div>


<div class='flex-col justify-center items-center '>
   <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mt-30 w-90%">

   <div class='flex  items-center justify-center mt-30 mb-30 '>
    
    <p class='text-[#C89B3C] text-6xl italic'>Aram Starter Items</p>

   </div>
    <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mb-30 w-90%">
    <div class='grid grid-cols-5  p-15 ml-10 mr-10 border-2 rounded-sm border-[#C89B3C] bg-black  place-items-center mx-auto'>
        @php
        $IncludedTags = ['Lane','Consumable'];
        $excluded = ['Long Sword','Health Potion',"Doran's Shield","Doran's Ring",'Elixir of Iron','Elixir of Sorcery','Elixir of Wrath',"Doran's Blade",'Refillable Potion','Scarecrow Effigy',"Kalista's Black Spear"];
        @endphp
    
   

       @foreach ($items['data'] as $item)
        @if($item['maps']['12'] == true  &&  ($item['gold']['purchasable'] == true) && !empty(array_intersect($item['tags'], $IncludedTags)) && !in_array($item['name'], $excluded) && $item['gold']['total'] <= 950 ) 
            
            <div class='relative group  cursor-pointer hover:scale-105 transition-transform duration-200 border-2 rounded-sm border-[#C89B3C] hover:z-50 '>
                <img  class='w-full h-[150px] object-cover rounded '    src="{{ $url . $item['image']['full'] }}" >
                <p class='absolute -bottom-10 opacity-100 group-hover:opacity-0  hover:transition-opacity duration-400 font-bold p-2 w-[200px] z-10  '> <b class='text-white'>{{ $item['name'] }}</b></p>
                <p class='absolute top-40 -left-20 opacity-0 group-hover:opacity-90 text-[#C89B3C] pointer-events-none text-xl hover:transition-opacity duration-400 font-bold p-2  text-shadow-lg border-2 border-[#C89B3C] z-10 bg-black w-[300px]'> <b class='text-white'>{{ $item['name'] }}</b> <br> Gold Worth : {{$item['gold']['total']}} <br> Description : {{strip_tags($item['description']) }}</p>
            </div>
            @endif  

        @endforeach
    </div>
</div>


<div class='flex-col justify-center items-center '>
   <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mt-30 w-90%">

   <div class='flex  items-center justify-center mt-30 mb-30 '>
    
    <p class='text-[#C89B3C] text-6xl italic'>Consumables</p>

   </div>
    <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mb-30 w-90%">
    <div class='grid grid-cols-6 gap-10 p-15 ml-10 mr-10 border-2 rounded-sm border-[#C89B3C] bg-black  place-items-center mx-auto'>
        @php $uniqueItems = collect($items['data'])->unique('name') ->values() ->all(); 
        $preferredIds = ["3599"];
        $excluded = ["Corrupting Potion",'Cappa Juice'] ;   
        @endphp
    
   

       @foreach ($uniqueItems as $item)
        @if($item['maps']['12'] == true && (in_array('Consumable', $item['tags']))  && (!in_array($item['name'],$excluded))  && ($item['gold']['purchasable'] == true) ) 
            
            <div class='relative group  cursor-pointer hover:scale-105 transition-transform duration-200 border-2 rounded-sm border-[#C89B3C] hover:z-50 '>
                <img  class='w-full h-[150px] object-cover rounded '    src="{{ $url . $item['image']['full'] }}" >
                <p class='absolute -bottom-10 opacity-100 group-hover:opacity-0  hover:transition-opacity duration-400 font-bold p-2 w-[200px] z-10  '> <b class='text-white text-center'>{{ $item['name'] }}</b></p>
                <p class='absolute top-40 -left-20 opacity-0 group-hover:opacity-90 text-[#C89B3C] pointer-events-none text-xl hover:transition-opacity duration-400 font-bold p-2  text-shadow-lg border-2 border-[#C89B3C] z-10 bg-black w-[300px]'> <b class='text-white'>{{ $item['name'] }}</b> <br> Gold Worth : {{$item['gold']['total']}} <br> Description : {{strip_tags($item['description']) }}</p>
            </div>
            @endif  

        @endforeach
    </div>
</div>


<div class='flex-col justify-center items-center '>
   <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mt-30 w-90%">

   <div class='flex  items-center justify-center mt-30 mb-30 '>
    
    <p class='text-[#C89B3C] text-6xl italic'>Trinkets</p>

   </div>
    <hr class="border-1 ml-20 mr-20 border-[#C89B3C] mb-30 w-90%">
    <div class='grid  grid-cols-4 gap-10 p-15 ml-10 mr-10 mb-40 border-2 rounded-sm border-[#C89B3C] bg-black  place-items-center mx-auto'>
        @foreach ($items['data'] as $item)
        @if($item['maps']['11'] == true)
        @if(in_array('Trinket', $item['tags']))
        
                    
            
           <div class='relative group  cursor-pointer hover:scale-105 transition-transform duration-200 border-2 rounded-sm border-[#C89B3C] hover:z-50 '>
                <img  class='w-full h-[150px] object-cover rounded '    src="{{ $url . $item['image']['full'] }}" >
                <p class='absolute -bottom-10 opacity-100 group-hover:opacity-0  hover:transition-opacity duration-400 font-bold p-2 w-[200px] z-10  '> <b class='text-white text-center'>{{ $item['name'] }}</b></p>
                <p class='absolute top-40 -left-20 opacity-0 group-hover:opacity-90 text-[#C89B3C] pointer-events-none text-xl hover:transition-opacity duration-400 font-bold p-2  text-shadow-lg border-2 border-[#C89B3C] z-10 bg-black w-[300px]'> <b class='text-white'>{{ $item['name'] }}</b> <br> Gold Worth : {{$item['gold']['total']}} <br> Description : {{strip_tags($item['description']) }}</p>
            </div>
            @endif   @endif

        @endforeach
    </div>
</div>


<div class=' mt-100 border-1 border-[#C89B3C]'>
    <div class='p-10 bg-black w-full absolute'>
</div>

</body>
</html>