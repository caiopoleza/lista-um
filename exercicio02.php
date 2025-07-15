<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular a tabuada de um número.</title>
</head>
<body>

   <form method="POST" action="">
        <label for="Tabuada">Calcular a tabuada:</label>
        <input type="number" id="Tabuada" name="Tabuada" required>
        <button type="submit" name="Tabuada">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST')saq

    if(isset($_POST['Tabuada'])){
        $numero = $_POST['Tabuada'];
         
        if($numero % 2 == 0){
         echo "O número é Par $numero";

        }else{    

            for($Tabuad = $numero  $i++){
        
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