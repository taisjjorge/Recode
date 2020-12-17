<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
    crossorigin="anonymous">

    <title>FullStackEletro</title>
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

    <div class="container-categoria">
        <h4>Categorias</h4>
        <ul class="lista-categorias">
            <li>Motorola</li>
            <li>Nokia</li>
            <li>Siemens</li>
            <li>SonyEricsson</li>
        </ul>
    </div>

    <div class="container">
        <div class="row">

    <?php 
        require_once "./actions/connect.php";

        $sql = "SELECT * FROM nossosprodutos";
        $resultado = mysqli_query($connect, $sql);

        while($row=mysqli_fetch_assoc($resultado)){ //para cada 'linha', ele executa a div produtos individualmente
    
    ?>

        <div class="produtos">
            <figure onmouseover="visualiza_info(this)" onmouseout="esconde_info(this)" onclick="exibir_mensagem(this)">
                <img srcset="./imagens/<?php echo $row['imagem'];?>">
                <figcaption class="legenda">
                    <p><?php echo $row['nome'];?></p>
                    <p><?php echo $row['descricao'];?></p>
                    <p><?php echo $row['preco'];?></p>
                </figcaption>
            </figure>
        </div>
    
    <?php 
        } // não fez interpolação(" {}")
    ?>
    
    </div>
</div>


    <footer>
        <?php
            include_once('./includes/footer.html');
        ?>
    </footer>



<script src="./js/script.js"></script>
</body>
</html>