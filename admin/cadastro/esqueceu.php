<div class="login">
    <h1 class="text-alight">Recuper de senha</h1>
    <form method="POST">
        <label for="Email">Email</label>
        <input type="text" name="Email" id="Email" class="form-control" required placeholder="Digite o Email">
        <br>

        <button type="submit" class="btn btn-warning w-100">Enviar código</button> 
        <br>
        <a onclick="javascript:cancelar()"
            class="btn btn btn-link w-100">
                <p>Cancelar</p>
            </a>

    </form>

    <?php 
        if($_POST['Email']){?>

        <form method="POST">
        <label for="codigo">Código</label>
        <input type="text" name="codigo" id="codigo" class="form-control" required placeholder="">
        <br>

        <button type="submit" class="btn btn-warning w-100">Enviar código</button> 
        <?php 
    }

    $codigo = $_POST['codigo'] ?? null;

    $codigoNaoNull = !empty($codigo);

    if( $codigoNaoNull ){
        if($codigo == 'teste'){
            echo "<script>location.href='cadastro/novaSenha'</script>";
        }
    }
        
    ?>
</div>

<script>
    function cancelar(){
        location.href="paginas/login"
    }
</script>