<?php 

function priceFormat($priceFloat) {
    $symbol = 'đ';
    $symbol_thousand = '.';
    $decimal_place = 0;
    $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
    return $price.$symbol;
}

function route($url){
    return '/' . $url;
}