<?php

    $login = $_POST["login"]; // PEGA INPT
    $senha = $_POST["senha"];

    include("conecta.php"); // CONECTA COM BD

    $comando = $pdo->prepare("SELECT * FROM usuarios WHERE login= '$login' and senha='$senha' ");
    $resultado = $comando->execute();
    $n= 0;
    $admin = "n";
        
        while( $linha = $comando->fetch())
    {
        $n = 1;
        $admin = $linha["Admin"];

    }    

    if($n == 0)
    {
        header("Location: index.html" );
    }
    if($n == 1)
    {
        if($admin == "s")
        {
            header("Location: admin.html" );
        }
        else{
            header("Location: usuario.html" );
        }
    }
?>