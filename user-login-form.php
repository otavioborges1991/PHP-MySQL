<header>
    <h1>Login</h1>
</header>
<fieldset class="margin padding">
    <legend>
        Formulário de entrada
    </legend>
    <form action="user-login.php" method="post" class="flex-row margin">
        <i class="material-symbols-outlined">account_circle</i>
        <input type="text" name="usuario" id="usuario" placeholder="e-mail" required maxlength="100">
        <i class="material-symbols-outlined">key</i>
        <input type="password" name="senha" id="senha" required placeholder="senha" maxlength="10">
        <input class="margin-horizontal" type="submit" value="Entrar">
    </form> 
</fieldset>