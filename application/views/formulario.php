
<div class="container">
  <form action="<?php echo base_url('/formulario/create_news') ?>" method="POST" id="formulario" enctype="multipart/form-data">
    <label for="author">Selecione o autor</label>
    <select name="author" id="author">
      <?php foreach ($authors as $author) { ?>
        <option value="<?= $author->id ?>">
          <?= $author->name; ?>
        </option>
      <?php } ?>
    </select>
    <label for="dt_register">Data</label>
    <input type="date" name="dt_register" placeholder="Dia/Mes/Ano">
    <label for="category">Category</label>
    <select name="category">
      <?php foreach ($categories as $category) { ?>
        <option value="<?= $category->id ?>">
          <?= $category->name ?>
        </option>
      <?php } ?>
    </select>
    <label for="title">Titulo do texto</label>
    <input type="text" name="title" placeholder="Titulo do texto">
    <label for="content">Texto</label>
    <textarea name="content" rows="40"  ></textarea>
    <label for="photo">Carregar foto</label>
    <input type="file" name="photo" >
  </form>
  <button form="formulario" type="submit">Enviar</button>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });
</script>