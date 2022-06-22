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
    <br/>
    <form action="cadastro.php" method = "POST">Nome <br/>
    <input type="text" name ="nome" required /> <br/>    
    Celular <br/>
    <input type="number" name ="celular" required /> <br/>    
    <input type= "submit" value = "Cadastrar">
    </body>

    </html>