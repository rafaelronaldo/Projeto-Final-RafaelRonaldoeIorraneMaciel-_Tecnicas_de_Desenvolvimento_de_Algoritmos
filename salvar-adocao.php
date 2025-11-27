<?php


switch ($_POST['acao']) {
    case 'adotar':
      
        $animais_id = $_POST['animais_id_animais'];
        $adotantes_id = $_POST['adotantes_id_adotantes'];
        $data_adocao = $_POST['data_adocao'];

    
        $sql_adocao = "INSERT INTO adocoes (data_adocao, animais_id_animais, adotantes_id_adotantes) 
                       VALUES ('{$data_adocao}', '{$animais_id}', '{$adotantes_id}')";

        $res_adocao = $conn->query($sql_adocao);

        if ($res_adocao) {
            
            
            $sql_status = "UPDATE animais SET status_animais = 'Adotado' WHERE id_animais = {$animais_id}";
            $res_status = $conn->query($sql_status);

            if ($res_status) {
                print "<script>alert('Adoção realizada com sucesso! Status do animal atualizado.');</script>";
                
                print "<script>location.href='?page=listar-animal';</script>";
            } else {
                
                print "<script>alert('Adoção registrada, mas houve um erro ao atualizar o status do animal. Verifique o banco de dados.');</script>";
                print "<script>location.href='?page=adotar-animal';</script>";
            }

        } else {
            print "<script>alert('Erro ao registrar a adoção. Verifique se o animal ou adotante existem.');</script>";
            print "<script>location.href='?page=adotar-animal';</script>";
        }
        break;
    
case 'excluir':
    $id_adocao = $_GET['id'];
    
    
    $sql = "DELETE FROM adocoes WHERE id_adocoes = {$id_adocao}";
    $res = $conn->query($sql);

    if ($res) {
        print "<script>alert('Adoção excluída com sucesso.');</script>";
        print "<script>location.href='?page=listar-adocao';</script>";
    } else {
        print "<script>alert('Erro ao excluir a adoção.');</script>";
        print "<script>location.href='?page=listar-adocao';</script>";
    }
    break;
}
?>