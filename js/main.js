document.addEventListener("DOMContentLoaded", ()=>{
    const home = document.querySelector('.home');
    if(home){
        new Splide( '.splide' ).mount();
    };
    new SimpleLightbox({elements: '.galerie a'});
});
