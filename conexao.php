<?php

    //CONEXÃO BANCO DE DADOS
    function connection(){
        $servername = "sql204.epizy.com";
        $username   = "epiz_26098380";
        $password   = "QOCxmRKbGOwa3";
        $database   = "epiz_26098380_sust_empresa";

        try { //TRATAMENTO DE EXCESSÕES - POSSIVEIS ERROS
        $conn = new PDO("mysql:host=$servername;dbname=$database; charset=utf8", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexão realizada com sucesso!!!";
        return $conn;

        } catch(PDOException $e) { //SE DER ERROS VEM PARA O CATCH E VAI MOSTRAR O TIPO DO ERRO
        echo "Conexão falhou! Erro: " . $e->getMessage();
        }
    }   

?>
