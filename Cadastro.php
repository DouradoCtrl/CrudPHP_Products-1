<h1 class="mt-2 text-center">Cadastrar produto</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="Cadastrar">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="proNome" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Quantidades</label>
        <input type="number" name="proQtd" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Valor</label>
        <input type="text" name="proValor" class="form-control">
    </div>
    <button type="submit" class="btn btn-outline-primary">Enviar</button>
</form>