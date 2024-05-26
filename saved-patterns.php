<?php

include 'db.php';

$dbConn = connect();
$sql = $dbConn->prepare('select * from nail_patterns');
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);

$saved_patterns = $sql->fetchAll();

$display_saved = '';

function saved_finger($sp)
{
    return <<<HTML
    <div class="finger finger-saved">
    <div class="nail nail-saved" style="background-color: {$sp['bg_color']}">
        {$GLOBALS['PATTERN_ASOC'][$sp['pattern']]($sp['pattern_color'])}
    </div>
    </div>
    HTML;
}

$saved_finger = 'saved_finger';

foreach ($saved_patterns as $sp) {
    $display_saved = $display_saved.<<<HTML
        <div>
            {$saved_finger($sp)}
        </div>
    HTML;
}
