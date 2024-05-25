<?php

include 'patterns.php';

function finger($num)
{
    return <<<HTML
    <div class="finger finger-$num">
    <div class="nail nail-$num" style="background-color: {$_GET['bg_color']}">
        {$GLOBALS['PATTERN_ASOC'][$_GET['pattern']]}
    </div>
    </div>
    HTML;
}

$finger = 'finger';

$hand = <<<HTML
<div class="hand">
{$finger(1)}
{$finger(2)}
{$finger(3)}
{$finger(4)}
{$finger(5)}
</div>
HTML;
