<?php

//switch para fazer a conecção com o banco de dados, recebendo os dados do Formulario 

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nascimento = $_POST["data_nascimento"];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nascimento) VALUES ( '{$nome}', '{$email}', '{$senha}', '{$data_nascimento}')";

        $res = $conn->query($sql);
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
