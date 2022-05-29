<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    
    <title>Exercício 7 - Lista de PHP</title>
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
                                <li><a class="dropdown-item active bg-dark" aria-current="page" href="ex7.php">Exercício 7</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="ex8.php">Exercício 8</a></li>
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
                <h1 class="enunciado-titulo">Exercício 7</h1>
                <p class="enunciado-texto">
                    Entrar com o <em>número de vezes que se deseja 
                    imprimir a palavra SOL</em> e imprimir.
                </p>
            </div>
        
            <div class="formulario border border-secondary rounded">
                <form method="POST" action="ex7.php">
                    
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="numero-vezes">Número de Vezes</label>
                        <input type="number" class="form-control aria-label" name="numero-vezes" required />
                    </div> 

                    <div class="d-grid gap-2 mb-3 col-6 mx-auto">
                        <input type="submit" value="Exibir" class="btn btn-dark"
                               aria-label="Exibir" />
                    </div>

                    <?php
                        if(isset($_POST['numero-vezes'])) {
                            $numeroVezes = $_POST['numero-vezes'];
                            $palavraRepetida = 'SOL';

                            echo '<div class="border border-dark rounded" style="margin-top: 5px;">';
                            echo '<h2 class="text-center">OUTPUT</h2></ br>';

                            for($i = 0; $i < $numeroVezes; $i++) {
                                echo '<p class="lead text-dark text-center" style="margin: 5px; padding: 5px;">'
                                .$palavraRepetida.'</p></ br>';
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