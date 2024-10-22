document.addEventListener('DOMContentLoaded', function () {
    var divListaNotas = document.getElementById('tabelaEditNotas');  

    // carrenggando dados com o AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('GET', './backend/listarNotasAlunos.php', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            console.log("Dados recebidos: ", xhr.responseText);
            divListaNotas.innerHTML = xhr.responseText;  
        } else {
            console.error('Erro ao carregar os dados.');
        }
    };
    xhr.onerror = function () {
        console.error('Erro na requisição AJAX.');
    };
    xhr.send();
});
