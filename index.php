<?php

include_once 'Lib' . DIRECTORY_SEPARATOR . 'House.php';

$home = new House(80, 25, 5, 'peach colour', 'street Troickay, 21g');
//$home->long = 80;
//$home->width = 25;
//$home->floors = 5;
//$home->color = 'peach colour';
//$home->address = 'street Troickay, 21g';
//$home->showDescription();
echo $home;


