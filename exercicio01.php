<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>par ou ímpar</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero_par_impar">Verificar se o número é par ou ímpar:</label>
        <input type="number" id="numero_par_impar" name="numero_par_impar" required>
        <button type="submit" name="verificar_par_impar">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['numero_par_impar'])){
        $numero = $_POST['numero_par_impar'];
        $ehPar = true;
        $ehImpar = false;
        if($numero % 2 == 0){
         echo "O número é Par $numero";

        }else{    
        
            if($numero % 2 <> 0);{
                
                    $ehImpar = false;
                    
                    echo "O número é Impar $numero ";

                };
            };
         
        };
    };

   

   ?>
 
</body>
</html>