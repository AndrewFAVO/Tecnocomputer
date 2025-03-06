(function(){
    const openButton = document.querySelector('.n_ficha');
    const menu = document.querySelector('.n_menu');
    const closeMenu = document.querySelector('.n_salida');

    openButton.addEventListener('click', ()=>{
        menu.classList.add('nav__link--show');
    });

    closeMenu.addEventListener('click', ()=>{
        menu.classList.remove('nav__link--show');
    });

    


})();