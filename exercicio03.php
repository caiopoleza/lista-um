<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Verificar de Numero</title>
</head>

<body>
    
    <form method="POST">
        <label for="numero">Informe um numero:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        
        if ($numero > 0) {
            echo "O número $numero e positivo.";
        } elseif ($numero < 0) {
            echo "O numero $numero e negativo.";
        } else {
            echo "O número e zero.";
        }
    }
    ?>
</body>

</html>