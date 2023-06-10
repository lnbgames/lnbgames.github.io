<?php
// Load the HTML template
$dom = new DOMDocument;
$dom->loadHTML('<html><body><h1>Hello, world!</h1></body></html>');

// Find the h1 node in the HTML template
$h1_node = $dom->getElementsByTagName('h1')->item(0);

// Output the modified HTML
echo $dom->saveHTML();
?>
