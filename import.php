<?php

require_once('/home/projects/cs476/dndCharacterApp/tcpdf_6_3_2/tcpdf/tcpdf.php');

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if a PDF file was uploaded
    if (isset($_FILES['pdfFile']) && $_FILES['pdfFile']['error'] === UPLOAD_ERR_OK) {

        // Create a new TCPDF instance
        $pdf = new TCPDF();

        // Get the contents of the uploaded PDF file
        $pdfData = file_get_contents($_FILES['pdfFile']['tmp_name']);

        // Extract the text from the PDF file
        $text = $pdf->getTextFromPdfData($pdfData);

        // Parse the text to extract the relevant data
        $playerName = extractValue($text, 'Player Name:');
        $characterName = extractValue($text, 'Character Name:');
        $alignment = extractValue($text, 'Alignment:');
        $background = extractValue($text, 'Background:');
        $race = extractValue($text, 'Race:');
        $level = extractValue($text, 'Level:');
        $class = extractValue($text, 'Class:');

        // Load the import.html file into a string variable
        $html = file_get_contents('import.html');

        // Replace the placeholders in the HTML string with the extracted data
        $html = str_replace('{player_name}', $playerName, $html);
        $html = str_replace('{character_name}', $characterName, $html);
        $html = str_replace('{alignment}', $alignment, $html);
        $html = str_replace('{background}', $background, $html);
        $html = str_replace('{race}', $race, $html);
        $html = str_replace('{level}', $level, $html);
        $html = str_replace('{class}', $class, $html);

        // Output the modified HTML string
        echo $html;

    } else {
        // Handle errors uploading the file
        echo "Error uploading PDF file.";
    }
}

/**
 * Extracts a value from a text string by searching for a keyword and returning the text after it.
 */
function extractValue($text, $keyword) {
    $startPos = strpos($text, $keyword);
    if ($startPos !== false) {
        $startPos += strlen($keyword);
        $endPos = strpos($text, "\n", $startPos);
        if ($endPos !== false) {
            return trim(substr($text, $startPos, $endPos - $startPos));
        }
    }
    return "";
}

?>
