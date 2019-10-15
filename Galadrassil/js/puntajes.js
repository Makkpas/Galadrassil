const btn = document.querySelectorAll('.profile');

const modal = document.querySelector('.modal');
const backdrop = document.querySelector('.backdrop');
const pagina = document.querySelector('.pagina');

btn.forEach(btn => {
    btn.addEventListener('click', () => {
        modal.style.display = 'block';
        backdrop.style.display = 'block';

        pagina.classList.add('blur');
    });
});

backdrop.addEventListener('click', ()=>{
    modal.style.display = 'none';
    backdrop.style.display = 'none';

    pagina.classList.remove('blur');
});