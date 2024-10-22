const checkAluno = document.getElementById('opcaoAluno');
const checkProf = document.getElementById('opcaoProfessor');
const listaOp = document.getElementById('formContainer');

const inputs = document.querySelectorAll('#formContainer input');
const headers = document.querySelectorAll('#formContainer h1');

function verificacaoCheck(){
    //se os dois cheackbox estiverem selecionados..
    if(checkAluno.checked && checkProf.checked){
        alert('Selecione apenas uma opção!')
        //ira enviar um alert, de forma como aviso!

        //desmacar automaticamente, os campos -->
        checkAluno.checked = false;
        checkProf.checked = false;

    }
    
            
}

// Adiciona eventos apenas se os elementos existirem
if (checkProf) {
    checkProf.addEventListener('change', () => {
        if (checkProf.checked) {
            console.log('ospProfessor');
            verificacaoCheck();            
            removeAtributes();
            profCampos();

        } else {
            if(checkProf.checked == false){
                console.log('Professor não está marcada');
                
            }
           
        }
    });
}

if (checkAluno) {
    checkAluno.addEventListener('change', () => {
        if (checkAluno.checked) {
            console.log('opsAluno');
            verificacaoCheck();
            
        } else {
            // Opcional: Limpar campos se a checkbox for desmarcada
            
        }
    });
}

//adicionar campos do professor e remover atributos do Aluno da checkBox -->
function removeAtributes(){
    document.querySelectorAll('.cadastro-itens.Aluno').forEach(function(item){
        item.remove();
    })
}



function profCampos(){
    document.querySelectorAll('.cadastro-itens.Professor').forEach(function(itemP){
        itemP.style.display = 'block';
    })  
}

function alunoCampos(){
    document.querySelector('.cadastro-itens.Aluno').forEach(function(itemL){
        itemL.style.display = 'block';
    })
}





/*
function addAtributes(){
    const cadastroItens = document.querySelector('.cadastro-itens');
    const textoItens = document.querySelector('.texto-itens');
    const inputIten = document.querySelector('.inputIten')

    const div = document.createElement('div');
    div.classList.add('cadastroItens');

    const h1 = document.createElement('h1');
    h1.classList.add('textoItens');
    h1.textContent = 'Nome do Professor';

    const input = document.createElement('input');
    input.classList.add('inputIten');
    input.setAttribute('id', 'nomeProfessor');
    
    


    listaOp.appendChild(div);
    div.appendChild(h1);
    div.appendChild(input);
}
*/