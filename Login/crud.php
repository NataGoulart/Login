<?php
    include("conecta.php");

    $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    // Se clicou no botão INSERIR
    if(isset($_POST["inserir"]))
    {
        $comando = $pdo->prepare("INSERT INTO  alunos
        VALUE matricula=$matricula");
        $resultado = $comando->execute();
        header("location: cadastro.html");
    }
    if(isset($_POST["excluir"]))
    {
        $comando = $pdo->prepare("DELETE FROM alunos
     WHERE matricula=$matricula");
     $resultado = $comando->execute();
     header("location: cadastro.html"); 
    }
    if(isset($_POST["alterar"]))
    {
        $comando = $pdo->prepare("UPDATE alunos
        SET nome='$nome',idade=$idade WHERE matricula=$matricula");
        $resultado = $comando->execute();
        header("location: cadastro.html");
        
    }
    if(isset($_POST["listar"]))
    {
        
        $comando = $pdo->prepare("SELECT * FROM alunos");
        $resultado = $comando->execute();
        
        while ( $linha = $comando->fatch()) 
            $M = $linhas ["matricula"]; // Nome da Colula XAMPP
            $n = $linhas ["nome"];     // Nome da Colula XAMPP
            $i = $linhas ["idade"];   // Nome da Colula XAMPP
            echo("Matricula: $m Nome: $n Idade: $1 <br>");
    }
    
    