<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />

    <title>Exercício 11 - Lista de PHP</title>
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
                                <li><a class="dropdown-item active bg-dark" aria-current="page" href="ex11.php">Exercício 11</a></li>
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
                <h1 class="enunciado-titulo">Exercício 11</h1>
                <p class="enunciado-texto">
                    Cria uma funcionalidade onde seja possível o usuário 
                    <strong>calcular a média de 4 avaliações. Exibir no final se 
                    o mesmo foi ou não aprovado em uma disciplina</strong>, considerando 
                    os critérios de avaliação da faculdade.
                </p>
            </div>
        
            <div class="formulario border border-dark rounded">
                <form method="POST" action="ex11.php"> 
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="av1">Nota da 1ª Avaliação</label>
                        <input type="number" name="av1" id="av1"
                            class="form-control" aria-name="Nota da primeira avaliação"
                            step="0.1" required />
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="av2">Nota da 2ª Avaliação</label>
                        <input type="number" name="av2" id="av2"
                            class="form-control" aria-name="Nota da segunda avaliação"
                            step="0.1" required />
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="av3">Nota da 3ª Avaliação</label>
                        <input type="number" name="av3" id="av3"
                            class="form-control" aria-name="Nota da terceira avaliação"
                            step="0.1" required />
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="av4">Nota da 4ª Avaliação</label>
                        <input type="number" name="av4" id="av4"
                            class="form-control" aria-name="Nota da quarta avaliação"
                            step="0.1" required />
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto mb-1">
                        <button type="submit" class="btn btn-primary"
                            aria-label="Botão para calcular a média das quatro avaliações." 
                            name="btn-calcular">Calcular Média</button> 
                    </div>
                    
                    <?php
                        if(isset($_POST['av1'], 
                                 $_POST['av2'],
                                 $_POST['av3'],
                                 $_POST['av4'])) {
                            
                            $av1 = $_POST['av1'];
                            $av2 = $_POST['av2'];
                            $av3 = $_POST['av3'];
                            $av4 = $_POST['av4'];

                            // if($_POST['btn-calcular']) {
                                $media = ($av1 + $av2 + $av3 + $av4) / 4;

                                if($media >= 6) {
                                    echo '<div border border-dark rounded>';
                                    
                                    echo '<p class="lead text-success text-center border border-success bg-dark rounded" 
                                    style="margin: 5px; padding: 5px;"><strong>('
                                    .$av1.' + '.$av2.' + '.$av3.' + '.$av4.') / 4 = '
                                    .$media.'</strong></p>';
                                    
                                    echo '<p class="lead text-success text-center border border-success bg-dark rounded" 
                                    style="margin: 5px; padding: 5px;">
                                    <strong>O Aluno foi aprovado na disciplina!</strong></p>';
                                    
                                    echo '</div>';  
                                } elseif($media >= 3) {
                                    echo '<div border border-dark rounded>';
                                    
                                    echo '<p class="lead text-warning text-center border border-warning bg-dark rounded" 
                                    style="margin: 5px; padding: 5px;">('
                                    .$av1.' + '.$av2.' + '.$av3.' + '.$av4.') / 4 = '
                                    .$media.'</p>';
                                    
                                    echo '<p class="lead text-warning text-center border border-warning bg-dark rounded" 
                                    style="margin: 5px; padding: 5px;">
                                    <strong>O Aluno ficou de exame na disciplina!!</strong></p>';
                                    
                                    echo '</div>';  
                                } else {
                                    echo '<div border border-dark rounded>';
                                    
                                    echo '<p class="lead text-danger text-center border border-danger bg-dark rounded" 
                                    style="margin: 5px; padding: 5px;">('
                                    .$av1.' + '.$av2.' + '.$av3.' + '.$av4.') / 4 = '
                                    .$media.'</p>';
                                    
                                    echo '<p class="lead text-danger text-center border border-danger bg-dark rounded" 
                                    style="margin: 5px; padding: 5px;">
                                    <strong>O Aluno foi reprovado na disciplina!!</strong></p>';
                                    
                                    echo '</div>'; 
                                }
                            //}
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