<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    
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
    
    <form class="formulario-contato">
        <div class="formulario-grupo">
            <label for="">Nome</label>
            <input type="text">
        </div>
        <div class="formulario-grupo">
            <label>Mensagem</label>
            <textarea></textarea>
            <input type="submit" value="Enviar">
        </div>
    </form>

    <footer>
        <?php
            include_once('./includes/footer.html');
        ?>
    </footer>

    <script src="./js/script.js"></script>
</body>
</html>