const x = document.querySelector('#btn1');
const y = document.querySelector('#btn2');
const z = document.querySelector('option');
x.addEventListener('click',() =>{
console.log(x);
});

y.addEventListener('click',() => {
console.log(y);

});
 let pop;
z.addEventListener('click',() => {
   
    if(z.value === 'en')
        {
            console.log(1);
        } 
    else if(z ==='lt')
    {
        
        console.log(2);
    }
});