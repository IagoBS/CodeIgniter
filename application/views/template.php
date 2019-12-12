<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title><?= isset($title) ? $title : 'citec' ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="https://www.clubeespirita.com.br/assets/images/logo.png" class="logo-topo" width="120" height="auto"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quem_somos.php">Quem Somos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorias
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php foreach ($autores as $row) { ?>
                                <a class="dropdown-item" href="./ordenar.php?id=<?= $row['id'] ?>">
                                    <?= $row['name'] ?>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0" method="POST">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search" name="autocomplete">
                    <button class="btn btn-dark my-2 my-sm-0 " type="submit">Buscar</button>
                </form>

            </div>
        </div>
    </nav>
    <div class="container">

        <?php echo $contents; ?>
    </div>

    <footer class="page-footer font-small teal pt-4">
        <div class="container-fluid text-center text-md-left">
            <div class="row">

                <div class="col-md-6 ">

                    <!-- Content -->

                    <p><strong>Citec - Geec</strong></p>
                    <p>Avenida Vinte e Um de Abril, 122 - Centro<br>Divinópolis/MG - CEP: 35.500-010<br><strong>(37) 3222-3163 - (37) 9 8851-0879</strong><br>iagobsbastos@gmail.com</p>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-3">

                    <!-- Content -->
                    <p><strong>Redes Sociais</strong></p>
                    <?php
                    foreach ($redes as $row) {
                        ?>
                        <a href="<?= $redes->link ?>">
                            <i class="" aria-hidden="true"><?= $redes->name ?></i>
                            <img src="<?= $redes->incone ?>" alt="" height="100px" width="100px">
                        </a>
                </div>
            <?php
            }
            ?>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>