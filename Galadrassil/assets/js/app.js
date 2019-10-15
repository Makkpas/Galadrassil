// const menuNormal = document.getElementById('icon-menu1');
// const menuSide = document.getElementById('icon-menu2');
const menuNormalJardin= document.getElementById('icon-menu-jardin1');
const menuSideJardin = document.getElementById('icon-menu-jardin2');
const tree = document.getElementById('tree');
const care = document.getElementById('care');

const backdrop = document.querySelector('.backdrop');
const main = document.querySelector('.main');
const sidebar =document.querySelector('.sidebar');
const form =document.querySelector('.form');
const stick =document.querySelectorAll('.stick');
const cares = document.querySelectorAll('.care');



// menuNormal.addEventListener('click', ()=>{
//     sidebar.style.display = 'block'
//     form.classList.add('blur');
// });

// menuSide.addEventListener('click', ()=>{
//     sidebar.style.display = 'none'
//     sidebar.style.trasition = '0.4s'
//     form.classList.remove('blur');
// });

menuNormalJardin.addEventListener('click', ()=>{
    sidebar.style.display = 'block'
});

menuSideJardin.addEventListener('click', ()=>{
    sidebar.style.display = 'none'
    sidebar.style.trasition = '0.4s'
});

tree.addEventListener('click', ()=>{
    stick.forEach(stick=>{
        stick.style.display = 'flex';
    });
    cares.forEach(care=>{
        care.style.display = 'none';
    });
    backdrop.style.display = 'block';
    sidebar.style.display = 'none'
});

care.addEventListener('click', ()=>{
    cares.forEach(care=>{
        care.style.display = 'flex';
    });
    stick.forEach(stick=>{
        stick.style.display = 'none';
    });
    backdrop.style.display = 'block';
    sidebar.style.display = 'none'
});

backdrop.addEventListener('click', ()=>{
    stick.forEach(stick=>{
        stick.style.display = 'none';
    });
    cares.forEach(care=>{
        care.style.display = 'none';
    });

    sidebar.style.display = 'none'
    sidebar.style.trasition = '0.4s'
    backdrop.style.display = 'none';
});









