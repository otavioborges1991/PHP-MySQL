<div class="flex-row">
    <img class="profile-pic" src="fotos/indisponivel.png" alt="Foto do perfil">
    <div class="flex-row">
        <?php
        echo '<div class="flex-column">';
        echo '<p>Usuário:</p>';
        echo '<p>Tipo:</p>';
        echo '</div>';
        echo '<div class="flex-column">';
        echo $_SESSION["nome"] . '<br>';
        echo $_SESSION['tipo'];
        echo '</div>';
        ?>
    </div>
    <?php
    echo "<a class='botao' href='#'>Meus dados</a>";
    if ($_SESSION['tipo'] == 'admin'){
        echo "<a class='botao'  href='#'>Novo Usuário</a><a class='botao' href='#'>Novo Jogo</a>";
    }
    echo '<a class="botao" href="user-logout.php">Sair</a>';
    ?>
</div>

