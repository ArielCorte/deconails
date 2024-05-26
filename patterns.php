<?php

$fill = $_GET['pattern_color'];

$star = function ($fill) {
    return <<<HTML
<svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" viewBox="0 0 24 24" fill="$fill" stroke="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
HTML;
};

$moon = function ($fill) {
    return <<<HTML
<svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" viewBox="0 0 24 24" fill="$fill" stroke="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-moon"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>
HTML;
};

$heart = function ($fill) {
    return <<<HTML
<svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" viewBox="0 0 24 24" fill="$fill" stroke="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
HTML;
};

$lightning = function ($fill) {
    return <<<HTML
<svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" viewBox="0 0 24 24" fill="$fill" stroke="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>
HTML;
};

$flower = function ($fill) {
    return <<<HTML
<svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" viewBox="0 0 24 24" fill="$fill" stroke="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flower"><circle cx="12" cy="12" r="3"/><path d="M12 16.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 1 1 12 7.5a4.5 4.5 0 1 1 4.5 4.5 4.5 4.5 0 1 1-4.5 4.5"/><path d="M12 7.5V9"/><path d="M7.5 12H9"/><path d="M16.5 12H15"/><path d="M12 16.5V15"/><path d="m8 8 1.88 1.88"/><path d="M14.12 9.88 16 8"/><path d="m8 16 1.88-1.88"/><path d="M14.12 14.12 16 16"/></svg>
HTML;
};

$GLOBALS['PATTERN_ASOC'] = [
    'star' => $star,
    'moon' => $moon,
    'heart' => $heart,
    'lightning' => $lightning,
    'flower' => $flower,
];

function patternButton($code)
{
    $queries = $_GET;
    $queries['pattern'] = $code;
    $url = '/?';
    foreach ($queries as $key => $value) {
        $url = $url.$key.'='.urlencode($value).'&';
    }

    $url = substr($url, 0, -1);

    $fill = $_GET['pattern_color'];

    return <<<HTML
    <a href="$url">
        <div>
        {$GLOBALS['PATTERN_ASOC'][$code]($fill)}
        </div>
    </a>
    HTML;
}

$patternButton = 'patternButton';

$pattern_picker = <<<HTML
<div class="pattern-picker">
    {$patternButton('star')}
    {$patternButton('moon')}
    {$patternButton('heart')}
    {$patternButton('lightning')}
    {$patternButton('flower')}
</div>
HTML;
