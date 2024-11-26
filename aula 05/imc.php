<?php
echo "Cálculo de IMC - PHP";
echo "<br/>";

$altura = 1.78;
$peso = 100;
$imc = $peso / ($altura * $altura);


if ($imc < 18.5) {
    echo "<br/>";
    echo $imc, " Classificação: Magreza";
} else if ($imc >= 18.5 && $imc <25){
    echo "<br/>";
    echo $imc, " Classificação: Normal";
} else if ($imc >= 25 && $imc <30){
    echo "<br/>";
    echo $imc, " Classificação: Obesidade, Grau: I";
} else if ($imc >= 30 && $imc <40){
    echo "<br/>";
    echo $imc, " Classificação: Obesidade, Grau: II";
} else if ($imc >=40){
    echo "<br/>";
    echo $imc, " Classificação: Obesidade Grave, Grau: III";
}
?>