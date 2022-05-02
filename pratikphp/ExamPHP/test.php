<?php

require "forme.php";
require "carre.php";
require "triangle.php";

$andy = new carre;
$dano = $andy->aire();
echo "$dano".PHP_EOL;

$hello = new triangle;
$dudu = $hello->aire();
echo $dudu;