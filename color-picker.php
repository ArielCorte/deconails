<?php

$colors = ['blue', 'red', 'lightgreen', 'orange', 'gray', 'brown', '#01204E', '#028391', '#F6DCAC', '#FEAE6F', '#808836', '#FFBF00', '#FF9A00', '#D10363'];

function colorRound($color)
{

    $queries = $_GET;
    $queries['bg_color'] = $color;
    $url = '/?';
    foreach ($queries as $key => $value) {
        $url = $url.$key.'='.urlencode($value).'&';
    }

    $url = substr($url, 0, -1);

    return <<<HTML
    <a href=$url id="$color" class="color-nail" style="background-color: $color">
    </a>
    HTML;
}

$listColorRound = '';

foreach ($colors as $color) {
    $listColorRound = $listColorRound.colorRound($color);
}

$color_picker = <<<HTML
<div class="color-picker">
    $listColorRound
</div>
HTML;
