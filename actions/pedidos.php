<?php 

    require_once "connect.php";

    if(isset($_POST['cadastrar'])) {
        $nome_cliente = $_POST['nome_cliente'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $nome_prod = $_POST['nome_prod'];
        $valor_unit = $_POST['valor_unit'];
        $quantidade = $_POST['quantidade'];
        $valor_total = $_POST['valor_total'];

        $sql = "INSERT INTO pedidos (nome_cliente, endereco, telefone, nome_prod, valor_unit, quantidade, valor_total)
        VALUES (null, '$nome_cliente', '$endereco', '$telefone', '$nome_prod', '$valor_unit', $quantidade, '$valor_total');";
        $result = $connect->query($sql);
    } else {
        echo "olá mundo";
    }


        //mysqli_query($connect, $sql);
        
        //header("Location: ./produtos.php");
        // header indica o local que será exibido pós ação de envio do formulário
    

?>