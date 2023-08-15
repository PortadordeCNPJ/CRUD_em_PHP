<?php

//switch para fazer a conecção com o banco de dados, recebendo os dados do Formulario 

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nascimento = $_POST["data_nasc"];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ( '{$nome}', '{$email}', '{$senha}', '{$data_nascimento}')";

        $res = $conn->query($sql);

        if($res==true){
            echo "<script>alert('Cadastro com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }else{
            echo "<script>alert('Não foi possivel cadastrar o usuario');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'editar':
        # code...
        break;
    case 'excluir':
        # code...
        break;

    default:
        # code...
        break;
}
