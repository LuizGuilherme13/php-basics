<?php

/* 
4. Acerte o número aleatório entre 0 e 100.
*/

function in_range($num, $min, $max, $random)
{
    $interval = abs($num - $random);

    if ($interval >= $min && $interval <= $max) {
        return true;
    }

    return false;
}

$random = rand(0, 100);

do {
    $num = readline("Acerte o número entre 0 - 100 \n=> ");
    $ok = false;

    if ($num == $random) {
        $ok = true;
        echo "Parabéns! Você acertou! \u{1F389}", PHP_EOL;
    } else {
        if (in_range($num, 0, 14, $random)) {
            echo "Fervendo... \u{1F975} ";
        } else if (in_range($num, 15, 29, $random)) {
            echo "Quente... \u{1F525} ";
        } else if (in_range($num, 30, 44, $random)) {
            echo "Esquentando... \u{1F525} ";
        } else if (in_range($num, 45, 59, $random)) {
            echo "Morno... \u{1F32B} ";
        } else if (in_range($num, 60, 74, $random)) {
            echo "Esfriando... \u{2744} ";
        } else if (in_range($num, 75, 89, $random)) {
            echo "Frio... \u{2744} ";
        } else if (in_range($num, 90, 100, $random)) {
            echo "Congelando... \u{1F976} ";
        }

        echo "Tente novamente ...", PHP_EOL, PHP_EOL;
    }
} while (!$ok);

