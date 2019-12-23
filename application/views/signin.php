<div class="container">
    <form action="<?php echo base_url('signin/logar') ?>" method="POST" id="login">

        <div class="row">
        <?php
        if(isset($error)) {
            echo "<p class='center'>". $error ."</p>";
        } 
        ?>
        <div class="center col s6">
                <br>
            <i class="material-icons prefix">account_circle</i>
            
                <label for="email">Email</label>
                
                <input type="text" name="email" id="email">
            </div>
        </div>
        <div class="row">
            <div class="center col s6">
                <label for="pass">Senha</label>
                <input type="password" name="pass" id="pass">
            </div>
        </div>
    
    </form>
    <div class="row">
        <div class="col s4">

            <button form="login" type="submit">Enviar</button>
        </div>
        <div class="col s4">
            <a href="<?php echo base_url('/signup') ?>">Não possui conta?</a>
        </div>
    </div>

</div>