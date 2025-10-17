<?php
    require_once 'includes/banco.php';
    $query = "SELECT email, nome_completo, senha, tipo from usuarios
    WHERE email='" . $_SESSION['email'] . "'";
    $busca = $banco->query($query);
    $registro = $busca->fetch_object();
?>
<form action="user-edit.php" method="post" id="form">
    <h2>Editar informações de usuário</h2>
    <div class="flex-row">
        <fieldset form="form" name="basic-info" class="margin">
            <legend>
                <h3>informações Básicas</h3>
            </legend>
            <div class="flex-row gap padding">
                <div class="flex-column gap">
                    <label for="nome">
                        <p>Nome:</p>
                    </label>
                    <label for="email">
                        <p>E-mail:</p>
                    </label>
                </div>
                <div class="flex-column gap">
                    <input type="text" name="nome" id="nome" maxlength="100" value="<?php echo $registro->nome_completo;?>">
                    <input type="text" name="email" id="email" maxlength="100" value="<?php echo $registro->email;?>">
                </div>
            </div>
            <div class="margin">
                <input type="submit" value="Salvar">
                <input type="reset" value="Reverter">
            </div>
        </fieldset>
        <fieldset form="form" name="user-type-form" class="margin" <?php if ($_SESSION['tipo']!='admin') echo 'disabled'?> title="Somente administradores podem usar esta área">
            <legend>
                <h3>Tipo de usuário</h3>
            </legend>
            <div class="flex-row gap padding">
                <div class="flex-column gap">
                    <label for="tipo">
                        <label for="admin">
                            <p>Admin:</p>
                        </label>
                        <label for="editor">
                            <p>Editor:</p>
                        </label>
                        <label for="visitante">
                            <p>Visitante:</p>
                        </label>
                    </label>
                </div>
                <div class="flex-column gap">
                    <!-- substitua por uma função do php num for loop que detecta o tipo de usuário e bota checked no tipo certo  -->
                    <input type="radio" name="tipo" id="admin">
                    <input type="radio" name="tipo" id="editor">
                    <input type="radio" name="tipo" id="visitante">
                </div>
            </div>
            <div class="margin">
                <input type="submit" value="Salvar">
                <input type="reset" value="Reverter">
            </div>
        </fieldset>
    </div>
    <fieldset class="margin padding">
        <legend>
            <h3>Segurança</h3>
        </legend>
        <div class="flex-row gap">
            <div class="flex-column gap">
                <label for="senha-antiga">
                    <p>Senha Antiga</p>
                </label>
                <label for="senha-nova">
                    <p>Nova Senha</p>
                </label>
                <label for="senha-repita">
                    <p>Repita Nova Senha</p>
                </label>
            </div>
            <div class="flex-column gap">
                <input type="password" name="senha-antiga" id="senha-antiga">
                <input type="password" name="senha-nova" id="senha-nova">
                <input type="password" name="senha-repita" id="senha-repita">

            </div>
        </div>
        <div class="margin">
            <input type="submit" value="Salvar">
            <input type="reset" value="Reverter">
        </div>
    </fieldset>
</form>