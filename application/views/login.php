<?php include_once('header.php'); ?>
    
    <section class="login container-fluid">
        <span id="coneLogin"></span>
        <h2>Sing-up</h2>
        <?php include_once('erro_success.php'); ?>
        <form method="post" action="<?php echo base_url(); ?>login/logar" class="form-signin" id="form-login">
            <input type="text" name="username" placeholder="Username" class="form-control" required autofocus>
            <input type="password" name="password" placeholder="Password" class="form-control" required>
            <input type="submit" value="Entrar" class="btn btn-lg btn-danger btn-block">
        </form>
        <a href="register" class="btn btn-block btn-warning btn-register">Cadastre-se</a>
    </section>

<?php include_once('footer.php'); ?>