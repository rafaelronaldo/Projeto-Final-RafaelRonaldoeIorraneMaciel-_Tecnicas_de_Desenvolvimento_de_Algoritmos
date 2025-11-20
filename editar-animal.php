<h1>Editar Animal</h1>
<?php
    $sql = "SELECT * FROM animais WHERE id_animais=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-animal" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id_animais; ?>">

    <div class="mb-3">
        <label>Nome do Pet</label>
        <input type="text" name="nome_animais" value="<?php print $row->nome_animais; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Idade</label>
        <input type="number" name="idade_animais" value="<?php print $row->idade_animais; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Status</label>
        <select name="status_animais" class="form-control">
            <option value="Disponível" <?php print ($row->status_animais == "Disponível") ? "selected" : ""; ?>>
                Disponível para Adoção</option>
            <option value="Adotado" <?php print ($row->status_animais == "Adotado") ? "selected" : ""; ?>>Adotado
            </option>
        </select>
    </div>
    <div class="mb-3">
        <label>Raça</label>
        <select name="racas_id_racas" class="form-control" required>
            <option value="">Selecione...</option>
            <?php
                $sql_raca = "SELECT * FROM racas";
                $res_raca = $conn->query($sql_raca);
                while($row_raca = $res_raca->fetch_object()){
                    if($row_raca->id_racas == $row->racas_id_racas){
                        print "<option value='".$row_raca->id_racas."' selected>".$row_raca->nome_raca."</option>";
                    } else {
                        print "<option value='".$row_raca->id_racas."'>".$row_raca->nome_raca."</option>";
                    }
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>