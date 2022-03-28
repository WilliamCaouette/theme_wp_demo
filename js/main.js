document.addEventListener("DOMContentLoaded", ()=>{
    const home = document.querySelector('.home');
    if(home){
        new Splide( '.splide' ).mount();
    };
    new SimpleLightbox({elements: '.galerie a'});
});
const entrevue = document.querySelector('.page-template-template-entrevues');

if(entrevue){

}


function showEntrevueType(type, btn){

    document.querySelectorAll('button').forEach(item=>{
        item.disabled = false;
    })
    btn.disabled = true;
    const entrevues = document.querySelectorAll(".entrevue");
    entrevues.forEach(entrevue => {
        if(type == 'all'){
            entrevue.style.display = 'flex';
        }
        else{
            switch (entrevue.dataset.type) {
                case type:
                        entrevue.style.display = 'flex';
                    break;
                        
                default:
                    entrevue.style.display = 'none';
                    break;
            }
            
        }
        
    });

    
}