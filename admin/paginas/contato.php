<div class="card-body">
    <h1 class="text-align">Criar contato</h1>
    <form method="POST">
        <label for="Nome">Nome</label>
        <input type="text" name="Nome" id="Nome" class="form-control" 
        required placeholder="Digite o Nome">
        <br>
        <label for="Email">Email</label>
        <input type="text" name="Email" id="Email" class="form-control" 
        required placeholder="Digite seu email">
        <br>
        <label for="Celular">Celular</label>
        <input type="number" name="Celular" id="Celular" class="form-control" 
        required placeholder="Digite seu numero">
        <br>
        <button type="submit" class="btn btn-success w-100">Salvar contato</button>
    </form>

    <?php if($_POST){ 

        ?>
        <h2>Contato:</h2>
        <b>Nome: </b> <?php echo $_POST['Nome'] ?><br>
        <b>Email: </b> <?php echo $_POST['Email']?><br>
        <b>Celular: </b> <?php echo $_POST['Celular']?><br>
        </p>
    <?php } ?>
</div>
