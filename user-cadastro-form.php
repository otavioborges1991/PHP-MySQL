<form action="cadastro-usuario.php" method="post">
    <fieldset class="margin">
        <legend>
            <h2>Cadastro de novo usuário</h2>
        </legend>
        <div class="flex-row margin">
            <div class="flex-column gap margin justify-right">
                <label for="email">E-mail:</label>
                <label for="nome">Nome Completo:</label>
                <label for="tipo">Tipo de conta:</label>
                <label for="senha1">Senha:</label>
                <label for="senha2">Repita a senha:</label>
            </div>
            <div class="flex-column gap margin">
                <input type="text" name="email" id="email" placeholder="usuario@usuario.com" required>
                <input type="text" name="nome" id="nome" placeholder="Your Entire Name" required>
                <select name="tipo" id="tipo">
                    <option value="leitor">Usuário Padrão</option>
                    <option value="editor">Editor Autorizado</option>
                    <option value="admin">Administrador do Sistema</option>
                </select>
                <input type="password" name="senha1" id="senha1" placeholder="senha" minlength="10" maxlength="20" required>
                <input type="password" name="senha2" id="senha2" placeholder="repita sua senha" minlength="10" maxlength="20"  required>
            </div>
            <div class="flex-column margin gap flex-center-center">
                <input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar">
            </div>
        </div>
    </fieldset>

</form>