window.onload = ()=>{
    debbuger;

//Funcao do Modal
function iniciaModal(modalID) {
    debbuger;
    const modal = document.getElementById(modalID);
    if (modal) {

        modal.classList.add('ativa');
        console.log(modalID);
        modal.addEventListener('click', (e) => {
            if (e.target.id == modalID || e.target.className == 'fechar') {
                modal.classList.remove('ativa');
            }


        });


  };


}
const about = document.querySelector('.about');
about.addEventListener('click', () => iniciaModal('modal'));
    
};





  






