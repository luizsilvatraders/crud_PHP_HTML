<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nomePc = $_POST["nomepc"];
        $descricao = $_POST["descricao"];
        $codigo = md5($_POST["codigo"]);/*md5 tratamento de senha não esposta*/

        $sql = "INSERT INTO PC_carros (nomepc,descricao,codigo) 
        values ('{$nomePc}','{$descricao}','{$codigo}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print"<script>alert('Cadastro com sucesso');</script>";
            print"<script>location.href='?page=listar'</script>";
        } else {
            print"<script>alert('Não foi possível cadastrar');</script>";
            print"<script>location.href='?page=listar'</script>";
        }
        break;

    case 'editar':
        $nomePc = $_POST["nomepc"];
        $descricao = $_POST["descricao"];
        $codigo = md5($_POST["codigo"]);

        $sql = "UPDATE PC_carros SET
                    nomepc= '{$nomePc}',
                    descricao= '{$descricao}',
                    codigo='{$codigo}'
                WHERE 
                id= " . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print"<script>alert('Editado com sucesso');</script>";
            print"<script>location.href='?page=listar'</script>";
        } else {
            print"<script>alert('Não foi possível Editar');</script>";
            print"<script>location.href='?page=listar'</script>";
        }
        break;
        # code...
    case 'excluir':
        $sql = "DELETE FROM PC_carros WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print"<script>alert('Excluído com sucesso');</script>";
            print"<script>location.href='?page=listar'</script>";
        } else {
            print"<script>alert('Não foi possível Excluir');</script>";
            print"<script>location.href='?page=listar'</script>";
        }

        break;
}
