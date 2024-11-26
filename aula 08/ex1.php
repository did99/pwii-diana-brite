<?php
echo "Cálculo de desconto - Ex 1";
echo "<br/>";
$produto1 = 50;
$produto2 = 20;
$valortotal = 70;

$desconto1 = ($produto1 * 0.8);
$desconto2 = ($produto2 * 0.11);

$valorfinal = ($produto1 - $desconto1) + ($produto2 + $desconto2)
echo "O valor final a ser pago pelos dois produtos é de: $valorfinal "
?>