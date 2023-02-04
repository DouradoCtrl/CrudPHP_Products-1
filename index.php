<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>El crud Eliel</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark mb-5">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="?page=#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Produto
                </a>
                <ul class="dropdown-menu text-light">
                    <li><a class="dropdown-item" href="?page=cadastrar">Novo Produto</a></li>
                    <li><a class="dropdown-item" href="?page=listar">Listar Produto</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            <?php
                include("config.php");
                switch (@$_REQUEST["page"]) {
                    case 'cadastrar':
                        include("Cadastro.php");
                        break;
                    case 'listar':
                        include("Listar.php");
                        break;
                    case 'salvar':
                        include("Salvar.php");
                        break;
                    case 'editar':
                        include("Editar.php");
                        break;
                    case '#':
                        print("<h1 class=\"text-center\"'>Bem vindo ao sistema de estoque de produtos</h1>");
                        break;
                    default:
                        print("<h1 class=\"text-center\"'>Bem vindo ao sistema de estoque de produtos</h1>");
                        break;
                }
            ?>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>