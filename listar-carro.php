<H1>LISTAR DE CARROS</H1>
<?php
    $sql = "SELECT * FROM PC_carros";

    $result = $conn->query($sql);

    $qtd = $result->num_rows;
    /*qtd recebe variavel result em linhas (num_rows)*/

if ($qtd > 0) {
    print "<table class= 'table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome Carro/Peça</th>";
    print "<th>Descrição</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $result->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nomepc . "</td>";
        print "<td>" . $row->descricao . "</td>";
        print"<td><button onclick= \"location.href='?page=editar&id=" . $row->id . "';\"class = 'btn btn-success'>Editar</button>

        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{false;}\"class = 'btn btn-danger'>Excluir</button>
        </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print"<p class = 'alert alert-danger'> 
    Não encontrou resultados! </p>";
    /*alerta que não foi posasivel encontar o carro ou peça*/
}
