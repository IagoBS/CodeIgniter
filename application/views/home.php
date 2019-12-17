<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br><br>
    <h1 class="header center blue-text">Geec - Grupo de Educação, Ética e Cidadania</h1>
    <div class="row center">
      <h6 class="header col s12 light">entidade não governamental, sem fins lucrativos, que desenvolve diversos projetos culturais, educacionais, científicos, esportivos, ambientais, de saúde </h6>
    </div>
    <div class="row center">
      <a href="<?= base_url('index.php/formulario') ?>" id="download-button" class="btn-large waves-effect waves-light orange">Criar Noticia</a>
    </div>
    <br><br>



    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <?php
                foreach ($noticias as $noticia) {
        ?>
          <div class="col s12 m6 l4">
            <div class="icon-block">
              <a href="<?= base_url("index.php/details?id={$noticia->id}") ?>">
                <img class="responsive-img" src="<?php echo isset($noticia->photo) ? base_url(). "uploads/{$noticia->photo}" : "https://aprendizgeec.org.br/uploads/portal/logo_aprendiz.png" ?>">
              </a>
              <h5 class="center"><?= $noticia->title ?></h5>
              <p class="light"><?= substr($noticia->content, 0, 150) . "[...]" ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>


  <div class="#e0e0e0 grey lighten-4">
    <div class="row">
      <div class="col s12 m6 ">
        <h5 class="start text-primarycolor">Jovem Aprendiz</h5>
        <p>O Programa Inclusão Aprendiz do GEEC visa oferecer oportunidade de trabalho e renda para jovens e adolescentes das camadas menos favorecidas da sociedade, afastando-os de situações de risco social
        </p>
        <ul style="margin-bottom: 16px;padding-left: 16px;">
          <li style="margin: 5px 0;padding: 0;list-style: initial;font-size:14px;">promovendo a inclusão social, profissional e a cidadania</li>
          <li style="margin: 5px 0;padding: 0;list-style: initial;font-size:14px;">O projeto também se estende a pessoas com deficiência</li>
          <li style="margin: 5px 0;padding: 0;list-style: initial;font-size:14px;">O programa está em atividade desde 2010 e oferece cursos de qualificação profissional a jovens com idade entre 14 e 24 anos</li>
          <li style="margin: 5px 0;padding: 0;list-style: initial;font-size:14px;">Lei de Aprendizagem (nº.10.097 de 2000, regulamentada pelo Decreto nº. 9.579 de 22 de Novembro de 2018</li>
        </ul>
        <div class="center">
          <a class="waves-effect waves-light btn" href="https://portal.aprendizgeec.org.br/" style="margin-bottom:10px;">Mais Informações</a>
        </div>

      </div>
      <div class="col s6 offset-s3 m6 center">
        <img class="responsive-img" src="https://aprendizgeec.org.br/uploads/portal/logo_aprendiz.png">
      </div>
    </div>
  </div>



  <div class="section #e0e0e0 grey lighten-4" id="remotemanagement">
    <div class="container">
      <div class="row">
        <div class="col s12 m6 ">
          <h5 class="start text-primarycolor">CITEC - Centro de Inovação Tecnológica</h5>
          <p>é o núcleo de desenvolvimento tecnológico do GEEC. Criado inicialmente para atender as demandas da própria instituição, em instalação e manutenção de computadores, o Citec cresceu e agora é um setor relativamente autônomo, que atende também o público externo.</p>
          <h5 class="start text-primarycolor">CITEC realiza I “Café com Código”em Divinópolis</h5>
          <blockquote>
            o objetivo de disseminar o conhecimento em tecnologia em Divinópolis e região.
          </blockquote>
          <!--<p><span class="text-primarycolor" style="font-weight:500;">PRO</span> features are included in the subscription.</p>-->
          <div class="center">
            <a class="waves-effect waves-light btn" href="http://citec.org.br/" style="margin-bottom:10px;">Para mais informações.</a>
          </div>
          <!--<span style="font-size:0.7rem;">*Subscriptions are re-billed every 30 days and you will be charged for the amount of devices registered to your account. Annual subscriptions require an upfront payment.</span>-->
        </div>
        <div class="col s6 offset-s3 m6 center">
          <img class="responsive-img" src="https://www.android-kiosk.com/wp-content/themes/androidkioskcom/images/remote_illustration.png">
        </div>
      </div>
    </div>
  </div>


  <div class="section #1565c0 blue darken-3" id="custom">
    <div class="container">
      <div class="row">
        <div class="col s6 offset-s3 m6 center">
          <img class="responsive-img" src="https://www.android-kiosk.com/wp-content/themes/androidkioskcom/images/ic_launcher_customise.png">
        </div>
        <div class="col s12 m6">
          <h5 class="start white-text center">Clube do livro</h5>
          <p class="start-paragraph-text" style="color:rgba(255, 255, 255, .8);">desfrute de deliciosos momentos que só a literatura pode proporcionar.</p>
          <ul style="margin-bottom: 16px;padding-left: 16px;color:rgba(255, 255, 255, .8);">
            <li style="margin: 14px 0;padding: 0;list-style: initial;font-size:14px;">Entre Com Seus Dados</li>
            <li style="margin: 14px 0;padding: 0;list-style: initial;font-size:14px;">Escolha Seu Plano</li>
            <li style="margin: 14px 0;padding: 0;list-style: initial;font-size:14px;">Desfrute De Uma Boa Leitura</li>
          </ul>
          <p>
            <a href="https://www.clubeespirita.com.br/" target="_blank" class="white-text flow-text"><i class="material-icons">arrow_forward</i> Mais informações</a>
          </p>
        </div>

      </div>
    </div>
  </div>