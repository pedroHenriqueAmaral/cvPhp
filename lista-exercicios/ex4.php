<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />

    <title>Exercício 4 - Lista de PHP</title>
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
                            <li><a class="dropdown-item active bg-dark" aria-current="page" href="ex4.php">Exercício 4</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="ex5.php">Exercício 5</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="ex6.php">Exercício 6</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="ex7.php">Exercício 7</a></li>
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
                <h1 class="enunciado-titulo">Exercício 4</h1>
                <p class="enuncido-texto">Entrar com 3 números e imprimi-los em ordem decrescente.</p>
            </div>

            <div class="formulario border border-secondary rounded">
                <form method="POST" action="ex4.php">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="numero1">1º Número</label>
                        <input type="number" class="form-control aria-label" name="numero1" id="numero1" 
                            aria-label="Informar o primeiro número" required />
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="numero2">2º Número</label>
                        <input type="number" class="form-control aria-label" name="numero2" id="numero2" 
                            aria-label="Informar o segundo número" required />
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="numero3">3º Número</label>
                        <input type="number" class="form-control aria-label" name="numero3" id="numero3" 
                            aria-label="Informar o terceiro número" required />
                    </div>

                    <div class="d-grid gap-2 mb-3 col-6 mx-auto">
                        <input type="submit" value="Enviar" class="btn btn-dark"
                            aria-label="Botão para enviar os números" />
                    </div>

                    <?php 
                        if(isset($_POST["numero1"], $_POST["numero2"], $_POST["numero3"])) {
                            $aux;
                            $numero[0] = $_POST["numero1"];
                            $numero[1] = $_POST["numero2"];
                            $numero[2] = $_POST["numero3"];

                            // maior > menor > menor
    
                            if ($numero[0] < $numero[1]) {
                                $aux = $numero[0]; 
                                $numero[0] = $numero[1];
                                $numero[1] = $aux;
                            }

                            if ($numero[0] < $numero[2]) {
                                $aux = $numero[0]; 
                                $numero[0] = $numero[2];
                                $numero[2] = $aux;
                            }

                            if ($numero[1] < $numero[2]) {
                                $aux = $numero[1];
                                $numero[1] = $numero[2];
                                $numero[2] = $aux;
                            }

                            for($i = 0; $i <= 2; $i++) {
                                echo '<p class="lead border border-secondary" 
                                style="margin: 5px; padding: 5px;">'
                                .$numero[$i].'</p>';
                            }
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