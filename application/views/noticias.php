<div class="container">
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
            <?php 
           
                foreach ($noticias as $row) {
            ?>
            <div class="col-9 col-md-4 mb-3">
                <div class="card mb-5">
                    <a href="./details.php?id=<?= $row['id'] ?>">
                        <img  src="/imagens/<?=$gallery['photo'] ?>" height="200px" height="200px">
                    </a>
                    <div class="card-footer">
                        <?= $row['title'] ?>
                        <p class="card-text"><?= substr($row['content'], 0, 150) . "[...]"; ?></p>
                    </div>
                </div>
            </div>

        </div>
            <?php
            }
            
            ?>
    </div>
