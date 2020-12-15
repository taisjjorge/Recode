<?php 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'fulleletronicos';

    $connect = mysqli_connect($host, $username, $password, $db);
    $connect ->set_charset("utf8");

    if(!$connect){
        die("A conexão falhou".mysqli_connect_error());
    } 
    /*else {
         echo "Conexão estabelecida";
     }*/
 
?>