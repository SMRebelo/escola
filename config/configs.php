<?php

// SERVIDOR 
define("DB_HOST", "localhost");     

// UTILiZADOR DA BASE DE DADOS 
define("DB_USER", "root");  

// PALAVRA-PASS DO UTILIZADOR DA BASE DE DADOS 
define("DB_PASS","");      

 // NOME DA BASE DE DADOS
define("DB_NAME", "escola");     

// LINK PARA A BASE DE DADOS
define("DSN_USE", "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME);      

// CONFIGURAÇÃO DOS ERROS DA LIGAÇÃO Á BASE DE DADOS 
define("CONFIG_OP", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// LIGAÇÃO À BASE DE DADOS 
function ligarBD(){
    try{
        $conn = new PDO(DSN_USE, DB_USER, DB_PASS); // LIGAR À BASE DE DADOS 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //echo "Ligação efectuada com sucesso";
    }

    catch(PDOException $e){
        echo "Ligação falhou" . $e->getMessage();
    }

    return $conn ;
    }

?>