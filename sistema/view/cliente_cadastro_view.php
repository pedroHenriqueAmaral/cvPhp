<?php
    require_once '../model/cliente_model.php';
    $cliente = new Cliente();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/style.css" />
    
    <title>Cadastro de Cliente - Sistema PHP MVC</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Pedro Amaral</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Currículo</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Lista de Exercícios PHP</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../../lista-exercicios/ex1.php">Exercício 1</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../../lista-exercicios/ex2.php">Exercício 2</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../../lista-exercicios/ex3.php">Exercício 3</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../../lista-exercicios/ex4.php">Exercício 4</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../../lista-exercicios/ex5.php">Exercício 5</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../../lista-exercicios/ex6.php">Exercício 6</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item"href="../../lista-exercicios/ex7.php">Exercício 7</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../../lista-exercicios/ex8.php">Exercício 8</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../../lista-exercicios/ex9.php">Exercício 9</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../../lista-exercicios/ex10.php">Exercício 10</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item"href="../../lista-exercicios/ex11.php">Exercício 11</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item"" href="../../lista-exercicios/ex12.php">Exercício 12</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cliente_view.php">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cliente_cadastro_view.php" aria-current="page">
                            Cadastro de Clientes</a>
                        </li>
                    </ul>
                </div><!-- Navbar-Collapse -->
            </div><!-- Container Fluid -->
        </nav>
    </header>

    <main>
        <div class="container rounded">
            <h1 class="mb-5">Cadastro de Cliente</h1>

            <form id="cadastro" name="cadastro" method="POST" 
                action="../control/cliente_control.php?acao=
                <?php echo $_GET['acao']; ?>" onsubmit="">

                <h3>Informações Pessoais</h3>
                <div class="row g-3 mb-4">
                    <div class="col-sm">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" name="id" id="id" class="form-control" 
                               aria-label="ID do Cliente" readonly value="" />
                    </div>
                
                    <div class="col-sm-7">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" 
                               placeholder="Nome do Cliente" aria-label="Campo de Nome" required />
                    </div>

                    <div class="col-sm-4">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" 
                               placeholder="exemplo@dominio.com" aria-label="Campo de E-mail" required />
                    </div>
                </div>

                <h3>Endereço</h3>
                <div class="row g-3 mb-4">
                    <div class="col-sm-7">
                        <label for="endereco" class="form-label">Rua</label>
                        <input type="text" name="endereco" id="endereco" class="form-control" 
                               placeholder="Rua Antonio Lopez" aria-label="Campo de Endereço Rua" required />
                    </div>
                
                    <div class="col-sm">
                        <label for="numero" class="form-label">Nº</label>
                        <input type="text" name="numero" id="numero" class="form-control" 
                               placeholder="123" aria-label="Campo de Endereço Número" required />
                    </div>

                    <div class="col-sm-4">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="bairro" name="bairro" id="bairro" class="form-control" 
                               placeholder="Vila Markcondes" aria-label="Campo de Endereço Bairro" required />
                    </div>
                </div>

                <div class="d-grid gap-2 col-3 mx-auto mb-2">
                        <button type="submit" class="btn btn-primary"
                            name="cadastrar" id="cadastrar"    
                            aria-label="Botão para cadastrar novo cliente.">
                            Cadastrar
                        </button> 
                </div>

                <div class="d-grid gap-2 col-3 mx-auto mb-1">
                        <a href="cliente_view.php" class="btn btn-dark">
                            Voltar</a>
                </div>


            </form>
        </div>
    </main>

    
    
</body>
</html>