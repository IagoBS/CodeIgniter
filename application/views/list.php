<div class="container">
    <h1 class="center">Listar Noticias</h1>
    <div class="row">
        <?php
                foreach ($news as $noticia) {
        ?>
          <div class="col s12 m6 l4">
            <div class="icon-block">
              <a href="<?= base_url("/list_news/category_get/{$noticia->slug}") ?>">
                <img class="responsive-img" src="<?php echo isset($noticia->photo) ? base_url( "uploads/{$noticia->photo}") : "https://aprendizgeec.org.br/uploads/portal/logo_aprendiz.png" ?>">
              </a>
              <h5 class="center"><?= $noticia->title ?></h5>
              <p class="light"><?= substr($noticia->content, 0, 30) . "[...]" ?></p>
            </div>
          </div>
        <?php } ?>
    </div>

</div>