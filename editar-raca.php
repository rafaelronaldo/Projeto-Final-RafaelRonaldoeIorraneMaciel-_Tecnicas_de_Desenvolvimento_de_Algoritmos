<h1>Editar Raça</h1>
<?php
    $sql = "SELECT * FROM racas WHERE id_racas=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-raca" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id_racas; ?>">

    <div class="mb-3">
        <label>Nome da Raça</label>
        <input type="text" name="nome_raca" value="<?php print $row->nome_raca; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Porte</label>
        <select name="porte_raca" class="form-control">
            <option value="Pequeno" <?php print ($row->porte_raca == "Pequeno") ? "selected" : ""; ?>>Pequeno</option>
            <option value="Médio" <?php print ($row->porte_raca == "Médio") ? "selected" : ""; ?>>Médio</option>
            <option value="Grande" <?php print ($row->porte_raca == "Grande") ? "selected" : ""; ?>>Grande</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>