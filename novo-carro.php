<h1>NOVO CARRO</h1>
<form action="?page=salvar" method="POST"><!--SENHA SEMPRE METODO POST-->
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome Carro</label>
        <input type="text" name="nome_categoria_carro" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control">
    </div>
    <div class="mb-3">
        <label>Codigo Adiministrador</label>
        <input type="password" name="codigo" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>