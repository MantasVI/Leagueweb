const Fighters = document.querySelector('#Fighter');
const Assassins = document.querySelector('#Assassin');
const Mages = document.querySelector('#Mage');
const Marksmen = document.querySelector('#Marksman');
const Supports = document.querySelector('#Support');
const Tanks = document.querySelector('#Tank');
const all = document.querySelector('#All');
const inputas = document.querySelector('.inputas');


    inputas.addEventListener('input',() =>{
       let x=inputas.value.toLowerCase();
        document.querySelectorAll('.champ').forEach((card)=>{ 
         let y= card.querySelector('.textas').innerHTML.toLowerCase();
           if(y.includes(x))
           {
            card.style.display = 'block'
           }
           else
           {
             card.style.display = 'none'
           }
        });


    });


function tipas(hello){
    
document.querySelectorAll('.champ').forEach((card)=>{
const tags = card.dataset.tags;
   if(tags.includes(hello))
   {
    card.style.display = 'block'
   }
   else
   {
    card.style.display = 'none'
   }

});


}
function allas(){
   document.querySelectorAll('.champ').forEach((champ) =>{
    champ.style.display='block';
   }); 
}

all.addEventListener('click',()=>{
    allas();
});

Fighters.addEventListener('click',()=>{
    tipas(Fighters.innerHTML)
});
Assassins.addEventListener('click',()=>{
        tipas(Assassins.innerHTML)

});

Mages.addEventListener('click',()=>{
    tipas(Mages.innerHTML)
});

Marksmen.addEventListener('click',()=>{
   
    tipas(Marksmen.innerHTML)
});

Supports.addEventListener('click',()=>{
    
        tipas(Supports.innerHTML)
});

Tanks.addEventListener('click',()=>{
    tipas(Tanks.innerHTML)
 
});