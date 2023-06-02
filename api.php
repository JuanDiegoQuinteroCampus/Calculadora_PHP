<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnvioData</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="api.php" method="post">
        <input type="text" pattern="[0-9-.-,]+" name="num1">
        <select name="operacion">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="text" pattern="[0-9-.-,]+" name="num2">
        <input type="submit" value="=">
    </form>
    <?php
    
    /* echo "Datos en get\n";
    print_r($_GET);
    echo "Datos en post\n";
    print_r($_POST);
 */
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    if(!is_numeric($num1) && !is_numeric($num2)){
        echo "Agrega los números";
    }elseif(!is_numeric($num1)){
        echo "Agrega el primer número";
    }elseif(!is_numeric($num2)){
        echo "Agrega el segundo número";
    }else{
        $todo = "";
        switch ($operacion) {
            case '+':
                $solucion = $num1 + $num2 ;
                $todo = "de la suma es {$solucion}";
                break;
            case '-':
                $solucion = $num1 - $num2 ;
                $todo = "de la resta es {$solucion}";
                break;
            case '*':
                $solucion = $num1 * $num2 ;
                $todo = "de la multiplicación es {$solucion}";
                break;
            case '/':
                $solucion = $num2 != 0 ? $num1 / $num2 :NAN ;
                if (!is_nan($solucion)) {
                    
                } else {
                    echo "Error: División por cero. ";
                }
                $todo = "de la división es {$solucion}";
                break; 
            case '%':
                $solucion = $num1 % $num2 ;
                $todo = "de la operación modular es {$solucion}";
                break;       
            default:
                
                break;
        }
    
        echo "El resultado {$todo}";
    };
}
?>
</body>
</html>


