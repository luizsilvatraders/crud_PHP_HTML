<h1>EDITAR CARRO OU PEÇA</h1>
<?php
    $sql = "SELECT * FROM PC_carros WHERE id=" . $_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST"><!--SENHA SEMPRE METODO POST-->
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print$row->id;?>">
    <div class="mb-3">
        <label>Nome Carro/peça</label>
        <input type="text" name="nomepc" value="<?php print $row->nomepc; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao"  value="<?php print $row->descricao; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Codigo Adiministrador</label>
        <input type="password" name="codigo"  class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>