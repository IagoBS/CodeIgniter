<div class="container">
    <form action="<?php echo base_url('/signup/create') ?>" method="POST" id="signup">
        <div class="row ">
            <div class="col s12">

                <label for="name">Nome</label>
                <input placeholder="name" name="name" id="username" type="text" class="validate">
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="email" class="validate">
            </div>
        </div>
        <div class="row ">
            <div class="input-field col s12">
                <label for="senha" class="center">Senha</label>
                <input id="senha" type="password" name="pass" class="validate" placeholder="Senha " class="validate center">
            </div>
        </div>
    </form>
    <button form="signup" type="submit">Enviar</button>
</div>