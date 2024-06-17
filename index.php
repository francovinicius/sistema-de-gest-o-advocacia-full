<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Duarte</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="./assets/img/logo.png" alt="" width="300" height="100" class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav gap-5 nav-ul">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=processos">Processos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Comunicados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php

                //incluir as configurações com o banco de dados
                include("config.php");

                //switch
                switch (@$_REQUEST["page"]) {
                    case "processos":
                        include("processos.php");
                        break;
                    case "detalhes-processo":
                        include("detalhes-processo.php");
                        break;
                    case "salvar":
                        include("salvar.php");
                        break;
                    case "editar":
                        include("editar.php");
                        break;
                    default:
                        include("dashboard.php");
                }
                ?>
            </div>
        </div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>