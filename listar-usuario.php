<h1>Listar Usuários</h1>
<?php
//puxa os dados da tabela usuarios para aqui.

$sql = "SELECT * FROM usuarios";

//resultado da conecção com o sql
$res = $conn->query($sql);

//A variavel $qtd é a quantidade de resultados, então ele ira pegar do resultados o número de linhas $num_rows
$qtd = $res->num_rows;


//IF se a quantidade de linhas for igual maior que 0 então ele mostra que há pessoas cadastradas no banco 
if ($qtd > 0) {

    //Esses comando são para que seja imprimido ma tela uma tabela. Então o comando "echo" e "print" servem para imprimir informações na tela, mesmo que sejam tags HTML
    echo "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<td>#</td>";
    print "<td>Nome</td>";
    print "<td>E-mail</td>";
    print "<td>Data de Nascimento</td>";
    print "</tr>";


    //traz todos os objetos que estão nas variaveis para uma linhas, usando a variavel de $row para isso, assim cada linha recebe o resultado de sua variavel
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->data_nasc . "</td>";

        //Aqui é passado um evento em JavaScript, assim toda vez que o botão de editar for pressionado ele levara para a tela de edição de usuario
        print "<td><button onclick=\"location.href='?page=editar&id=". $row->id ."';\" class='btn-success'>Editar</button>
        
        <button onclick=\"is(confirm('Tem certeza que deseja excuir?')){location.href='?page=salvar&acao=excluir&id=". $row->id ."'};\" class='btn-danger'>Excluir</button> </td>";
        //Aqui é passado um evento em JavaScript, assim toda vez que o botão de excluir for pressionado ele levara para a tela de exclusão de usuario
            print "</tr>";
    }

    echo "</table>";
} else {
    echo "<p class'alert alert-danger'> Não encontrou resultados!</p>";
}
?>