<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />

    <title>Exercício 12 - Lista de PHP</title>
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
                                <li><a class="dropdown-item" href="ex10.php">Exercício 10</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item"href="ex11.php">Exercício 11</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item active bg-dark" aria-current="page" href="ex12.php">Exercício 12</a></li>
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
                <h1 class="enunciado-titulo">Exercício 12</h1>
                <p class="enunciado-texto">
                    Faça um algoritmo que receba a altura e sexo de uma pessoa, 
                    calcule e exiba o seu peso ideal, utilizando as seguintes formulas:
                    </br><strong>a.	Homens = (72.7 * altura) – 58
                    </br>b.	Mulheres = (62.1 * altura) - 44.7</strong>
                </p>
            </div>
        
            <div class="formulario border border-dark rounded">
                <form method="POST" action="ex12.php"> 
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="altura">Altura</label>
                        <input type="number" name="altura" id="altura"
                            class="form-control" aria-name="Altura do Usuário"
                            step="0.01" required />
                    </div>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="radio" 
                            name="sexo" value="homem" required
                            aria-label="Botão para indicar que o usuário é homem" />
                        </div>
                        <span class="form-control">Homem</span>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="radio" 
                            name="sexo" value="mulher" required
                            aria-label="Botão para indicar que o usuário é mulher" />
                        </div>
                        <span class="form-control">Mulher</span>
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto mb-1">
                        <button type="submit" class="btn btn-primary"
                            aria-label="Botão para calcular o peso ideal do usuário." 
                            name="btn-calcular">Calcular Peso Ideal</button> 
                    </div>
                    
                    <?php
                        if(isset($_POST['altura'],
                                 $_POST['sexo'])) {
                            $altura = $_POST['altura'];
                            $sexo = $_POST['sexo'];

                            if($sexo == 'homem') {
                                $pesoIdeal = (72.7 * $altura) - 58;
                                
                                echo '<p class="lead text-warning text-center border border-warning bg-dark rounded" 
                                style="margin: 5px; padding: 5px;"><strong>Peso Ideal = '
                                .$pesoIdeal.
                                '</strong></p>';
                            } elseif($sexo == 'mulher') {
                                $pesoIdeal = (62.1 * $altura) - 44.7;
                                
                                echo '<p class="lead text-danger text-center border border-danger bg-dark rounded" 
                                style="margin: 5px; padding: 5px;"><strong>Peso Ideal = '
                                .$pesoIdeal.
                                '</strong></p>';
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