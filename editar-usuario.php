<h1>Editar usuário</h1>

<?php

    /* Esse SELECT pega as informações do ID do usuario no banco e, imprime ela em cada input com o comando "value="<?php echo $row->NOME DA VARIAVEL; ?>"> */
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

    //Cada input com hidden, pega as informações do formulario sem que o usuário veja, o name="acao" é o responsável por levar as informações ao salvar-usuario.php
?>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->id; ?>">
    <div class="mb-3"> 
        <label for="nome">Nome</label>
        <input type="text" name="nome" required="required" class="form-control" id="nome" value="<?php echo $row->nome; ?>">
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" name="email" required="required" class="form-control" id="email" value="<?php echo $row->email; ?>"/>
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" name="senha" required="required" class="form-control" id="senha" required>
    </div>
    <div class="mb-3">
        <label for="data_nasc">Data de Nascimento</label>
        <input type="date" name="data_nasc" required="required" class="form-control" id="data_nasc" value="<?php echo $row->data_nasc?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>