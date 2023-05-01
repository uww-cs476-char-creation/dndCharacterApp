<?php
require_once('tcpdf/tcpdf.php');

if (isset($_FILES['pdf-file'])) {
  // set the path to the uploaded PDF file
  $pdfPath = $_FILES['pdf-file']['tmp_name'];
  
  // create a new TCPDF instance
  $pdf = new TCPDF();
  $pdf->setSourceFile($pdfPath);

  // get the form data from the PDF file
  $formFields = $pdf->getFormFields();
  $name = $formFields['Name']['value'];
  $email = $formFields['Email']['value'];

  // populate the HTML form fields with the extracted data
  echo '<script>';
  echo 'document.getElementById("name").value = "'.$name.'";';
  echo 'document.getElementById("email").value = "'.$email.'";';
  echo '</script>';
}
?>
