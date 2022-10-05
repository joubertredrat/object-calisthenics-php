<?php

declare(strict_types=1);

function getWaterState(float $temperature): string
{
    if ($temperature < 0) {
        return 'solido';
    }
    if ($temperature < 100) {
        return 'liquido';
    }

    return 'gasoso';
}

echo 'O estado da água está ' . getWaterState(15) . PHP_EOL;
