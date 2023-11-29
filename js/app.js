const modal = document.querySelector(".fundoModalForm");
const buttonOpenModal = document.querySelector('.openModalButton');
const wpp_icon = document.querySelector('.wpp-icon');

buttonOpenModal.addEventListener('click', (e) => {
    e.preventDefault();

    modal.style.display = "flex";
});

document.addEventListener('scroll', () => {
    var posicaoY = window.pageYOffset;

    // console.log(posicaoY);
    
    if (posicaoY >= 0 && posicaoY <= 700 ) {

        document.getElementById('homePage').classList.add('active');
        document.getElementById('sobre').classList.remove('active');
        document.getElementById('beneficios').classList.remove('active');
        document.getElementById('historia').classList.remove('active');
        document.getElementById('contato').classList.remove('active');


    }else if (posicaoY < 2145 && posicaoY > 700) {

        document.getElementById('homePage').classList.remove('active');
        document.getElementById('sobre').classList.add('active');
        document.getElementById('beneficios').classList.remove('active');
        document.getElementById('historia').classList.remove('active');
        document.getElementById('contato').classList.remove('active');

    }else if (posicaoY > 1800 && posicaoY < 3000) {

        document.getElementById('homePage').classList.remove('active');
        document.getElementById('sobre').classList.remove('active');
        document.getElementById('beneficios').classList.add('active');
        document.getElementById('historia').classList.remove('active');
        document.getElementById('contato').classList.remove('active');

    }else if (posicaoY > 3000 && posicaoY < 3600) {

        document.getElementById('homePage').classList.remove('active');
        document.getElementById('sobre').classList.remove('active');
        document.getElementById('beneficios').classList.remove('active');
        document.getElementById('historia').classList.add('active');
        document.getElementById('contato').classList.remove('active');

    }else if (posicaoY > 3600) {

        document.getElementById('homePage').classList.remove('active');
        document.getElementById('sobre').classList.remove('active');
        document.getElementById('beneficios').classList.remove('active');
        document.getElementById('historia').classList.remove('active');
        document.getElementById('contato').classList.add('active');

    }
});

