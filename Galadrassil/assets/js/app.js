const menuNormal = document.getElementById('icon-menu1');
const menuSide = document.getElementById('icon-menu2');

const sidebar =document.querySelector('.sidebar');
const form =document.querySelector('.form');

menuNormal.addEventListener('click', ()=>{
    sidebar.style.display = 'block'
    form.classList.add('blur');
});

menuSide.addEventListener('click', ()=>{
    sidebar.style.display = 'none'
    sidebar.style.trasition = '0.4s'
    form.classList.remove('blur');
});