const cardAll = Array.from(document.querySelectorAll('.card-acoes'));
const cardId = document.getElementById('card');
const active = document.querySelector('.active');
const card1 = document.querySelector('.um');


// evento de clique no cardId
cardId.addEventListener('click', () => {

    // chama as funções para modificar classes
    adicionarClasseOff();
    

    // verifica quais classes o cardId possui
    const classes = cardId.classList;
    console.log(classes);

    console.log(cardAll[1]); //arrey ve o card numero 1 entre 0, 1 e 2

    if (classes.contains('active')) {
        console.log('tem a classe active');
    } else {
        console.log('não tem a classe active');
    }
});

// função para esconder cards que não têm a classe active
function adicionarClasseOff() {
    cardAll.forEach((card) => {
        if (!card.classList.contains('active')) {
            card.style.display = "none"; // esconde o card
        }
    });
}

// função para adicionar ou remover a classe active
function adicionarClasseActive() {
    if (cardId.classList.contains('active')) {
        cardId.classList.remove('active');
    } else {
        cardId.classList.remove('off');
        cardId.classList.add('active');
    }
}


function cardClicado() {
    //indentifica o card clicado na tela, e apresenta num console.loi
    cardAll.forEach((cardAllf) => {
        cardAllf.addEventListener('click', function (event) {
            const clickedCard = event.target;

            const sectionListaNotas = document.getElementById('sectionListaNotas');
            console.log('Card clicado:', clickedCard);

            const classeClickedCard = clickedCard.classList;

            //se outro card além do card(clickedCard), tiver a classe active, remova -->
            cardAll.forEach((outroCard) =>{
                if(outroCard != clickedCard && outroCard.classList.contains('active')){
                    outroCard.classList.remove('active');
                }
            })

            cardAll.forEach((cardContemAC)=>{
                if(cardContemAC == clickedCard && cardContemAC.classList.contains('active')){
                    cardContemAC.classList.add('active');
                }
            })

            clickedCard.classList.add('active');

            const cardAllsection = document.querySelector('.container-sala');

            if(clickedCard.classList.contains('active') && clickedCard.classList.contains('um')){
                sectionListaNotas.style.display = 'flex';
                cardAllsection.style.display = 'flex';
                cardAllsection.style.flexDirection = 'none';
                card1.style.display = 'none';
            }
            else{
                sectionNotas.style.display = 'none';
            }
            adicionarClasseOff();
            console.log(classeClickedCard);
        });
    });
};

cardClicado();