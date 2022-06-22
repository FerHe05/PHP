<?php
    include "conecta.php";
    $id = $_GET["id"];
    echo $id;
    $sql = "DELETE FROM cliente WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        mysql_close($conn);
        header("Location: index.php");
    }
?>