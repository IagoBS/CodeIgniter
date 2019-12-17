<?php defined('BASEPATH') or exit('No direct script access allowed');
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
    <title> <?= isset($titulo) ? $titulo : "Citec" ?></title>
</head>

<body>

    <div class="navbar-fixed">
        <nav class="light-blue darken-3">
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo"> <img src="<?php echo base_url('./assets/imagens/geec.png') ?>" alt=""> </a>
                <ul id="nav-itens" class="right hide-on-med-and-down ">
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li><a href="<?php echo base_url('index.php/institutional') ?>">Quem somos</a></li>
                    <li>
                        <a href="#" class="dropdown-trigger" data-target="dropdown-menu">
                            Categorias<i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <li>
                    </li>
                </ul>
                <ul id="dropdown-menu" class="dropdown-content">
                    <?php foreach ($noticias as $row) {?>
                        <li><a href="#"><?php echo $row->category ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>
    <!-- contents -->
    <?= $contents ?>
    <!-- contents -->
    <footer class="page-footer footer_cle black-text light-blue darken-3">
        <div class="container ">
            <div class="row">
                <div class="col xl3 l3 m6 s6 ">
                    <p><strong>Mapa do Site</strong></p>
                    <ul>
                        <li><a href="<?= base_url('home') ?>">Home</a></li>
                        <li><a href="#">Quem somos</a></li>
                        <li><a href="#">Categorias</a></li>
                        <li><a href="#">Noticias</a></li>
                        <li><a href="#">Adicionar Noticias</a></li>
                    </ul>
                </div>
                <div class="col  l4 m6 s6 text-align">
                    <p><strong>Redes Sociais</strong></p>

                    <ul>

                        <li>
                            <a class="g1-new-window  external" href="https://www.facebook.com/geec.org/" rel="nofollow" target="_blank">
                                <span class="g1-social-icon g1-social-icon--facebook">
                                    <img src="https://www.ifd.com.br/wp-content/plugins/g1-social-icons/images/facebook/facebook-48.png" alt="facebook" width="24" height="24">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="g1-new-window  external" href="http://br.linkedin.com/in/irisfreitasduarte/" rel="nofollow" target="_blank">
                                <span class="g1-social-icon g1-social-icon--linkedin">
                                    <img src="https://www.ifd.com.br/wp-content/plugins/g1-social-icons/images/linkedin/linkedin-48.png" alt="linkedin" width="24" height="24">
                                </span>
                            </a>
                        </li>
                        <li><a class="g1-new-window  external" href="http://www.pinterest.com/ifdblog" rel="nofollow" target="_blank">
                                <span class="g1-social-icon g1-social-icon--pinterest">
                                    <img src="https://www.ifd.com.br/wp-content/plugins/g1-social-icons/images/pinterest/pinterest-48.png" alt="pinterest" width="24" height="24">
                                </span>
                            </a>
                        </li>
                        <li><a class="g1-new-window  external" href="http://feeds.feedburner.com/ifdblog" rel="nofollow" target="_blank"><span class="g1-social-icon g1-social-icon--rss">
                                    <img src="https://www.ifd.com.br/wp-content/plugins/g1-social-icons/images/rss/rss-48.png" alt="rss" width="24" height="24">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="g1-new-window  external" href="http://www.twitter.com/ifd" rel="nofollow" target="_blank">
                                <span class="g1-social-icon g1-social-icon--twitter"><img src="https://www.ifd.com.br/wp-content/plugins/g1-social-icons/images/twitter/twitter-48.png" alt="twitter" width="24" height="24">
                                </span>
                            </a>
                        </li>
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