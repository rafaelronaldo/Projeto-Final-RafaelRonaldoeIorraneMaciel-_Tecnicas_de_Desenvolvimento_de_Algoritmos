<h1>Listar Raças</h1>
<?php
    $sql = "SELECT * FROM racas";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Porte</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_racas."</td>";
            print "<td>".$row->nome_raca."</td>";
            print "<td>".$row->porte_raca."</td>";
            print "<td>
                   <button onclick=\"location.href='?page=editar-raca&id=".$row->id_racas."';\" class='btn btn-success'>Editar</button>
                   
                   <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-raca&acao=excluir&id=".$row->id_racas."';}\" class='btn btn-danger'>Excluir</button>
                   </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>