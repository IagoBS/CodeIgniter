<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1>Bem vindo</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <nav id="vertical" class="navbar navbar-light bg-light">
                    <nav class="nav nav-pills flex-column">
                        <ul>
                            <li><a class="nav-link" href="">Home</a></li>
                            <li><a class="nav-link" href="">Noticias</a></li>
                            <li><a class="nav-link" href="">Quem somos</a></li>
                            <li><a class="nav-link" href="">Ordenar notícias</a></li>
                        </ul>
                    </nav>
                </nav>

            </div>
            <div class="col-9">
                <?php
                foreach ($noticias  as $row) {
                        ?>
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card mb-5">
                               
                                <div class="card-footer">
                                    <?= $row['title'] ?>
                                    <p class="card-text"><?= substr($row['content'], 0, 150) . "[...]"; ?></p>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                
                ?>
            </div>
        </div>

    </div>

</body>

</html>