<?php 

    require_once "connect.php";

    
        $nome_cliente = $_POST['nome_cliente'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $nome_prod = $_POST['nome_prod'];
        $valor_unit = $_POST['valor_unit'];
        $quantidade = $_POST['quantidade'];
        $valor_total = $_POST['valor_total'];

        $sql = "INSERT INTO pedidos (nome_cliente, endereco, telefone, nome_prod, valor_unit, quantidade, valor_total)
        VALUES ('$nome_cliente', '$endereco', '$telefone', '$nome_prod', '$valor_unit', $quantidade, '$valor_total');";
        
        if($connect){
            mysqli_query($connect, $sql);
        } else {
            echo "falha na conexão";
        }
    

        //mysqli_query($connect, $sql);
        
        //header("Location: ./produtos.php");
        // header indica o local que será exibido pós ação de envio do formulário
    

    /* 
    ####################### alternativa2 ####################
    <?php


    include("conexao.php");

    //Confere se esses campos de fato existem com conteúdo dentro:
    if(isset($_POST['nome']) && isset($_POST['mensagem'])){

    echo "Dados recebidos!";

    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];


    $sql = "insert into comentarios (nome, mensagem) values ('$nome', '$mensagem')";

    $result = $conn->query($sql);

    if ($result){
        echo "Dados Inseridos com sucesso!";
    } else {
        echo "Dados não inseridos";
    }
}
?> */


?>

<!-- redireciona para a página inicial pós cadastro pedido -->
<script> 
    window.location.href="../index.php"
</script>