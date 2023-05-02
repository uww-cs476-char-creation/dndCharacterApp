<?php

require '/home/projects/cs476/dndCharacterApp/tcpdf_6_3_2/tcpdf/tcpdf.php'; // require the autoload.php file of the TCPDF library

// Create a new instance of the PDF parser
$parser = new \Smalot\PdfParser\Parser();

// Parse the PDF file and get the data
$pdf = $parser->parseFile('path/to/your/pdf/file.pdf');
$text = $pdf->getText();

// Extract the data you need from the text
// In this example, we're assuming that the data is stored in a specific format and using regular expressions to extract it
$regex = '/Player Name:\s*(.*)\s*Character Name:\s*(.*)\s*Alignment:\s*(.*)\s*Background:\s*(.*)\s*Race:\s*(.*)\s*Character Level:\s*(.*)\s*Class:\s*(.*)/s';
preg_match($regex, $text, $matches);

// Store the extracted data in a PHP array
$data = array(
  'player_name' => trim($matches[1]),
  'character_name' => trim($matches[2]),
  'alignment' => trim($matches[3]),
  'background' => trim($matches[4]),
  'race' => trim($matches[5]),
  'level' => trim($matches[6]),
  'class' => trim($matches[7])
);

// Pass the data to your HTML file
// You can use PHP's built-in function file_get_contents() to read the HTML file into a string
$html = file_get_contents('path/to/your/html/file.html');

// Use PHP's built-in function strtr() to replace placeholders in the HTML with the actual data
$html = strtr($html, $data);

// Output the HTML to the browser
echo $html;

?>

