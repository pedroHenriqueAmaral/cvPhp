<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />

    <title>Exercício 8 - Lista de PHP</title>
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
                                <li><a class="dropdown-item" href="ex1.php">Exercício 1</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="ex2.php">Exercício 2</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="ex3.php">Exercício 3</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="ex4.php">Exercício 4</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="ex5.php">Exercício 5</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="ex6.php">Exercício 6</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item"href="ex7.php">Exercício 7</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item active bg-dark" aria-current="page"  href="ex8.php">Exercício 8</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="ex9.php">Exercício 9</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="ex10.php">Exercício 10</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="ex11.php">Exercício 11</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="ex12.php">Exercício 12</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sistema</a>
                        </li>
                    </ul>
                </div><!-- Navbar-Collapse -->
            </div><!-- Container Fluid -->
        </nav>
    </header>
    <main>
        <div class="container rounded">
            <img src="../img/php.png"
                class="img-fluid float-end"
                style="width: 20%;" 
                alt="Imagem do PHP na direita" />

            <div class="enunciado">
                <h1 class="enunciado-titulo">Exercício 8</h1>
                <p class="enunciado-texto">
                <strong>Armazenar 15 números inteiros em um vetor</strong> e imprimir 
                uma mensagem contendo o número e uma das mensagens: par ou ímpar.
                </p>
            </div>
        
            <div class="formulario border border-secondary rounded">
                <form method="POST" action="ex8.php">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Número 1</span>
                        <input type="number" name="numero-um" id="numero-um"
                            class="form-control" aria-name="Número Um" />
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Número 2</span>
                        <input type="number" name="numero-dois" id="numero-dois"
                            class="form-control" aria-name="Número Dois" />
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Número 3</span>
                        <input type="number" name="numero-tres" id="numero-tres"
                            class="form-control" aria-name="Número Três" />
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Número 4</span>
                        <input type="number" name="numero-quatro" id="numero-quatro"
                            class="form-control" aria-name="Número Quatro" />
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Número 5</span>
                        <input type="number" name="numero-cinco" id="numero-cinco"
                            class="form-control" aria-name="Número Cinco" />
                    </div>

                    <div class="d-grid gap-2 mb-3 col-6 mx-auto">
                        <input type="submit" value="Par ou Ímpar" class="btn btn-dark"
                               aria-label="Exibe se é par ou ímpar" />
                    </div>

                    <?php
                        if(isset($_POST['numero-um'], 
                                 $_POST['numero-dois'],
                                 $_POST['numero-tres'],
                                 $_POST['numero-quatro'],
                                 $_POST['numero-cinco'],
                        )) {
                            $numeros = array($_POST['numero-um'], 
                                             $_POST['numero-dois'],
                                             $_POST['numero-tres'],
                                             $_POST['numero-quatro'],
                                             $_POST['numero-cinco']);
                            
                            echo '<div class="border border-dark rounded" style="margin-top: 5px;">';
                            echo '<h2 class="text-center">OUTPUT</h2></ br>';
                            for($i = 0; $i < 5; $i++) {
                                if ($numeros[$i] % 2 == 0) {
                                    echo '<p class="lead text-danger text-center bg-dark border border-danger rounded" 
                                    style="margin: 5px; padding: 5px;"><strong>'
                                    .$numeros[$i].' -> Par</strong></p></ br>';
                                } else {
                                    echo '<p class="lead text-warning text-center bg-dark border border-warning rounded" 
                                    style="margin: 5px; padding: 5px;"><strong>'
                                    .$numeros[$i].' -> Ímpar</strong></p></ br>';
                                }
                                /* echo $numeros[$i] % 2 == 0 ? 'Par' : 'Ímpar'; */
                            }
                            echo '</div>';
                        }
                    ?>
                </form>
            </div>
        </div>
    </main>
    <footer id="rodape">
        <p>&copy; Pedro Amaral - 2022</p>
    </footer>

    <script src="../js/bootstrap.min.js"></script>
</body>
</html>