<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome_raca"];
        $porte = $_POST["porte_raca"];
        
        $sql = "INSERT INTO racas (nome_raca, porte_raca) VALUES ('{$nome}', '{$porte}')";
        
        $res = $conn->query($sql);
        if($res==true){
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=listar-raca';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar');</script>";
            print "<script>location.href='?page=listar-raca';</script>";
        }
        break;
    
    case 'editar':
        $nome = $_POST["nome_raca"];
        $porte = $_POST["porte_raca"];
        
        $sql = "UPDATE racas SET 
                    nome_raca='{$nome}', 
                    porte_raca='{$porte}' 
                WHERE id_racas=".$_REQUEST["id"];
        
        $res = $conn->query($sql);
        if($res==true){
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar-raca';</script>";
        } else {
            print "<script>alert('Erro ao editar');</script>";
            print "<script>location.href='?page=listar-raca';</script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM racas WHERE id_racas=".$_REQUEST["id"];
        
        $res = $conn->query($sql);
        if($res==true){
            print "<script>alert('Excluído com sucesso');</script>";
            print "<script>location.href='?page=listar-raca';</script>";
        } else {
            print "<script>alert('Erro ao excluir');</script>";
            print "<script>location.href='?page=listar-raca';</script>";
        }
        break;
}
?>