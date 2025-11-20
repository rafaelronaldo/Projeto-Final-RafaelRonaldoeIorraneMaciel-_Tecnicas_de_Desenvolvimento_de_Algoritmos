<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
    
        $nome   = $_POST["nome_animais"];
        $idade  = $_POST["idade_animais"];
        $status = $_POST["status_animais"];
        $raca   = $_POST["racas_id_racas"]; 

        
        $sql = "INSERT INTO animais (nome_animais, idade_animais, status_animais, racas_id_racas) 
                VALUES ('{$nome}', '{$idade}', '{$status}', '{$raca}')";
        
        $res = $conn->query($sql);
        if($res==true){
            print "<script>alert('Animal cadastrado com sucesso');</script>";
            print "<script>location.href='?page=listar-animal';</script>";
        } else {
            print "<script>alert('Erro no cadastro');</script>";
            print "<script>location.href='?page=listar-animal';</script>";
        }
        break;

    case 'editar':
        
        $nome   = $_POST["nome_animais"];
        $idade  = $_POST["idade_animais"];
        $status = $_POST["status_animais"];
        $raca   = $_POST["racas_id_racas"];

        $sql = "UPDATE animais SET 
                    nome_animais='{$nome}', 
                    idade_animais='{$idade}', 
                    status_animais='{$status}', 
                    racas_id_racas='{$raca}' 
                WHERE id_animais=".$_REQUEST["id"];
        
        $res = $conn->query($sql);
        if($res==true){
            print "<script>alert('Animal editado com sucesso');</script>";
            print "<script>location.href='?page=listar-animal';</script>";
        } else {
            print "<script>alert('Erro ao editar');</script>";
            print "<script>location.href='?page=listar-animal';</script>";
        }
        break;

    case 'excluir':
        
        $sql = "DELETE FROM animais WHERE id_animais=".$_REQUEST["id"];
        $res = $conn->query($sql);
        if($res==true){
            print "<script>alert('Animal excluído');</script>";
            print "<script>location.href='?page=listar-animal';</script>";
        } else {
            print "<script>alert('Erro ao excluir');</script>";
            print "<script>location.href='?page=listar-animal';</script>";
        }
        break;
}
?>