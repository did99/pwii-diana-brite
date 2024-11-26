<?php
echo "Valor da parcela - EX4";
echo "<br/>";

$produto = 25;
$valortotal = $produto + ($produto * 0.16);

echo "O valor da compra no total é de: $valortotal", "<br/>";

$parcela = $valortotal/10;

echo "O valor da parcela é de: $parcela";

?>