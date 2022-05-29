<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    
    <title>Exercício 1 - Lista de PHP</title>
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
                            <li><a class="dropdown-item active bg-dark" href="ex1.php" aria-current="page">Exercício 1</a></li>
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
                <h1 class="enunciado-titulo">Exercício 1</h1>
                <p class="enunciado-texto">
                    Construir um algoritmo que leia 2 números e efetue a adição. 
                    Caso o valor somado <strong>seja maior que 20, este deverá ser apresentando 
                    somando-se a ele mais 8;</strong> caso o valor somado <strong>seja menor ou igual a 20, 
                    este deverá ser apresentado subtraindo-se 5</strong>.
                </p>
            </div>
                
            <div class="formulario border border-secondary rounded">
                <form method="POST" action="ex1.php">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="numero1">1º Número</label>
                        <input type="number" class="form-control aria-label" name="numero1" id="numero1" 
                               aria-label="Informe o primeiro número" required />
                    </div>
                        
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="numero2">2º Número</label>
                        <input type="number" class="form-control aria-label" name="numero2" id="numero2" 
                               aria-label="Informe o segundo número" required />
                    </div>
                        
                    <div class="d-grid gap-2 mb-3 col-6 mx-auto">
                        <input type="submit" value="Calcular" class="btn btn-dark"
                               aria-label="Botão para calcular o número 1 e 2" />
                    </div>
                </form>

                <?php 
                    function soma($numero1, $numero2) {
                        $resultado = $numero1 + $numero2;
                                
                        if ($resultado > 20) {
                            $resultado += 8;
                            echo '<p class="lead border border-secondary" style="margin: 5px; padding: 5px;">
                                    obs: Resultado > 20, foi somado 8 ao resultado.</p></ br>';
                        } else {
                            $resultado -= 5;
                            echo '<p class="lead border border-secondary" style="margin: 5px; padding: 5px;">
                                     obs: Resultado <= 20, foi subtraido 5 do resultado.</p></ br>';
                         }
                          echo '<p class="lead border border-secondary" style="margin: 5px; padding: 5px;"><strong>'
                              .$numero1.' + '.$numero2.' = '.$resultado.'</strong></p></ br>';
                    }

                    if(isset($_POST["numero1"], $_POST["numero2"])) {
                        $numero1 = $_POST["numero1"];
                        $numero2 = $_POST["numero2"];
                            
                        if (empty($numero1)) {
                            echo "</br>Informe o primeiro número para ser realizada a operação de soma.</br>";
                        } 
                            
                        if(empty($numero2)) {
                            echo "Informe o segundo número para ser realizada a operação de soma.</br>";
                        }
                            
                        if(!empty($numero1) and !empty($numero2)) {
                            soma($numero1, $numero2);
                        }
                    }
                ?>
            </div><!-- Formulário -->
        </div><!-- Container -->
    </main>
    <footer id="rodape">
        <p>&copy; Pedro Amaral - 2022</p>                  
    </footer>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>