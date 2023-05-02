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

<div id="step-1">
    <h2>Step 1: Character Info, Race, and Class</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <p>Player Name</p>
            </div>
            <div class="col-lg">
                <p>Character Name</p>
            </div>
            <div class="col-lg">
                <p>Alignment</p>
            </div>
            <div class="col-lg">
                <p>Background</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <p>Race</p>
            </div>
            <div class="col-lg">
                <p>Character Level</p>
            </div>
            <div class="col-lg">
                <p>Class</p>
            </div>
        </div>
    </div>
</div>

<br><br>

<div id="step-2">
    <h2>Step 2: Assigning Ability Scores</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <button type="button" id="rollstats">Roll 6 random stat numbers</button>
            </div>
            <div class="col-lg"></div>
            <div class="col-lg">
                    <button type="button" id="sarray">Get Standard Array</button>
            </div>
        </div>
    </div>
    <div id="rolledstats"></div><br>
        <script src = "statroller.js"></script>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <label for="strength">Strength (Str):</label>
                    <input type="number" id="strength" max=20 min=1 name="str">
                    <label>[+X]</label><br>
                </div>
                
                <div class="col-sm">
                    <label for="dexterity">Dexterity (Dex):</label>
                    <input type="number" id="dexterity" max=20 min=1 name="dex">
                    <label>[+X]</label><br>
                </div>

                <div class="col-sm">
                    <label for="consitution">Constitution (Con):</label>
                    <input type="number" id="constitution" max=20 min=1 name="con">
                    <label>[+X]</label><br>
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <label for="intelligence">Intelligence (Int):</label>
                    <input type="number" id="intelligence" max=20 min=1 name="int">
                    <label>[+X]</label><br>
                </div>
                
                <div class="col-sm">
                    <label for="wisdom">Wisdom (Wis):</label>
                    <input type="number" id="wisdom" max=20 min=1 name="wis">
                    <label>[+X]</label><br>
                </div>

                <div class="col-sm">
                    <label for="charisma">Charisma (Cha):</label>
                    <input type="number" id="charisma" max=20 min=1 name="cha">
                    <label>[+X]</label><br>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg"></div>
                <div class="col-lg">
                    <button type="button" id="commitstats">Update Ability Scores</button>
                </div>
                <div class="col-lg"></div>
            </div>
        </div>
    </div>

    <br><br>

<div id="step-3">
    <h2>Step 3: Proficiency, Saving Throws and Abilities</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg"></div>
            <div class="col-lg">
                <label for="profbon">Proficiency Bonus:</label>
                <input type="number" id="profbon" max=6 min=2 name="profbonus" value=2>
            </div>
            <div class="col-lg"></div>
        </div>
    </div>
    <p>These parts will mostly be filled out automatically by using your Stats. Click the checkmark near each 
        Saving Throw or Ability you have proficiency in.
    </p>
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <h3>Saving Throws</h3>
                <input type="checkbox" id="strsave" value="">
                <label for="strsave">Strength</label>
                <br>
                <input type="checkbox" id="dexsave" value="">
                <label for="dexsave">Dexterity</label>
                <br>
                <input type="checkbox" id="consave" value="">
                <label for="consave">Constitution</label>
                <br>
                <input type="checkbox" id="intsave" value="">
                <label for="intsave">Intelligence</label>
                <br>
                <input type="checkbox" id="wissave" value="">
                <label for="wissave">Wisdom</label>
                <br>
                <input type="checkbox" id="chasave" value="">
                <label for="chasave">Charisma</label>
                <br>
            </div>

            <div class="col-lg"></div>
            
            <div class="col-lg">
                <h3>Abilities</h3>
                <input type="checkbox" id="acrobatics" value="">
                <label for="acrobatics">Acrobatics (Str)</label>
                <br>
                <input type="checkbox" id="animalhandling" value="">
                <label for="animalhandling">Animal Handling (Wis)</label>
                <br>
                <input type="checkbox" id="arcana" value="">
                <label for="arcana">Arcana (Int)</label>
                <br>
                <input type="checkbox" id="athletics" value="">
                <label for="athletics">Athletics (Str)</label>
                <br>
                <input type="checkbox" id="deception" value="">
                <label for="deception">Deception (Cha)</label>
                <br>
                <input type="checkbox" id="history" value="">
                <label for="history">History (Int)</label>
                <br>
            </div>

            <div class="col-lg">
                <br><br>
                <input type="checkbox" id="insight" value="">
                <label for="insight">Insight (Wis)</label>
                <br>
                <input type="checkbox" id="intimidation" value="">
                <label for="intimidation">Intimidation (Cha)</label>
                <br>
                <input type="checkbox" id="investigation" value="">
                <label for="investigation">Investigation (Int)</label>
                <br>
                <input type="checkbox" id="medicine" value="">
                <label for="medicine">Medicine (Wis)</label>
                <br>
                <input type="checkbox" id="nature" value="">
                <label for="nature">Nature (Int)</label>
                <br>
                <input type="checkbox" id="perception" value="">
                <label for="perception">Perception (Wis)</label>
                <br>
            </div>

            <div class="col-lg">
                <br><br>
                <input type="checkbox" id="performance" value="">
                <label for="performance">Performance (Cha)</label>
                <br>
                <input type="checkbox" id="persuasion" value="">
                <label for="persuasion">Persuasion (Cha)</label>
                <br>
                <input type="checkbox" id="religion" value="">
                <label for="religion">Religion (Int)</label>
                <br>
                <input type="checkbox" id="sleight" value="">
                <label for="sleight">Sleight of Hand (Dex)</label>
                <br>
                <input type="checkbox" id="stealth" value="">
                <label for="stealth">Stealth (Dex)</label>
                <br>
                <input type="checkbox" id="survival" value="">
                <label for="survival">Survival (Wis)</label>
                <br>
            </div>
        </div>
    </div>
</div>


<br><br>

<div id="step-4">
    <h2>Step 4: Battle Stats</h2>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <label for="ac">Armor Class:</label>
            <input type="number" id="batstats" name="ac"><br>
        </div>

        <div class="col-sm">
            <label for="initiative">Initiative:</label>
            <input type="number" id="batstats" name="init">
        </div>
            <div class="col-sm">
                
                <label for="speed">Speed:</label>
                <input type="number" id="batstats" name="speed">
            </div>
            <div class="col-sm">
                <label for="mhp">Max HP:</label>
                <input type="number" id="batstats" name="mhp"><br><br>
            </div>
            <div class="col-sm">
                <label for="nhd"># of Hit Dice:</label>
                <input type="number" id="batstats" name="hitdice">
            </div>
        </div>
    </div>
</div>

<br><br>

<div id="step-5">
    <h2>Step 5: Abilities, Equipment, Spellcasting, Etc.</h2>

    <p>Depending on the options you chose above, you will gain different abilities, equipment, and spells. 
    Feel free to use this box to keep track of them.
    </p>

    <h3>Currency:</h3>
    <div class="row">
        <div class="col-sm">
            <label for="copper">Copper</label>
            <input type="number" id="curr" name="cop"><br>
        </div>

        <div class="col-sm">
            <label for="silver">Silver</label>
            <input type="number" id="curr" name="sil">
        </div>
        <div class="col-sm">     
            <label for="electrum">Electrum</label>
            <input type="number" id="curr" name="ele">
        </div>
        <div class="col-sm">
            <label for="gold">Gold</label>
            <input type="number" id="curr" name="gold">
        </div>
        <div class="col-sm">
            <label for="platinum">Platinum</label>
            <input type="number" id="curr" name="plat">
        </div>
    </div>

    <br><br>

    <h3>Languages and Proficiencies:</h3>
    <textarea id="misc" name="lang" rows="10" cols="100"></textarea>
    
    <br><br>

    <h3>Equipment:</h3>
    <textarea id="misc" name="equip" rows="10" cols="100"></textarea>

    <br><br>

    <h3>Personality Traits:</h3>
    <textarea id="misc" name="traits" rows="10" cols="100"></textarea>

    <br><br>

    <h3>Spells:</h3>
    <textarea id="misc" name="spells" rows="10" cols="100"></textarea>
</div>
</div>

<br><br>

<div id="step-6">
    <h2>Step 6: Export</h2>

    <p>You're almost done! Just click the buttons below to export your character.
    </p>
        <div class="container">
            <div class="row">
                <div class="col-lg"></div>
                <div class="col-lg">
                    <input type="submit" name="submit" value="Export">
                </div>
            </div>
        </div>
    <br>
</div>
</div>
    EOF;
    
    // output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');

    // Output the generated PDF to the browser
    $pdf->Output('character-sheet.pdf', 'I');
}
?>