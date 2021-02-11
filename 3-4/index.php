<?php

for ($CurrentFahrenheit = -50; $CurrentFahrenheit <= 50; ++$CurrentFahrenheit) {
    // Display the very first temperature
    $CurrentCelcius = ($CurrentFahrenheit - 32) * 5 / 9;
    echo $CurrentFahrenheit . "℉ and " . $CurrentCelcius . "℃<br />";
}
