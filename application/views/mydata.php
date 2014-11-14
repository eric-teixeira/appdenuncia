<?php include_once('header.php'); ?>

    <section class="container-fluid col-md-12 noMgnoPd container-ajustes">
        <?php include_once('menu.php'); ?>
        
        <div class="col-md-11 form-mydata">
            <h2>Meus dados:</h2>
            <form method="post" action="register/singup" name="formRegister" role="form">
                <div class="form-group">
                    <label for="inputNameText">Nome:</label>
                    <input type="text" name="name" id="inputNameText" class="form-control" disabled>
                </div>
                <div class="form-group" id="email-register">
                    <label for="inputEmailText">E-mail:</label>
                    <input type="email" name="email" id="inputEmailText" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="inputUsernameText">Username:</label>
                    <input type="text" name="username" id="inputUsernameText" class="form-control" disabled>
                </div>
            </form>
        </div>
    </section>

<?php include_once('footer.php'); ?>