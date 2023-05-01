<?php
if (isset($_POST['submit'])) {
    // Include the TCPDF single file version
    require('/home/projects/cs476/dndCharacterApp/tcpdf_6_3_2/tcpdf/tcpdf.php');

    // Create a new TCPDF object
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('dnd-character-pdf');
    $pdf->SetSubject('DND Character');

    // Add a page
    $pdf->AddPage();

    // Set the font and size for the headers
    $pdf->SetFont('helvetica', 'B', 16);

    // Output the headers   
    $pdf->Cell(0, 10, 'Step 1: Character Information', 0, 1, 'C');
    $pdf->Ln();
    $pdf->SetFont('helvetica', '', 14);
    $pdf->Cell(50, 10, 'Player Name:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['pname'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Character Name:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['cname'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Race:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['race'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Class:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['class'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Level:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['charlev'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Allignment', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['align1'] . ' ' . $_POST['align2'], 0, 1, 'L');
    

    // Output the generated PDF to the browser
    $pdf->Output('character-sheet.pdf', 'I');
}
?>