<h1 class="text-center mb-3">Listar Produtos</h1>

<?php
    $sql = ("SELECT * FROM produtos");

    $res = $conn->query($sql);

    $qtdi = $res->num_rows;

    if($qtdi > 0 ) {
        print("<table class='table table-hover table-striped table-bordered rounded'>");
            print("<tr>");
                print("<th>#</th>");
                print("<th>Nome</th>");
                print("<th>Quantidade</th>");
                print("<th>Valor</th>");
                print("<th style='width: 200px;'>Ações</th>");
            print("</tr>");
        while($row = $res->fetch_object()) {
            print("<tr>");
                print ("<td>".$row->proId."</td>");
                print ("<td>".$row->proNome."</td>");
                print ("<td>".$row->proQtd."</td>");
                print ("<td>".$row->proValor."</td>");
                print ("<td class='d-flex justify-content-around'>
                    <button class='btn btn-outline-dark' onclick=\"location.href='?page=editar&id=" . $row->proId . "';\">Editar</button>
                    <button class='btn btn-outline-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=Excluir&id=" . $row->proId . "';}else{false;}\">Excluir</button>
                </td>");
            print("</tr>");
        }
        print("</table>");
    }else {
        print("<p class='alert alert-danger'>Nenhum resultado encontrado</p>");
    }


?>