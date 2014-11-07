<?php include_once('header.php'); ?>
<?php include_once('erro.php'); ?>
    
    <section>
        <form method="post" action="<?php echo base_url(); ?>login/logar">
            <input type="text" name="username" placeholder="Username" required autofocus>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Entrar">
        </form>
    </section>
    <a href="register">Cadastre-se</a>
        
<?php include_once('footer.php'); ?>