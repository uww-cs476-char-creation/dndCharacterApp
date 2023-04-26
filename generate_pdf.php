<?php
if (isset($_POST['submit'])) {
    // Get the HTML content of the form
    $html = file_get_contents('from-scratch.html');

    // Create a new PDF document
    $pdf = new \PDFlib();

    // Set document information
    $pdf->set_info('Creator', 'Your Name');
    $pdf->set_info('Author', 'Your Name');
    $pdf->set_info('Title', 'Form Submission');
    $pdf->set_info('Subject', 'Form Submission');

    // Open a new page
    $pdf->begin_page_ext(0, 0, 'width=a4.width height=a4.height');

    // Define a font
    $font = $pdf->load_font('Helvetica', 'winansi', '');

    // Write the HTML content to the PDF
    $pdf->setfont($font, 12);
    $pdf->fit_textflow($html, 50, 50, 550, 700, '');

    // Close the page
    $pdf->end_page_ext('');

    // Output the generated PDF to the browser
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="character-sheet.pdf"');
    echo $pdf->get_buffer();
}
?>