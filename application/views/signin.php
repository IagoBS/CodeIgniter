<div class="container">

    <div class="login">
        <form action="<?php echo base_url('signin/logar') ?>" method="POST" id="login" class="formulario">
            <?php
            if (isset($error)) {
                echo "<p class='center'>" . $error . "</p>";
            }
            ?>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <label for="pass">Senha</label>
            <input type="password" name="pass" id="pass">
        </form>
        <a href="<?php echo base_url('/signup') ?>">Não possui conta?</a>

        <button class="botao" form="login" type="submit">Enviar</button>
    </div>

</div>