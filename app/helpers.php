<?php

function getValueFromSettingsObj($obj, $key) {
    return $obj->where('key', $key)->first()->value;
}

function currentLocale() {
    return \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();
}

function encodeIfIsset(array $array, string $key) {
    if(isset($array[$key])) {
        return json_encode($array[$key]);
    } else {
        return null;
    }
}