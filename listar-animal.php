<h1>Listar Animais</h1>
<?php
    $sql = "SELECT a.*, r.nome_raca 
            FROM animais AS a
            INNER JOIN racas AS r ON a.racas_id_racas = r.id_racas";
            
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>Idade</th>";
        print "<th>Raça</th>";
        print "<th>Status</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_animais."</td>"; 
            print "<td>".$row->nome_animais."</td>";
            print "<td>".$row->idade_animais." anos</td>";
            print "<td>".$row->nome_raca."</td>";
            print "<td>".$row->status_animais."</td>";
            print "<td>
                   <button onclick=\"location.href='?page=editar-animal&id=".$row->id_animais."';\" class='btn btn-success'>Editar</button>
                   
                   <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-animal&acao=excluir&id=".$row->id_animais."';}\" class='btn btn-danger'>Excluir</button>
                   
                   </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Nenhum animal encontrado!</p>";
    }
?>