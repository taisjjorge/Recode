<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./css/estilo.css"> 

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
    crossorigin="anonymous">
    <title>Carrinho</title>
</head>
<body>
    <!-- ###INICIO MENU #### -->
    <header>
        <!-- menu -->
        
        <?php
            include_once('./includes/menu.html');
        ?>
        
        <br><br>
        </header>
    <!-- ### FIM MENU ### -->
    <main>

    <?php
        require_once('./actions/connect.php');
    ?>
<div class="container mt-2 mb-5">
    <form action="./actions/pedidos.php" method="POST">
        <div class="form-group ">
            <label for="nome_cliente">Nome</label>
            <input class="form-control" type="text" 
            name="nome_cliente" id="nome_cliente">
            <label for="endereco">Endereco</label>
            <input class="form-control" type="text" 
            name="endereco" id="endereco">
            <label for="telefone">Telefone</label>
            <input class="form-control" type="text" 
            name="telefone" id="telefone">
            <label for="nome_prod">Nome do Produto</label>
            <input class="form-control" type="text" 
            name="nome_prod" id="nome_prod">
            <label for="valor_unit">Valor Unitário</label>
            <input class="form-control" type="text" 
            name="valor_unit" id="valor_unit">
            <label for="quantidade">Quantidade</label>
            <input class="form-control" type="text" 
            name="quantidade" id="quantidade">
            <label for="valor_total">Valor Total</label>
            <input class="form-control" type="text" 
            name="valor_total" id="valor_total">
            <button class="btn btn-primary" type="submit" 
            name="cadastrar">Cadastrar</button>
    </div>
    </form>
</div>


</main>

    <footer>
        <?php
            include_once('./includes/footer.html');
        ?>
    </footer>

</body>
</html>