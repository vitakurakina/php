<?php
$day = 4;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'its a working day';
        break;
    case 6:
    case 7:
        echo 'its a weekend day';
        break;
    default:
        echo 'unknown day';
        break;
}

echo '<br/> result using match:<br/>';

$result = match ($day) {
    1, 2, 3, 4, 5 => 'working day',
    6, 7 => 'weekend day',
    default => 'unknown',
};

echo $result;
?>


