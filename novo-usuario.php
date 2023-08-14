 <h1>Novo usuário</h1>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" name="nome" required="required" class="form-control" id="nome">
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" name="email" required="required" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" name="senha" required="required" class="form-control" id="senha">
    </div>
    <div class="mb-3">
        <label for="data_nascimento">Data de Nascimento</label>
        <input type="date" name="data_nascimento" required="required" class="form-control" id="data_nascimento">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>