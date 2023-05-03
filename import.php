<?php

require_once('/home/projects/cs476/dndCharacterApp/tcpdf_6_3_2/tcpdf/tcpdf.php');

// Check if the PDF file was uploaded
if (isset($_FILES['character-sheet'])) {
  $file = $_FILES['character-sheet']['tmp_name'];

  // Create a new TCPDF object
  $pdf = new TCPDF();
  $pdf->setSourceFile($file);

  // Extract the text from the first page of the PDF
  $text = $pdf->getTextByPage(1);

  // Parse the text to extract the relevant information
  preg_match('/Player Name: (.*)/', $text, $matches);
  $player_name = isset($matches[1]) ? $matches[1] : '';
  preg_match('/Character Name: (.*)/', $text, $matches);
  $character_name = isset($matches[1]) ? $matches[1] : '';
  preg_match('/Alignment: (.*)/', $text, $matches);
  $alignment = isset($matches[1]) ? $matches[1] : '';
  preg_match('/Background: (.*)/', $text, $matches);
  $background = isset($matches[1]) ? $matches[1] : '';
  preg_match('/Race: (.*)/', $text, $matches);
  $race = isset($matches[1]) ? $matches[1] : '';
  preg_match('/Character Level: (.*)/', $text, $matches);
  $level = isset($matches[1]) ? $matches[1] : '';
  preg_match('/Class: (.*)/', $text, $matches);
  $class = isset($matches[1]) ? $matches[1] : '';

  // Load the HTML form
  $html = file_get_contents('import.html');

  // Replace the placeholders in the HTML form with the extracted data
  $html = str_replace('{player_name}', $player_name, $html);
  $html = str_replace('{character_name}', $character_name, $html);
  $html = str_replace('{alignment}', $alignment, $html);
  $html = str_replace('{background}', $background, $html);
  $html = str_replace('{race}', $race, $html);
  $html = str_replace('{level}', $level, $html);
  $html = str_replace('{class}', $class, $html);

  // Output the HTML form
  echo $html;
}