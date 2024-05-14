<?php

# setup autoloading
require __DIR__ . '/../vendor/autoload.php';

use Smalot\PdfParser\Parser;

// Parse PDF file and build necessary objects.
$parser = new Parser;
$pdf = $parser->parseFile('sample.pdf');

$data = [
    'metadata' => $pdf->getDetails(),
    'body' => $pdf ->getText()
];

echo "<pre>";
var_dump($data);
echo "</pre>";