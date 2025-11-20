<h1>Cadastrar Raça</h1>
<form action="?page=salvar-raca" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome da Raça</label>
        <input type="text" name="nome_raca" class="form-control">
    </div>
    <div class="mb-3">
        <label>Porte</label>
        <select name="porte_raca" class="form-control">
            <option value="Pequeno">Pequeno</option>
            <option value="Médio">Médio</option>
            <option value="Grande">Grande</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>