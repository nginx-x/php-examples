<?php

$CurrentFahrenheit = -50;
while ($CurrentFahrenheit <= 50) {
    // Display the very first temperature
    $CurrentCelcius = ($CurrentFahrenheit - 32) * 5 / 9;
    echo $CurrentFahrenheit . "℉ and " . $CurrentCelcius . "℃<br />";

    // Calculations for next iteration
    ++$CurrentFahrenheit;
}
