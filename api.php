<?php
    
    /* echo "Datos en get\n";
    print_r($_GET);
    echo "Datos en post\n";
    print_r($_POST);
 */
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operador = $_POST['operación'];

    
    switch ($operador) {
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
            $solucion = $num1 / $num2 ;
            $todo = "de la división es {$solucion}";
            break; 
        case '%':
            $solucion = $num1 % $num2 ;
            $todo = "de la operación modular es {$solucion}";
            break;       
        default:
            
            break;
    }

    echo "El resultado {$todo}"

    /* switch ($operador) {
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
            $solucion = $num1 / $num2 ;
            $todo = "de la división es {$solucion}";
            break; 
        case '%':
            $solucion = $num1 % $num2 ;
            $todo = "de la operación modular es {$solucion}";
            break;       
        default:
            
            break;
    }

    echo "El resultado {$todo}" */
?>
