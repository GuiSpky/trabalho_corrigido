

<div class="card-body">
    <div class="login">
        <h1>Cadastrar nova senha</h1>
        <form method="POST">
        <label for="senha">Nova senha:</label>
        <input type="text" name="senha" id="senha" class="form-control">
        <br>
        <label for="confirmar">Confirmar senha</label>
        <input type="text" name="confirmar" id="confirmar" class="form-control"> <br>
        <button type="submit" class="btn btn-warning w-100">Confirmar</button>
    </div>
</div>

<?php 
    
    $NovaSenha = $_POST['senha'] ?? NULL;
    $ConfirmaSenha = $_POST['confirmar'] ?? NULL;

    if($NovaSenha = $ConfirmaSenha){
        echo "<script>location.href='paginas/login'</script>";
    }

?>