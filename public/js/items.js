const basic = document.querySelector('#Starter');
const epic = document.querySelector('#Epic');
const legendary = document.querySelector('#Legendary');
const boots = document.querySelector('#Boots');
const arena = document.querySelector('#Arena');
const prismatic = document.querySelector('#Prismatics');
const aram = document.querySelector('#Aram');
const consumable = document.querySelector('#Consumables');
const trinket = document.querySelector('#Trinkets');
const all = document.querySelector('#All');

const inputas = document.querySelector('.inputas');

inputas.addEventListener('input',()=>{
    let x = inputas.value.toLowerCase();
    document.querySelectorAll('.verte').forEach((value) =>{
      let  y=value.querySelector('.vardas').innerHTML.toLowerCase();
        if(y.includes(x))
        {
            value.style.display= 'block';
        }
        else
        {
             value.style.display= 'none';
        }
    });
});

function listas(id){
    
    document.querySelectorAll('.verte').forEach((value)=>{
       let x = value.dataset.tag;
       
       if(x.trim().includes(id.trim().toLowerCase()))
       {
        value.style.display = 'block';
       }
       else
       {
        value.style.display= 'none';
       }
    });
}
function visi()
{
     document.querySelectorAll('.verte').forEach((value)=>{
     
        value.style.display='block';
    });
}

basic.addEventListener('click',()=>{
   listas(basic.innerHTML);
});

epic.addEventListener('click',()=>{
     listas(epic.innerHTML);
});

legendary.addEventListener('click',()=>{
     listas(legendary.innerHTML);
});

arena.addEventListener('click',()=>{
     listas(arena.innerHTML);
});

boots.addEventListener('click',()=>{
     listas(boots.innerHTML);
});

prismatic.addEventListener('click',()=>{
     listas(prismatic.innerHTML);
});

aram.addEventListener('click',()=>{
     listas(aram.innerHTML);
});

consumable.addEventListener('click',()=>{
     listas(consumable.innerHTML);
});

trinket.addEventListener('click',()=>{
     listas(trinket.innerHTML);
});

all.addEventListener('click',()=>{
    visi();
});

