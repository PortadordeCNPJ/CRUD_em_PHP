<?php

//switch para fazer a conecção com o banco de dados, recebendo os dados do Formulario 

switch ($_REQUEST["acao"]) {

    //Cada case desse switch pega o dado do respequitivo formulario e informações do banco

    case 'cadastrar':

        //Cada variavel dessa está recebendo o resultado de um input do formulario
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]); //md5 é um comando que troca os caracteres da senha para que ela fique mais segura dentro do banco
        $data_nascimento = $_POST["data_nasc"];

        //Variavel $sql que equivale aos dados da tabela usuarios dentro do banco "cadastro", O INSERT INTO insere nos valores de "name=''" dos formularios nas variavel do VALUES ...
        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ( '{$nome}', '{$email}', '{$senha}', '{$data_nascimento}')";

        //Variavel de resultado, passando pela conecção do arquivo config.php, após isso é feita a execução da query, que é o ($sql)
        $res = $conn->query($sql);

        //IF para testar se a variavel de resultado for TRUE, ela retorna uma mensagem em JavaScript de que foi cadastrado e redireciona para a página de listar usuarios. Onde ficara a lista de todos os usuarios cadastrados.
        if ($res == true) {
            echo "<script>alert('Cadastro com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {

            //ELSE que retorna um erro em que não foi possivel cadastrar um usuario e redireciona para a pagina de listar usuario
            echo "<script>alert('Não foi possivel cadastrar o usuario');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;

    //Case editar que também recebe os valores do banco que ficam armazenados de cada usuario
    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nascimento = $_POST["data_nasc"];

        //Aqui a varíavel recebe um comando de UPDATE que é usado para atualizar as informações que o usuario ja possui
        $sql = "UPDATE usuarios 
                SET nome='{$nome}',
                    email='{$email}',
                    senha='{$senha}',
                    data_nasc='{$data_nascimento}'
                                    
                WHERE
                    id=" . $_REQUEST["id"];
                //Aqui ele pega o id do usuario do formulario que ja foi salvo

        //Variavel de resultado, passando pela conecção do arquivo config.php, após isso é feita a execução da query, que é o ($sql)
        $res = $conn->query($sql);


        //IF para testar se a variavel de resultado for TRUE, ela retorna uma mensagem em JavaScript de que foi cadastrado e redireciona para a página de listar usuarios. Onde ficara a lista de todos os usuarios cadastrados.
        if ($res == true) {
            echo "<script>alert('Editado com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {

            //ELSE que retorna um erro em que não foi possivel cadastrar um usuario e redireciona para a pagina de listar usuario
            echo "<script>alert('Não foi possivel cadastrar o usuario');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'excluir':
        
        //Pega o ID do usuario cadastrado no banco e o Excuir
        $sql = "DELETE FROM usuarios WHERE id=" . $_REQUEST["id"];


        //Variavel de resultado, passando pela conecção do arquivo config.php, após isso é feita a execução da query, que é o ($sql)
        $res = $conn->query($sql);

        //IF para testar se a variavel de resultado for TRUE, ela retorna uma mensagem em JavaScript de que foi cadastrado e redireciona para a página de listar usuarios. Onde ficara a lista de todos os usuarios cadastrados.
        if ($res == true) {
            echo "<script>alert('Excuido com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {

            //ELSE que retorna um erro em que não foi possivel cadastrar um usuario e redireciona para a pagina de listar usuario
            echo "<script>alert('Não foi possivel cadastrar o usuario');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }

        break;

    default:
        # code...
        break;
}
