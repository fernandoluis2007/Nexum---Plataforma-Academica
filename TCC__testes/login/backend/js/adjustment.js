const inputProfs = document.getElementById('opcaoProfessor');
const formBox =document.querySelector('.box');
const listaOps = document.querySelector('.lista-opcao')

function verificacaoProf(){ 

    if(inputProfs.checked){
        formBox.style.overflow = 'auto';
        formBox.style.height = '80vh';
    }

}

inputProfs.addEventListener('change', ()=>{
    verificacaoProf()
});
   
