<?php

declare(strict_types=1);

function getWaterState(float $temperature): string
{
    if ($temperature < 0) {
        $state = 'solido';
    } else if ($temperature < 100) {
        $state = 'liquido';
    } else {
        $state = 'gasoso';
    }

    return $state;
}

echo 'O estado da água está ' . getWaterState(15) . PHP_EOL;
