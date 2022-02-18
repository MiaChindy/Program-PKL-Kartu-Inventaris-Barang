<?php
use Illuminate\Support\Facades\Route;

function currency($number)
{
    return str_replace(',', '.', number_format($number));
}

function meter($number)
{
    return str_replace(',','.', number_format($number));
}

?>
