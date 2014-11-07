<?php include_once('header.php'); ?>

<h2>Cadastre-se</h2>
<?php include_once('erro.php'); ?>

<section>
    <form method="post" action="register/singup" name="formRegister">
        <label>
            <span>Nome:</span>
            <input type="text" name="name" required autofocus>
        </label>
        <label>
            <span>E-mail:</span>
            <input type="email" name="email" required>
        </label>
        <label>
            <span>Username:</span>
            <input type="text" name="username" required>
        </label>
        <label>
            <span>Senha:</span>
            <input type="password" name="password" required>
        </label>
        <label>
            <span>Repetir Senha:</span>
            <input type="password" name="confirmPassword" required>
        </label>
        <input type="submit" value="Cadastrar">
    </form>
</section>

<?php include_once('footer.php'); ?>