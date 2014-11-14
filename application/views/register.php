<?php include_once('header.php'); ?>

<div class="container-fluid">
    <section class="container-register row" >
        <?php include_once('erro_success.php'); ?>
        <form method="post" action="register/singup" name="formRegister" role="form">
            <div class="form-group">
                <label for="inputNameText">Nome:</label>
                <input type="text" name="name" id="inputNameText" class="form-control" required autofocus>
            </div>
            <div class="form-group" id="email-register">
                <label for="inputEmailText">E-mail:</label>
                <input type="email" name="email" id="inputEmailText" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputUsernameText">Username:</label>
                <input type="text" name="username" id="inputUsernameText" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputPasswordText">Senha:</label>
                <input type="password" name="password" id="inputPasswordText" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputPasswordRepeatText">Repetir Senha:</label>
                <input type="password" name="confirmPassword" id="inputPasswordRepeatText" class="form-control" required>
            </div>
            <input type="submit" value="Cadastrar" class="btn btn-success">
        </form>
    </section>
</div>

<?php include_once('footer.php'); ?>