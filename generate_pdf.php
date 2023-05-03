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

    $pdf->Cell(0, 10, 'Step 2: Ability Scores', 0, 1, 'C');
    $pdf->Ln();
    $pdf->SetFont('helvetica', '', 14);
    $pdf->Cell(50, 10, 'Strength:', 0, 0, 'R');
    $pdf->Cell(0, 10, isset($_POST['strsave']) ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Dexterity:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['dex'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Constitution:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['con'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Intelligence:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['int'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Wisdom:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['wis'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Charisma:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['cha'], 0, 1, 'L');

    $pdf->Cell(0, 10, 'Step 3: Proficiency, Saving Throws and Abilities', 0, 1, 'C');
    $pdf->Ln();
    $pdf->SetFont('helvetica', '', 14);
    $pdf->Cell(50, 10, 'Proficiency Bonus:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['profbonus'], 0, 1, 'L');

    $pdf->Cell(0, 10, 'Saving Throws and Abilities', 0, 1, 'C');
    // Saving Throws
    $pdf->Cell(0, 10, 'Saving Throws', 0, 1, 'C');
    $pdf->Cell(50, 10, 'Strength:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['strsave'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Dexterity:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['dexsave'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Constitution:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['consave'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Intelligence:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['intsave'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Wisdom:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['wissave'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Charisma:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['chasave'] ? 'Yes' : 'No', 0, 1, 'L');
    // Abilities
    $pdf->Cell(0, 10, 'Abilities:', 0, 1, 'C');
    $pdf->Cell(50, 10, 'Acrobatics:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['acrobatics'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Animal Handling:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['animalhandling'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Arcana:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['arcana'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Athletics:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['athletics'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Deception:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['deception'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'History:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['history'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Insight:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['insight'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Intimidation:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['intimidation'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Investigation:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['investigation'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Medicine:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['medicine'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Nature:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['nature'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Perception:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['perception'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Performace:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['performance'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Persuasion:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['persuasion'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Religion:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['religion'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Slight of Hand:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['slight'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Stealth:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['stealth'] ? 'Yes' : 'No', 0, 1, 'L');
    $pdf->Cell(50, 10, 'Survival:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['survival'] ? 'Yes' : 'No', 0, 1, 'L');

    $pdf->Cell(0, 10, 'Step 4: Battle Stats', 0, 1, 'C');
    $pdf->Ln();
    $pdf->SetFont('helvetica', '', 14);
    $pdf->Cell(50, 10, 'Armor Class:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['ac'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Initiative:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['init'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Speed:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['speed'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Max HP', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['mhp'], 0, 1, 'L');
    $pdf->Cell(50, 10, '# of Hit Dice:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['hitdice'], 0, 1, 'L');

    $pdf->Cell(0, 10, 'Step 5: Abilities, Equipment, Spellcasting, Etc.', 0, 1, 'C');
    $pdf->Ln();
    $pdf->SetFont('helvetica', '', 14);
    $pdf->Cell(50, 10, 'Currency:', 0, 0, 'R');
    $pdf->Cell(50, 10, 'Copper:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['cop'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Silver:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['sil'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Electrum:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['ele'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Gold:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['gold'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Platinum:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['plat'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Languages and Proficiencies:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['lang'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Equipment:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['equip'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Personality Traits:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['traits'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Spells:', 0, 0, 'R');
    $pdf->Cell(0, 10, $_POST['spells'], 0, 1, 'L');

    $html = <<<EOF
    <!-- EXAMPLE OF CSS STYLE -->
    <style>
        h1 {
            color: navy;
            font-family: times;
            font-size: 24pt;
            text-decoration: underline;
        }
        p.first {
            color: #003300;
            font-family: helvetica;
            font-size: 12pt;
        }
        p.first span {
            color: #006600;
            font-style: italic;
        }
        p#second {
            color: rgb(00,63,127);
            font-family: times;
            font-size: 12pt;
            text-align: justify;
        }
        p#second > span {
            background-color: #FFFFAA;
        }
        table.first {
            color: #003300;
            font-family: helvetica;
            font-size: 8pt;
            border-left: 3px solid red;
            border-right: 3px solid #FF00FF;
            border-top: 3px solid green;
            border-bottom: 3px solid blue;
            background-color: #ccffcc;
        }
        td {
            border: 2px solid blue;
            background-color: #ffffee;
        }
        td.second {
            border: 2px dashed green;
        }
        div.test {
            color: #CC0000;
            background-color: #FFFF66;
            font-family: helvetica;
            font-size: 10pt;
            border-style: solid solid solid solid;
            border-width: 2px 2px 2px 2px;
            border-color: green #FF00FF blue red;
            text-align: center;
        }
        .lowercase {
            text-transform: lowercase;
        }
        .uppercase {
            text-transform: uppercase;
        }
        .capitalize {
            text-transform: capitalize;
        }
    </style>
    
    <table class="first" cellpadding="4" cellspacing="6">
     <tr>
        <td width="100" align="center"><b>Player Name</b></td>
        <td width="100" align="center" bgcolor="#FFFF00"><b>Character Name</b></td>
        <td width="100" align="center"><b>Alignment</b></td>
        <td width="100" align="center"> <b>Background</b></td>
        <td width="100" align="center"><b>Race</b></td>
        <td width="100" align="center"><b>Character Level</b></td>
        <td width="100" align="center"><b>Class</b></td>
     </tr>
     <tr>
        <td width="100" align="center">Player Name</td>
        <td width="100" align="center">Character Name</td>
        <td width="100" align="center">Alignment</td>
        <td width="100" align="center">Background</td>
        <td width="100" align="center">Race</td>
        <td width="100" align="center">Character Level</td>
        <td width="100" align="center">Class</td>
     </tr>
    </table>
    EOF;
    
    // output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');

    // Output the generated PDF to the browser
    $pdf->Output('character-sheet.pdf', 'I');
}
?>