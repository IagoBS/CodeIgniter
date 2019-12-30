<?php
$categories = $this->categories_model->get_entries();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>">

    <title> <?= isset($titulo) ? $titulo : "Citec" ?></title>
</head>

<body>

    <div class="navbar-fixed">
        <nav class="light-blue darken-3">
            <div class="nav-wrapper container ">
                <a href="<?= base_url() ?>" class="brand-logo  left"><img src="<?php echo base_url('./uploads/geec.png') ?>" height="60px" width="60px" alt=""> </a>
                <ul id="nav-itens" class="right hide-on-med-and-down ">
                    <li>
                        <a href="<?php echo base_url('/signin') ?>">
                            <i class="material-icons left">account_circle</i> <?= $this->session->nome ?>
                        </a>
                    </li>
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li><a href="<?php echo base_url('/institutional') ?>">Quem somos</a></li>
                    <?php if ($this->session->logged_in) { ?>
                        <li><a href="<?php echo base_url('/social_network') ?>">Adicionar rede social</a></li>
                        <li><a href="<?php echo base_url('/formulario') ?>">Criar noticia</a></li>
                    <?php } ?>
                    <li>
                        <a href="#" class="dropdown-trigger" data-target="dropdown-menu">
                            Categorias<i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>
                <ul id="dropdown-menu" class="dropdown-content">
                    <?php foreach ($categories as $row) { ?>
                        <li><a href="<?php echo base_url("/list_news/category_get/{$row->slug}") ?>"><?php echo $row->name ?></a></li>
                    <?php } ?>
                </ul>

            </div>
        </nav>
    </div>
    <main>
        <!-- contents -->
        <?= $contents ?>
        <!-- contents -->
    </main>

    <footer class="page-footer footer_cle white-text light-blue darken-3">
        <div class="container ">
            <div class="row">
                <div class="col xl3 l3 m6 s6 ">
                    <p><strong>Mapa do Site</strong></p>
                    <ul class="colorindo">
                        <li><a href="<?= base_url('home') ?>">Home</a></li>
                        <li><a href="<?= base_url('/institutional') ?>">Quem somos</a></li>
                        <li><a href="<?= base_url('/formulario') ?>">Adicionar Noticias</a></li>
                    </ul>
                </div>
                <div class="col  l4 m6 s6 text-align">

                    <p><strong>Redes Sociais</strong></p>
            
                    <?php
                    $redes = $this->redes_sociais_model->get_entries();
                    ?>

                    <ul>
                        <?php
                        foreach ($redes as $network) {
                        ?>
                            <li>
                                <a class="g1-new-window  external" href="<?= $network->links ?>" rel="nofollow" target="_blank">
                                    <span class="g1-social-icon g1-social-icon--facebook">
                                    <img class="responsive-img" height="50px" width="50px" src="<?php echo isset($network->incone) ? base_url("uploads/{$network->incone}") : "https://aprendizgeec.org.br/uploads/portal/logo_aprendiz.png" ?>">
                                    </span>
                                </a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                    <a href="" target="_blank" class="">
                        <img src="" height="150px" width="150px" alt="">
                    </a>

                </div>

                <div class="col xl5 l5 m6 s12">
                    <p><strong>Citec - Geec</strong></p>
                    <p>Avenida Vinte e Um de Abril, 122 - Centro<br>Divinópolis/MG - CEP: 35.500-010<br><strong>(37)
                            3222-3163 - (37) 99132-0050</strong><br>iagobsbastos@gmail.com</p>
                </div>

            </div>
        </div>

    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            var instances = M.Dropdown.init(elems, {
                coverTrigger: false
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>