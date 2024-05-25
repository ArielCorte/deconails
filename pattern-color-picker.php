<?php

$pattern_colors = ['blue', 'red', 'lightgreen', 'orange', 'gray', '#10439F', '#874CCC', '#C65BCF', '#F27BBD', '#B0C5A4', '#D37676', '#EBC49F', '#F1EF99', '#F9B572'];

function patternColorRound($color)
{

    $queries = $_GET;
    $queries['pattern_color'] = $color;
    $url = '/?';
    foreach ($queries as $key => $value) {
        $url = $url.$key.'='.urlencode($value).'&';
    }

    $url = substr($url, 0, -1);

    return <<<HTML
    <a href=$url id="$color" class="color-round" style="background-color: $color">
    </a>
    HTML;
}

$listColorPattern = '';

foreach ($pattern_colors as $color) {
    $listColorPattern = $listColorPattern.patternColorRound($color);
}

$pattern_color_picker = <<<HTML
<div class="color-picker">
    $listColorPattern
</div>
HTML;
