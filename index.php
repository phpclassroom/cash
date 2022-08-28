<?php

require_once 'change.php';

$cents = get_cents();

$fiftyCents = calc_fifty_cents($cents);
$cents = $cents - $fiftyCents * 50;

$twentyCents = calc_twenty_cents($cents);
$cents = $cents - $twentyCents * 20;

$tenCents = calc_ten_cents($cents);
$cents = $cents - $tenCents * 10;

$fiveCents = calc_five_cents($cents);
$cents = $cents - $fiveCents * 5;

$oneCents = calc_one_cents($cents);
$cents = $cents - $oneCents;

$coins = $fiftyCents + $twentyCents + $tenCents + $fiveCents + $oneCents;

echo $coins . PHP_EOL;
echo "Change consists of: $fiftyCents (50¢) , $twentyCents (20¢), $tenCents (10¢), $fiveCents (5¢), and $oneCents (1¢)" . PHP_EOL;