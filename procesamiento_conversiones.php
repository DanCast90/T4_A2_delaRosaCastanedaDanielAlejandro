<?php

$numero=$_POST['conv'];
$num="".$numero;

echo "<h3>Numero Convertido a Binario</h3>".decbin($num)."<br>";
echo "<h3>Numero Convertido a Octal</h3>".decoct($num)."<br>";
echo "<h3>Numero Convertido a Hexadecimal</h3>".dechex($num)."<br>";


// function dec_to($num, $sistema = 2) {
//     $valores_hexa = array(10 => 'A', 11 => 'B', 12 => 'C', 13 => 'D', 14 => 'E', 15 => 'F');
//     if ($sistema > 1 && $sistema < 17) {
//         $num_retornar = array();
//         while ($num > 1) {
//             $residuo = $num % $sistema;
//             $num = floor($num / $sistema);
//             $num_retornar[] = $residuo > 9 ? $valores_hexa[$residuo] : $residuo;
//         }
//         return implode('', array_reverse($num_retornar));
//     }
//     return 'Verifica que el sistema al que deseas convertir sea válido';
// }

?>