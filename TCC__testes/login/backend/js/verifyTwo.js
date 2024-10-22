var escolhaAluno = document.getElementById('opcaoAluno');
var escolhaProfessor = document.getElementById('opcaoProfessor'); 
var containerProfessor = document.querySelector('.container-cadstro.off');
var containerAluno = document.querySelector('.container-cadstro.active');


//Ao clicar no elemento paragrafo Aluno, dispara um evento -->
escolhaAluno.addEventListener('click',()=>{
    verifiClasse();
    varfiExistemClasses();    
})



escolhaProfessor.addEventListener('click', adcionarClasse);

//Função que irá vereficar se o elemento paragrafo Aluno possui a classe Active, senão irá adiciona-lá!
function verifiClasse(){
    if(containerAluno.classList.contains('active')){
        console.log('já possui a classe active');
    }else{
        containerAluno.classList.remove('off')
        containerAluno.classList.add('active');
        console.log('classe adcionada');

        containerProfessor.classList.remove('active');
        containerProfessor.classList.add('off');
    }
}

function adcionarClasse(){
    if(containerAluno.classList.contains('active')){

        // parte para trocar classe do Aluno -->
        containerAluno.classList.remove('active');
        console.log('classe active removida de Aluno');
        containerAluno.classList.add('off');
        console.log('classe off adicionada para Aluno');

        // parte para trocar classe de Professor -->
        containerProfessor.classList.remove('off');
        containerProfessor.classList.add('active');
        console.log('classe adcionada')
    }
}

function varfiExistemClasses(){
    if(containerAluno.classList.contains('off')){
        
    }
    
}
