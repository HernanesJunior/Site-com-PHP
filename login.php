

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));

        }
        div{
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute; /*deixa caixa de login do tamanho dos elementos de dentro dele */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); /* deixa bem no centro da pagina*/
            padding: 80px;
            border-radius: 15px;  /* deixa a borad arredondada*/
            color: white;
        }
        input{
            padding: 15px;
            border: none;   /* tira a borda da caixa de input  */
            outline: none;  /* retira a borda que aparece quando clicamos no imput */
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%; /*deixa o butao de enviar ocupando todo o espaço da caixa*/
            border-radius: 10px; /*deixa arrendondada*/
            color: white;
            font-size: 15px;
        
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }

        
    </style>
</head>
<body>
    <a href="inicial.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            
        </form>
        
    </div>
    
</body>
</html>