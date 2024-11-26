<?php
echo "Cálculo de IMC - PHP";
echo "<br/>";
$altura = 1.78;
$peso = 100;
$imc = $peso / ($altura * $altura);

switch($imc){
    case ($imc < 18.5): 
        echo "Classificação: Magreza";
        break;
        case ($imc >= 18.5 && $imc <25):
            echo "Classificação: Normal";
            break;
          case ($imc >= 25 && $imc <30):
            echo "Classificação: Obesidade, Grau: I";
            break;
            case ($imc >=40):
                echo "Classificação: Obesidade Grave, Grau: III";
                break;  
    default:
                echo "Esse IMC não existe";                
}
?>