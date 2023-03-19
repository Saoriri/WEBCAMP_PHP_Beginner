<?php
$i = 123;
if ($i <= 100) {
    echo "100以下 \n";
} else {
    echo "100を超える \n";
}

$i = 123;

echo "50未満 \n";
var_dump($i < 50);

echo "100未満 \n";
var_dump($i < 100);

echo "150未満 \n";
var_dump($i < 150);

echo "150以上 \n";
var_dump($i >= 150);