<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />

    <title>Exercício 9 - Lista de PHP</title>
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
                                <li><a class="dropdown-item" href="ex8.php">Exercício 8</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item active bg-dark" aria-current="page" href="ex9.php">Exercício 9</a></li>
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
                <h1 class="enunciado-titulo">Exercício 9</h1>
                <p class="enunciado-texto">
                Criar 2 vetores com 5 números inteiros cada. 
                <strong>Gerar um terceiro vetor, com a soma do 1 e segundo vetor.</strong>
                </p>
            </div>
        
            <div class="formulario border border-second rounded">
                <form method="POST" action="ex9.php">
                    <div class="form-group vetor-1">
                        <h2 class="numero-vetor">Vetor 1</h2>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Número 1</span>
                            <input type="number" name="vetor1-n1" id="vetor1-n1"
                                class="form-control" aria-name="Primeiro Número do Primeiro Vetor" />
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Número 2</span>
                            <input type="number" name="vetor1-n2" id="vetor1-n2"
                                class="form-control" aria-name="Segundo Número do Primeiro Vetor" />
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Número 3</span>
                            <input type="number" name="vetor1-n3" id="vetor1-n3"
                                class="form-control" aria-name="Terceiro Número do Primeiro Vetor" />
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Número 4</span>
                            <input type="number" name="vetor1-n4" id="vetor1-n4"
                                class="form-control" aria-name="Quarto Número do Primeiro Vetor" />
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Número 5</span>
                            <input type="number" name="vetor1-n5" id="vetor1-n5"
                                class="form-control" aria-name="Quinto Número do Primeiro Vetor" />
                        </div>
                    </div>

                    <div class="form-group vetor-2">
                        <h2 class="numero-vetor">Vetor 2</h2>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Número 1</span>
                            <input type="number" name="vetor2-n1" id="vetor2-n1"
                                class="form-control" aria-name="Primeiro Número do Segundo Vetor" />
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Número 2</span>
                            <input type="number" name="vetor2-n2" id="vetor2-n2"
                                class="form-control" aria-name="Segundo Número do Segundo Vetor" />
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Número 3</span>
                            <input type="number" name="vetor2-n3" id="vetor2-n3"
                                class="form-control" aria-name="Terceiro Número do Segundo Vetor" />
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Número 4</span>
                            <input type="number" name="vetor2-n4" id="vetor2-n4"
                                class="form-control" aria-name="Quarto Número do Segundo Vetor" />
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Número 5</span>
                            <input type="number" name="vetor2-n5" id="vetor2-n5"
                                class="form-control" aria-name="Quinto Número do Segundo Vetor" />
                        </div>
                    </div>
                    

                    <div class="d-grid gap-2 col-6 mx-auto botao-submit">
                        <input type="submit" value="Enviar" class="btn btn-secondary" />
                    </div>

                    <?php
                        if(isset($_POST['vetor1-n1'],
                                $_POST['vetor1-n2'],
                                $_POST['vetor1-n3'],
                                $_POST['vetor1-n4'],
                                $_POST['vetor1-n5'],
                                $_POST['vetor2-n1'],
                                $_POST['vetor2-n2'],
                                $_POST['vetor2-n3'],
                                $_POST['vetor2-n4'],
                                $_POST['vetor2-n5']
                        )) {
                            $vetor1 = array($_POST['vetor1-n1'],
                                            $_POST['vetor1-n2'], 
                                            $_POST['vetor1-n3'], 
                                            $_POST['vetor1-n4'], 
                                            $_POST['vetor1-n5']);

                            // var_dump($vetor1);

                            $vetor2 = array($_POST['vetor2-n1'], 
                                            $_POST['vetor2-n2'],
                                            $_POST['vetor2-n3'], 
                                            $_POST['vetor2-n4'],
                                            $_POST['vetor2-n5']);

                            // var_dump($vetor2);
                            
                            $vetor3;
                            for($i = 0; $i < 5; $i++) {
                                /*
                                echo '<p class="lead text-danger text-center bg-dark border border-danger rounded" 
                                    style="margin: 5px; padding: 5px;"><strong>Vetor 1 => '
                                    .$vetor1[$i].'</strong></p></ br>';

                                echo '<p class="lead text-success text-center bg-dark border border-success rounded" 
                                    style="margin: 5px; padding: 5px;"><strong>Vetor 2 => '
                                    .$vetor2[$i].'</strong></p></ br>';
                                */
        
                                $soma = $vetor1[$i] + $vetor2[$i];
                                $vetor3[$i] = $soma;
                                # echo $soma;

                                echo '<p class="lead text-warning text-center bg-dark border border-warning rounded" 
                                    style="margin: 5px; padding: 5px;"><strong>'
                                    .$vetor1[$i].' + '.$vetor2[$i].' = '
                                    .$vetor3[$i].'</strong></p></ br>';
                            }
                            # var_dump($vetor3);
                        }
                    ?>
                </form>
            </div><!-- Formulário -->
        </div><!-- Container -->
    </main>
    
    <footer id="rodape">
        <p>&copy; Pedro Amaral - 2022</p>
    </footer>

    <script src="../js/bootstrap.min.js"></script>
</body>
</html>