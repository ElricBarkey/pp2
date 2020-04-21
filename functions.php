<?php

function printArr($myArr)
{
    foreach ($myArr as $item)
    {
        echo $item . "<br>";
    }
}

function largest($arr)
{
    return max($arr);
}

function removeDups($dupArr)
{
    return  array_unique($dupArr);
}