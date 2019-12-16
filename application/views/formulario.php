<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
</head>

<body>
  <h1 class="center"> Crie sua notícia</h1>

  <div class="container">

    <div class="row">

      <div class="input-field col s6">
        <form action="index.php/formulario/create_news">
          <?php
          if ($this->uri->segment(2) === "inserted") {
            echo '<p class=text-center green>Texto enviado com sucesso</p>';
          }
          ?>
          <label for="seletor">Selecione o nome</label>
          <select class="form-control" id="exampleFormControlSelect1" name="author">
            <?php
            foreach ($authors as $row) {
            ?>
              <option value="<?= $row->id ?>">
                <?=
                                $row->name
                ?>
              </option>
            <?php
                            }
            ?>
          </select>
      </div>
      <br>

      <div class="input-field col s6">
        <label for="date">Data</label>
        <input type="date" class="form-control" id="date_register" name="dt_register" placeholder="dia/mes/ano">
      </div>
    </div>

    <div class="row">
      <div class="input-fild col s12">
        <label for="title">Titulo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Título da notícia">
      </div>
    </div>

    <div class="row">
      <div class="input-fild col s12">
        <label for="selector">Selecione a categoria</label>
        <select class="form-control" id="exampleFormControlSelect1" name="category">
          <?php
                            foreach ($categories as $row) {
          ?>
            <option value="<?= $row->id ?>">
              <?=
                                $row->name
              ?>
            </option>
          <?php
                            }
          ?>
        </select>

      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="content">Textarea</label>
          <textarea name="content" id="content" class="materialize-textarea"></textarea>
        </div>
      </div>

      <div class="row">
        <div class="input-file">

          <input type="file" class="photo" id="photo" name="photo" accept="assets/imagem/">
        </div>

      </div>

     
      <button class="btn right" type="submit" name="send"><i class="material-icons right">send</i>Enviar</button>
      </button>
      </form>
    </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems);
    });

    // Or with jQuery

    $(document).ready(function() {
      $('select').formSelect();
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

</body>

</html>