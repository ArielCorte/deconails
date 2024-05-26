<?php

include 'hand.php';
include 'color-picker.php';
include 'pattern-color-picker.php';
include 'saved-patterns.php';

// ------

if ($_SERVER['REQUEST_METHOD'] = 'GET') {
    header('Content-Type: text/html');

    echo <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$title</title>
        <link rel="stylesheet" href="nails.css">
    </head>
    <body>
            <main>
            <div class="options">
            <h1>Nails Deco</h1>
            $color_picker
            <div class="pattern-container">
                $pattern_picker
                $pattern_color_picker
            </div>
            </div>
            $hand
            </main>
                <h2>Saved patterns:</h2>
            <div class="saved-grid">
            $display_saved
            </div>
    </body>
    </html>
    HTML;
}
