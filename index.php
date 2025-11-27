<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Adoção</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AdotePET</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            Raças
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-raca">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-raca">Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            Animais
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-animal">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-animal">Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Adotantes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-adotante">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-adotante">Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Adoção
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=adotar-animal">Realizar Adoção</a></li>
                            <li><a class="dropdown-item" href="?page=listar-adocao">Listar Adoções</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("config.php");
                    switch(@$_REQUEST["page"]){
                        
                        case "cadastrar-raca": 
                            include("cadastrar-raca.php");
                             break;
                        case "listar-raca": 
                            include("listar-raca.php"); 
                            break;
                        case "salvar-raca": 
                            include("salvar-raca.php"); 
                            break;
                        case "editar-raca": 
                            include("editar-raca.php"); 
                            break;
                        
                        
                        case "cadastrar-animal": 
                            include("cadastrar-animal.php"); 
                            break;
                        case "listar-animal": 
                            include("listar-animal.php"); 
                            break;
                        case "salvar-animal": 
                            include("salvar-animal.php"); 
                            break;
                        case "editar-animal": 
                            include("editar-animal.php");
                            break;

                        
                        case "cadastrar-adotante": 
                            include("cadastrar-adotante.php"); 
                            break;
                        case "listar-adotante": 
                            include("listar-adotante.php"); 
                            break;
                        case "salvar-adotante": 
                            include("salvar-adotante.php"); 
                            break;
                        case "editar-adotante": 
                            include("editar-adotante.php"); 
                            break;
                        
                        
                        case "adotar-animal": 
                            include("adotar-animal.php"); 
                            break;
                        case "salvar-adocao": 
                            include("salvar-adocao.php"); 
                            break;
                        case "listar-adocao": 
                            include("listar-adocao.php"); 
                            break;
                        
                            
                        default:
                            print "<h1>Bem vindo ao Sistema de Adoção!</h1>";
                            print "<p>Escolha uma opção no menu para começar.</p>";
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>