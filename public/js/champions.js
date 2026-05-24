const Fighters = document.querySelector('#Fighters');
const Assassins = document.querySelector('#Assassins');
const Mages = document.querySelector('#Mages');
const Marksmen = document.querySelector('#Marksmen');
const Supports = document.querySelector('#Supports');
const Tanks = document.querySelector('#Tanks');

Fighters.addEventListener('click',()=>{
    console.log(Fighters.innerHTML);
});
Assassins.addEventListener('click',()=>{
    console.log(Assassins);
});

Mages.addEventListener('click',()=>{
    console.log(Mages);
});

Marksmen.addEventListener('click',()=>{
    console.log(Marksmen);
});

Supports.addEventListener('click',()=>{
    console.log(Supports);
});

Tanks.addEventListener('click',()=>{
    console.log(Tanks);
});