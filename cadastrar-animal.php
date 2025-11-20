<h1>Cadastrar Animal</h1>
<form action="?page=salvar-animal" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do Pet</label>
        <input type="text" name="nome_animais" class="form-control">
    </div>
    <div class="mb-3">
        <label>Idade</label>
        <input type="number" name="idade_animais" class="form-control">
    </div>
    <div class="mb-3">
        <label>Status</label>
        <select name="status_animais" class="form-control">
            <option value="Disponível">Disponível para Adoção</option>
            <option value="Adotado">Adotado</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Raça</label>
        <select name="racas_id_racas" class="form-control" required>
            <option value="">Selecione uma raça...</option>
            <?php
                $sql = "SELECT * FROM racas";
                $res = $conn->query($sql);
                while($row = $res->fetch_object()){
                    print "<option value='".$row->id_racas."'>".$row->nome_raca." (".$row->porte_raca.")</option>";
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>