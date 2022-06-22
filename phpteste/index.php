<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <center><h2>Cadastro de Clientes</h2></center>
    <hr/>
    <center> <a href="cadcliente.php"> Cadastrar novo Cliente</a></center>
    <center>
    <br/>
    <table border="1">
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Celular</td>
        <td>Ações</td>
    </tr>
        <?php
        include "conecta.php";
        $pesquisa = mysqli_query($conn,"SELECT * FROM cliente");
        $row = mysqli_num_rows($pesquisa);
        if($row > 0 ){
            while($cliente = $pesquisa->fetch_array()){//fetch_array (associativo)
                $id = $cliente["id"];
                echo "<tr>";
                echo "<td>".$cliente["id"]."</td>";
                echo "<td>".$cliente["nome"]."</td>";
                echo "<td>".$cliente["celular"]."</td>";
                echo "<td><a href='editar.php?id=$id'>Editar</a> |<a href='excluir.php?id=$id'> Excluir</a></td>";
                echo "<tr/>";
            }mysqli_close ($conn);
        }else{
            echo "Não há clientes para listar!";
            echo "</tr>";
            mysqli_close($conn);
        }
        ?>
    </table>
    <?php echo "<b>Número de Registos: </b>".$row;?>
    </center>
</body>
</html>