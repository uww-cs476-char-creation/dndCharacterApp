<?php
require_once('tcpdf/tcpdf.php');

if (isset($_FILES['pdf-file'])) {
  // set the path to the uploaded PDF file
  $pdfPath = $_FILES['pdf-file']['tmp_name'];

  // create a new TCPDF instance
  $pdf = new TCPDF();
  $pdf->setSourceFile($pdfPath);

  //fields to be populated from the PDF file
  $charname = $formFields['Character Name']['value'];
  $alignment = $formFields['Alignment']['value'];
  $background = $formFields['Background']['value'];
  $race = $formFields['Race']['value'];
  $charlevel = $formFields['Character Level']['value'];
  $class = $formFields['Class']['value'];

  // populate the remaining web form fields with the extracted data
  echo '<script>';
  echo 'document.getElementById("cname").value = "'.$charname.'";';
  echo 'document.getElementById("align1").value = "'.substr($alignment, 0, 7).'";'; // separate lawful/neutral/chaotic from good/neutral/evil
  echo 'document.getElementById("align2").value = "'.substr($alignment, 8).'";'; // separate lawful/neutral/chaotic from good/neutral/evil
  echo 'document.getElementById("background").value = "'.$background.'";';
  echo 'document.getElementById("race").value = "'.$race.'";';
  echo 'document.getElementById("level").value = "'.$charlevel.'";';
  echo 'document.getElementById("class").value = "'.$class.'";';
  echo '</script>';
}
?>

