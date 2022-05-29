<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />

    <title>Exercício 5 - Lista de PHP</title>
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
                            <li><a class="dropdown-item active bg-dark" aria-current="page" href="ex5.php">Exercício 5</a></li>
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
                <h1 class="enunciado-titulo">Exercício 5</h1>
                <p class="enuncido-texto"><strong>Ler um número inteiro entre 1 e 12 e escrever o mês correspondente.</strong> 
                    Caso o número seja fora desse intervalo, informar que não existe mês com este número.</p>
            </div>

            <div class="formulario border border-secondary rounded">
                <form method="POST" action="ex5.php">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="mes">Número do Mês</label>
                        <input type="number" class="form-control aria-label" name="mes" id="mes" 
                            aria-label="Informar o número do mês" required />
                    </div>
                    
                    <div class="d-grid gap-2 mb-3 col-6 mx-auto">
                        <input type="submit" value="Enviar" class="btn btn-dark"
                            aria-label="Botão para enviar o número do mês" />
                    </div>

                    <?php 
                        if(isset($_POST["mes"])) {
                            $numero = $_POST["mes"];

                            $mes[1] = "Janeiro";
                            $mes[2] = "Fevereiro";
                            $mes[3] = "Março";
                            $mes[4] = "Abril";
                            $mes[5] = "Maio";
                            $mes[6] = "Junho";
                            $mes[7] = "Julho";
                            $mes[8] = "Agosto";
                            $mes[9] = "Setembro";
                            $mes[10] = "Outubro";
                            $mes[11] = "Novembro";
                            $mes[12] = "Dezembro";

                            switch($numero) {
                                case 1:
                                    echo '<p class="lead border border-success text-success text-center" 
                                    style="margin: 5px; padding: 5px;">'
                                    .$mes[1].'</p>';
                                    break;
                                case 2:
                                    echo '<p class="lead border border-success text-success text-center" 
                                    style="margin: 5px; padding: 5px;">'
                                    .$mes[2].'</p>';   
                                    break;
                                case 3:
                                    echo '<p class="lead border border-success text-success text-center" 
                                    style="margin: 5px; padding: 5px;">'
                                    .$mes[3].'</p>';
                                    break;
                                case 4:
                                    echo '<p class="lead border border-success text-success text-center" 
                                    style="margin: 5px; padding: 5px;">'
                                    .$mes[4].'</p>';                                    
                                    break;
                                case 5:
                                    echo '<p class="lead border border-success text-success text-center" 
                                    style="margin: 5px; padding: 5px;">'
                                    .$mes[5].'</p>';
                                    break;
                                case 6:
                                    echo '<p class="lead border border-success text-success text-center" 
                                    style="margin: 5px; padding: 5px;">'
                                    .$mes[6].'</p>';
                                    break;
                                case 7:
                                    echo '<p class="lead border border-success text-success text-center" 
                                    style="margin: 5px; padding: 5px;">'
                                    .$mes[7].'</p>';
                                    break;
                                case 8:
                                    echo '<p class="lead border border-success text-success text-center" 
                                    style="margin: 5px; padding: 5px;">'
                                    .$mes[8].'</p>';
                                    break;
                                case 9:
                                    echo '<p class="lead border border-success text-success text-center" 
                                    style="margin: 5px; padding: 5px;">'
                                    .$mes[9].'</p>';
                                    break;
                                case 10:
                                    echo '<p class="lead border border-success text-success text-center" 
                                    style="margin: 5px; padding: 5px;">'
                                    .$mes[10].'</p>';
                                    break;
                                case 11:    
                                    echo '<p class="lead border border-success text-success text-center" 
                                    style="margin: 5px; padding: 5px;">'
                                    .$mes[11].'</p>';
                                    break;
                                case 12:
                                    echo '<p class="lead border border-success text-success text-center" 
                                    style="margin: 5px; padding: 5px;">'
                                    .$mes[12].'</p>';
                                    break;
                                default:
                                echo '<p class="lead border border-danger text-danger text-center" 
                                style="margin: 5px; padding: 5px;">ERRO 404: 
                                não existe mês com o número informado.</p>';
                                
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