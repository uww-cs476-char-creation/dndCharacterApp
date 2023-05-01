<?php
if (isset($_POST['submit'])) {
    // Include the TCPDF single file version
    require('/home/projects/cs476/dndCharacterApp/tcpdf_6_3_2/tcpdf/tcpdf.php');

    // Get the HTML content of the form
    $html = file_get_contents('from-scratch.html');

    // Get the user input from the form
    $name = $_POST['name'];
    $race = $_POST['race'];
    $class = $_POST['class'];
    $level = $_POST['level'];

    // Replace placeholders in the HTML with the user input
    $html1 = str_replace('{{name}}', $name, $html);
    $html = str_replace('{{race}}', $race, $html);
    $html = str_replace('{{class}}', $class, $html);
    $html = str_replace('{{level}}', $level, $html);

    // Create a new TCPDF object
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('dnd-character-pdf');
    $pdf->SetSubject('DND Character');

    // Add a page
    $pdf->AddPage();

    // Write the HTML content to the PDF
    $pdf->writeHTML($html1);

    // Output the generated PDF to the browser
    $pdf->Output('character-sheet.pdf', 'I');
}
?>