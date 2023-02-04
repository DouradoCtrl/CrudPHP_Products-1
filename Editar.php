<h1 class="mt-2 text-center">Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM produtos WHERE proId=".$_REQUEST["id"];
    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="Editar">
    <input type="hidden" name="id" value="<?php print($row->proId);?>">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="proNome" class="form-control" value="<?php print($row->proNome);?>">
    </div>
    <div class="mb-3">
        <label for="">Quantidades</label>
        <input type="number" name="proQtd" class="form-control" value="<?php print($row->proQtd);?>">
    </div>
    <div class="mb-3">
        <label for="">Valor</label>
        <input type="text" name="proValor" class="form-control" value="<?php print($row->proValor);?>">
    </div>
    <button type="submit" class="btn btn-outline-primary">Enviar</button>
</form>