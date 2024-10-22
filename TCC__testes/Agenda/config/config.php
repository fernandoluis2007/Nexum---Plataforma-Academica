<?php
    #Caminhos absolutos
    $dirInt="";
    define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$dirInt}");

    $bar=(substr($_SERVER['DOCUMENT_ROOT'], -1)=='/')?"":"/";
    /*O Ducument_Root é para nós podemos incluir arquivos, tipo o Include do PHP, e depedendo do sevidor esse document_root já vem por padão com uma / e dependendo do servidor ele não vem com a barra no fim,
    então esse trecho indetifica se o arquivo veio com a barra no final senão ele coloca uma barra no final!*/
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

    #Banco de Dados
    define('HOST', 'localhost');
    define('DB', 'plataforma_nexum');
    define('USER', 'root');
    define('PASS', '');

    #Incluir arquivos
    include(DIRREQ.'TCC__testes/Agenda/lib/composer/vendor/autoload.php');
    /*Sempre colocar diretório raiz!!!*/
