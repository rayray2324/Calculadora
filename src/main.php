<?php 
require_once __DIR__.'/../vendor/autoload.php';

use APP\model\calculadora;

$num1 = $_POST['num1']; 
$num2 = $_POST['num2'];
$op = $_POST['op'];

$calc = new calculadora();

switch ($op) {
    case '+' :
        $result = $calc -> somar($num1, $num2);
        break;
    case '-' :
        $result = $calc -> subtrair($num1, $num2);
        break;
    case '*' :
        $result = $calc -> multiplicar($num1, $num2);
        break;
    case '/' :
        $result = $calc -> dividir($num1, $num2);
        break;
        default:
        $result = 'operacao invalida';

}

echo "Resultado: $result ";