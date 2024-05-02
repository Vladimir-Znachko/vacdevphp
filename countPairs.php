<?php

function countAdjacentPairs($array)
{
    $pairCount = 0;

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] === $array[$i - 1]) {
            $pairCount++;
        }
    }

    return $pairCount;
}

// Тестовый массив
$array = [1, 1, 2, 2, 2, 3, 3, 4, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9, 10, 10];

// Выводим количество пар одинаковых элементов
echo countAdjacentPairs($array); // выведет 11
