<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <?php
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];

    $soma = $valor1 + $valor2 + $valor3;

    echo "A soma dos valores é: " . $soma;
    ?>
</body>
</html>
