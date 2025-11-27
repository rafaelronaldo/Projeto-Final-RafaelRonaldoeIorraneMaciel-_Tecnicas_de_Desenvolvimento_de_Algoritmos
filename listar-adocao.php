<?php


$sql = "SELECT 
            a.data_adocao, 
            b.nome_animais, 
            c.nome_adotante,
            c.cpf_adotante,
            a.id_adocoes 
        FROM adocoes a
        INNER JOIN animais b ON a.animais_id_animais = b.id_animais
        INNER JOIN adotantes c ON a.adotantes_id_adotantes = c.id_adotantes
        ORDER BY a.data_adocao DESC";

$res = $conn->query($sql);
$qtd = $res->num_rows;
?>

<h1>Listar Adoções</h1>

<?php if ($qtd > 0): ?>
<p class="alert alert-success"><?php echo $qtd; ?> adoção(ões) registrada(s).</p>
<table class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th>Data da Adoção</th>
            <th>Animal Adotado</th>
            <th>Adotante (CPF)</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $res->fetch_object()): ?>
        <tr>
            <td><?php echo date('d/m/Y', strtotime($row->data_adocao)); ?></td>
            <td><?php echo $row->nome_animais; ?></td>
            <td><?php echo $row->nome_adotante . " (" . $row->cpf_adotante . ")"; ?></td>
            <td>
                <button
                    onclick="if(confirm('Tem certeza que deseja DELETAR esta adoção?')){ location.href='?page=salvar-adocao&acao=excluir&id=<?php echo $row->id_adocoes; ?>'; }"
                    class="btn btn-danger btn-sm">Excluir</button>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<?php else: ?>
<p class="alert alert-danger">Nenhuma adoção registrada.</p>
<?php endif; ?>