<?php

    include_once __DIR__ . '/db/db.php'; // recupero il paragrafo
    include_once __DIR__ . '/partials/functions.php'; // elaboro il paragrafo

    $splittedParagraph = splitParagraph($paragraph);


    echo '<pre>';

    foreach ($splittedParagraph as $paragraph) {
        echo "{$paragraph}\n <hr>";
    }

    echo '</pre>';
?>