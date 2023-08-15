<h1>Listar Usuários</h1>
<?php
//puxa os dados da tabela usuarios para aqui.

$sql = "SELECT * FROM usuarios";

//resultado da conecção com o sql
$res = $conn->query($sql);


$qtd = $res->num_rows;

if ($qtd > 0) {
    echo "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<td>#</td>";
    print "<td>Nome</td>";
    print "<td>E-mail</td>";
    print "<td>Data de Nascimento</td>";
    print "</tr>";
    //traz todos os objetos que estão nas variaveis para uma row
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->data_nasc . "</td>";
        print "<td><button class='btn-success'>Editar</button>
        <button class='btn-danger'>Excluir</button> </td>";

            print "</tr>";
    }

    echo "</table>";
} else {
    echo "<p class'alert alert-danger'> Não encontrou resultados!</p>";
}
?>