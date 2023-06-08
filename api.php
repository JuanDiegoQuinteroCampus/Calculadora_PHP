<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    
</head>
<body>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: black;
        }
        
        .calculator {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        
        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .form input[type="text"],
        .form select {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 5px;
        }
        
        .form select {
            width: 50%;
            display: flex;
        }
        
        .form input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .form input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .result {
            text-align: center;
            font-size: 18px;
            margin-top: 10px;
        }
        
        .columns {
            display: flex;
        }
        
        .column {
            flex: 1;
            padding: 10px;
        }
    </style>
    <div class="calculator">

        <form action="api.php" method="post" class="form">
        <div class="columns">
            <div class="column">
            <select name="operacion">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            </div>
            <div class="column">
            <input type="text" pattern="[0-9-.-,]+" name="num1">
            <input type="text" pattern="[0-9-.-,]+" name="num2">
            <input type="submit" value="="></div>
            </div>
        </form>
        
        <div class="result">
            <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operacion = $_POST['operacion'];
    
                if (!is_numeric($num1) && !is_numeric($num2)) {
                    echo "Agrega los números";
                } elseif (!is_numeric($num1)) {
                    echo "Agrega el primer número";
                } elseif (!is_numeric($num2)) {
                    echo "Agrega el segundo número";
                } else {
                    $todo = "";
                    switch ($operacion) {
                        case '+':
                            $solucion = $num1 + $num2;
                            $todo = "de la suma es {$solucion}";
                            break;
                        case '-':
                            $solucion = $num1 - $num2;
                            $todo = "de la resta es {$solucion}";
                            break;
                        case '*':
                            $solucion = $num1 * $num2;
                            $todo = "de la multiplicación es {$solucion}";
                            break;
                        case '/':
                            $solucion = $num2 != 0 ? $num1 / $num2 : NAN;
                            if (!is_nan($solucion)) {
                                
                            } else {
                                echo "Error: División por cero. ";
                            }
                            $todo = "de la división es {$solucion}";
                            break;
                        case '%':
                            $solucion = $num1 % $num2;
                            $todo = "de la operación modular es {$solucion}";
                            break;
                        default:
                            break;
                    }
    
                    echo "El resultado {$todo}";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
