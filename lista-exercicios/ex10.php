<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />

    <title>Exercício 10 - Lista de PHP</title>
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
                                <li><a class="dropdown-item" href="ex9.php">Exercício 9</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item active bg-dark" aria-current="page" href="ex10.php">Exercício 10</a></li>
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
                <h1 class="enunciado-titulo">Exercício 10</h1>
                <p class="enunciado-texto">
                <strong>Criar uma calculadora de 4 número, sendo a operação escolhida pelo usuário</strong> 
                </br>(adição, subtração, multiplicação e divisão).
                </p>
            </div>
        
            <div class="formulario border border-dark rounded">
                <form method="POST" action="ex10.php"> 
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="numero1">Número 1</label>
                        <input type="number" name="numero1" id="numero1"
                            class="form-control" aria-name="Primeiro Número" required />
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="numero2">Número 2</label>
                        <input type="number" name="numero2" id="numero2"
                            class="form-control" aria-name="Segundo Número" required />
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="numero3">Número 3</label>
                        <input type="number" name="numero3" id="numero3"
                            class="form-control" aria-name="Terceiro Número" required />
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="numero4">Número 4</label>
                        <input type="number" name="numero4" id="numero4"
                            class="form-control" aria-name="Quarto Número" required />
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto mb-1">
                        <div class="btn-group btn-group-lg" role="group">
                            <button type="submit" class="btn btn-success"
                            aria-label="Botão para dividir os números"
                            name="btn-divisao">/</button>
                            
                            <button type="submit" class="btn btn-warning"
                            aria-label="Botão para multiplicar os números"
                            name="btn-multiplicacao">*</button>
                            
                            <button type="submit" class="btn btn-danger"
                            aria-label="Botão para subtrair os números" 
                            name="btn-subtracao">-</button>   
                        </div>
                        
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto mb-1">
                        <div class="btn-group btn-group-lg " role="group">
                            <button type="submit" class="btn btn-primary"
                            aria-label="Botão para somar os números" 
                            name="btn-soma">+</button> 
                        </div>
                    </div>
                    
                    <?php
                        if(isset($_POST['numero1'],
                                 $_POST['numero2'],
                                 $_POST['numero3'],
                                 $_POST['numero4'])
                        ) {
                            $numero1 = $_POST['numero1'];
                            $numero2 = $_POST['numero2'];
                            $numero3 = $_POST['numero3'];
                            $numero4 = $_POST['numero4'];

                            # Ações de cada operação
                            if(isset($_POST['btn-divisao'])) {
                                $resultado = $numero1 / $numero2 / $numero3 / $numero4;
                                echo '<div border border-dark rounded>';
                                echo '<p class="lead text-success text-center border border-success rounded" 
                                style="margin: 5px; padding: 5px;">'
                                .$numero1.' / '.$numero2.' / '.$numero3.' / '.$numero4.
                                ' = <strong>'.$resultado.'</strong></p>
                                </div>';   
                            }

                            if(isset($_POST['btn-multiplicacao'])) {
                                $resultado = $numero1 * $numero2 * $numero3 * $numero4;
                                echo '<div border border-dark rounded>';
                                echo '<p class="lead text-warning text-center border border-warning bg-dark rounded" 
                                style="margin: 5px; padding: 5px;">'
                                .$numero1.' * '.$numero2.' * '.$numero3.' * '.$numero4.
                                ' = <strong>'.$resultado.'</strong></p>
                                </div>';   
                            }

                            if(isset($_POST['btn-subtracao'])) {
                                $resultado = $numero1 - $numero2 - $numero3 - $numero4;
                                echo '<div border border-dark rounded>';
                                echo '<p class="lead text-danger text-center border border-danger rounded" 
                                style="margin: 5px; padding: 5px;">'
                                .$numero1.' - '.$numero2.' - '.$numero3.' - '.$numero4.
                                ' = <strong>'.$resultado.'</strong></p>
                                </div>';   
                            }
                            
                            if(isset($_POST['btn-soma'])) {
                                $resultado = $numero1 + $numero2 + $numero3 + $numero4;
                                echo '<div border border-dark rounded>';
                                echo '<p class="lead text-primary text-center border border-primary rounded" 
                                style="margin: 5px; padding: 5px;">'
                                .$numero1.' + '.$numero2.' + '.$numero3.' + '.$numero4.
                                ' = <strong>'.$resultado.'</strong></p>
                                </div>';
                            }
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