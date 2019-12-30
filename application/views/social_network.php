<div class="container">
    <?php if (isset($error)) {
        echo "<p>" . $error . "</p>";
    }
    ?>
    <form action="<?php echo base_url('/social_network/create') ?>" method="POST" id="formulario" enctype="multipart/form-data">
        <label for="name">Nome da rede social</label>
        <input type="text" name="name">

        <label for="link">Link</label>
        <input type="text" name="link" id="link">

        <label for="photo">Carregar foto</label>
        <input type="file" name="incone">
    </form>
    <button type="submit" form="formulario">Enviar</button>
</div>