<?php

    switch(@$_REQUEST["acao"]) {
        case 'Cadastrar':
            $nome = $_POST["proNome"];
            $Qtd = $_POST["proQtd"];
            $valor = $_POST["proValor"];

            $sql = ("INSERT INTO produtos (proNome, proQtd, proValor) VALUES ('{$nome}', '{$Qtd}', '{$valor}')");
            $res = $conn->query($sql);

            if($res==true) {
                print("<script>alert(\"Cadastrado com sucesso !!\")</script>");
                print("<script>location.href='?page=listar';</script>");
            }else {
                print("<script>alert(\"Não foi possível cadastrar !!\");</script>");
                print("<script>location.href='?page=listar';</script>");
            }

            break;
        case 'Editar':
            $nome = $_POST["proNome"];
            $Qtd = $_POST["proQtd"];
            $valor = $_POST["proValor"];

            $sql = "UPDATE produtos SET proNome='{$nome}', proQtd='{$Qtd}', proValor='{$valor}' WHERE proId=".$_REQUEST["id"];
            $res = $conn->query($sql);

            if($res==true) {
                print("<script>alert(\"Editado com sucesso !!\")</script>");
                print("<script>location.href='?page=listar';</script>");
            }else {
                print("<script>alert(\"Não foi possível editar !!\");</script>");
                print("<script>location.href='?page=listar';</script>");
            }
            break;
        case 'Excluir':
            $sql = "DELETE FROM produtos WHERE proId=".$_REQUEST['id'];

            $res = $conn->query($sql);

            if($res==true) {
                print("<script>alert(\"Excluído com sucesso !!\")</script>");
                print("<script>location.href='?page=listar';</script>");
            }else {
                print("<script>alert(\"Não foi possível excluir !!\");</script>");
                print("<script>location.href='?page=listar';</script>");
            }
            break;
    }