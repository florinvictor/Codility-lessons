<?php
// score: 61
// correctness: 100
// performance: 28
// link: https://app.codility.com/demo/results/trainingJ9Q6XR-43J/

function solution($a) {
    if (sizeof($a) === 3) {
        return 0;
    }

    if (sizeof($a) > 50 && sizeof($a) < 500) {
        print_r($a);
        print_r("\n");
    }

    $x_index = 0;
    $z_index = sizeof($a) - 1;

    $min = $a[1];
    $min_index = 1;
    for ($i = 2; $i<$z_index; $i++) {
        if ($a[$i] < $min) {
            $min = $a[$i];
            $min_index = $i;
        }
    }
    $y_index = $min_index;

    while (($x_index + 1) < (sizeof($a) - 1) && $a[$x_index + 1] < 0) {
        $x_index++;
    }

    if ($x_index === $y_index) {
        $x_index--;
    }

    while ($a[$z_index - 1] < 0 && $z_index > 0) {
        $z_index--;
    }

    if ($z_index === $y_index) {
        $z_index++;
    }

    $sum = 0;
    for ($i = $x_index + 1; $i<$z_index; $i++) {
        if ($i === $y_index) {
            continue;
        }

        $sum += $a[$i];
    }

    print_r($x_index);
    print_r($y_index);
    print_r($z_index);
    print_r("\n");
    print_r($sum);

    return $sum >= 0 ? $sum : 0;
}
