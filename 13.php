<?php
/*
 * Заданы две переменные: s - длина участка, который проехал автомобиль; t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.
 */
$s = 162; // km
$t = 2; // h
$km = $s / $t; // km/h
$m = ($s * 1000) / ($t * 3600); // m/s
echo "Cкорость автомобиля на заданном участке $km км/час и {$m} м/сек";
