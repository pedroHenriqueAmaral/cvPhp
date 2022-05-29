<?php
    include_once '../model/cliente_model.php';
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

    <title>Gestão de Cliente - PHP MVC</title>
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
                            <a class="nav-link" href="cliente_view.php" aria-current="page">
                            Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cliente_cadastro_view.php"">
                            Cadastro de Clientes</a>
                        </li>
                    </ul>
                </div><!-- Navbar-Collapse -->
            </div><!-- Container Fluid -->
        </nav>
    </header>
    </header>

    <main>
        <div class="container rounded">
            <h1>Clientes</h1>

            <div class="formulario">
                <form name="cadastro" id="cadastro" method="POST" 
                action="cliente_cadastro_view.php?acao=cadastrar">
                    <div class="mb-2">
                        <button type="submit" class="btn btn-success"
                            name="cadastrar" id="cadastrar"    
                            aria-label="Botão para cadastrar novo cliente.">
                            Novo
                        </button> 
                    </div>
                </form>

                
                <form action="#">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Termos de Pesquisa" 
                               aria-label="Campo de Busca" aria-describedby="btn-buscar" />
                        <input class="btn btn-outline-secondary" type="submit" id="busca" name="busca" value="Buscar" />
                    </div>
                </form>
                
            </div>

            <table class="table table-dark table-hover">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Número</th>
                    <th scope="col">Editar/Excluir</th>
                </tr>
                
                <?php
                    if(isset($_GET['busca'])) {
                        $filtro = $_GET['busca'];
                    } else {
                        $filtro = "";
                    }

                    # Conexão com o obj para leitura dos dados
                    $sql_query = $cliente->read();

                    if($sql_query->num_rows == 0) {
                ?>

                <tr>
                    <td colspan="3">Nenhuma informação encontrada.</td>
                </tr>

                <?php
                    } else {
                        while($dados = $sql_query->fetch_assoc()) {
                ?>

                <tr>
                    <td scope="row"><?php echo $dados['id']; ?></td>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><?php echo $dados['endereco']; ?></td>
                    <td><?php echo $dados['bairro']; ?></td>
                    <td><?php echo $dados['numero']; ?></td>
                    <td>
                        <input method="POST" id="editar" name="editar" class="btn btn-primary"
                        action="cliente_cadastro_view.php?acao=editar&&id=
                        <?php echo $dados['id'] ?>" value="Editar" />
                        
                        <input method="POST" id="excluir" name="excluir" class="btn btn-danger"
                        action="cliente_cadastro_view.php?acao=excluir&&id=
                        <?php echo $dados['id'] ?>" value="Excluir" />
                    </td>
                </tr>

                <?php
                        }
                    }
                ?>
            </table>
        </div>
    </main>

    <footer id="rodape">
        <p>&copy; Pedro Amaral - 2022</p>
    </footer>
</body>
</html>