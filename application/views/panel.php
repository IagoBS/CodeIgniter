<div class="container">
    <form action="/panel/create_author" method="POST" id="formulario" enctype="multipart/form-data">
        <div class="row">
           
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                        <label for="disabled">Disabled</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row ">
                    <div class="input-field col s6">
                        <label for="email" class="center">Email</label>
                        <input id="email" type="email" class="validate">
                    </div>
                </div>
    
            
        </div>

    </form>
</div>