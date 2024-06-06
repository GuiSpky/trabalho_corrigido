

<?php 
    $login = $_POST['login'] ?? NULL;
    $senha = $_POST['senha'] ?? NULL;

    $loginNaoNull = !empty($login);
    $senhaNaoNull = !empty($senha);

    if($loginNaoNull && $senhaNaoNull){
        if ($login=="aluno" && $senha=="123") {
            echo "<script>location.href='paginas/inicio'</script>";
            }
            $_SESSION["usuario"] = [
                "nome" => $login,
            ];
    }

?>

<div class="login">
    <h1 class="text-align">Efetuar Login</h1>
    <form method="POST">
        <label for="Login">Login</label>
        <input type="text" name="login" id="login" class="form-control" required placeholder="Digite o Login">
        <br>

        <label for="Senha">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control" required placeholder="Digite sua senha">
        <br>
        <button type="submit" class="btn btn-success w-100">Efetuar Login</button> 
        <br>
        <a href="cadastro/esqueceu"
            class="btn btn btn-link w-100">
                <p>Esqueceu a senha?</p>
            </a>

        <a href="cadastro/cadastro"
            class="btn btn btn-link w-100">
                <p>Primeiro acesso!</p>
            </a>
    </form>
</div>


