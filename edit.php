<?php

// Include variable extracted from config.ini
include('environment.php');

// Incude all functions
include('functions.php');

// Header information <header/><title/><body>
// Incuding java script and css
headerPHP();


// Whole frame
echo '<div id="pageFrame">';

// Start form
echo '<form action="myaction.php" method="POST">';

// Headline including name (typically Museum name)
echo "<div id=pageTop>";

// Text field for headline name (typically Museum name)
echo '<input class=Name type=text name=Name size=40 value=' . "'$Name'" . '>';

// force omxplayer to stop in case it is still running
// (iframe will be shown by 1px)
echo "<iframe src=http://localhost:9192/omxcmd?cmd=stop width=0 height=0></iframe>";

// close Headline
echo "</div>";

// Info frame (welcome, info, help block)
echo "<div id=pageInfo>";

// infoLeft
echo "<span id=infoEditLeft>";

// Text vfield for welcome section
echo '<input class=Welcome type=text name=Willkommen size=15 value=' . "'$Willkommen'" . ' >';

// Text field for info section
echo '<div class=text><input class=Betreff type=text name=Betreff size=60 value=' . "'$Betreff'" . ' ></div> <br>';

// Text field for Help frame (can be more then one line)
echo '<textarea class=help name=HelpText cols=50 rows=2>' . "$HelpText" . '</textarea> &nbsp; &nbsp;';

// Close infoLeft
echo "</span>";

// Start infoRight
echo "<span id=infoEditRight>";

// One Line
echo "<div id=inputLineOne>";

// Radio button
// * Label Name
// * Name of the button group
// * If selected "checked" if not "" (empty)
// * value of the radio button


// Prepare the radio button for fullscreen
if($FullScreen == "AN") { $fullAN="checked"; $fullAUS=""; } else { $fullAN=""; $fullAUS="checked"; }
if($LoopActive == "AN") { $loopAN="checked"; $loopAUS=""; } else { $loopAN=""; $loopAUS="checked"; }

// Radio button for FullScreen
echo '<div>';
echo '<fieldset>
        <legend>Vollbild Modus</legend>';
        radioButton("AN", "FullScreen", $fullAN , "AN" );
        radioButton("AUS", "FullScreen", $fullAUS , "AUS" );
echo '&nbsp; &nbsp; </fieldset>';
echo '</div>';

// Radio button for Loop
echo '<div>';
echo '<fieldset>
         <legend>Endlosschleife</legend>';
         radioButton("AN", "LoopActive", $loopAN , "AN" );
         radioButton("AUS", "LoopActive", $loopAUS , "AUS" );
echo '</fieldset>';
echo '</div>';

echo '<div>';
// Pulldown menue for Theme
echo '<fieldset><legend>Theme</legend>';
  pullDown($availableThemes, $Theme, "Theme");
echo '&nbsp;</fieldset>';
echo '</div>';

echo '<div>';
echo '<fieldset><legend>Modus*</legend>';
  pullDown($availableModes, $Mode, "Mode");
echo '&nbsp; </fieldset>';
echo '</div>';



// Pulldown menue for pictures
echo '<fieldset><legend>Bild rechte Seite</legend>';
  pullDown($availablePictures, $Bild, "Bild");
echo '</fieldset>';


// One Line
echo "</div>";

echo "<br>";

// Next field right site
echo '<div id=input3>';



echo '<fieldset><legend>Profilverwaltung</legend>';
echo '<input size="18" class=inputProf type=text placeholder="Neue Profilname" name="newProfile" >';

echo ' <input class=button type="submit" value=" Profil Speichern " name="Profile"> ';


echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;';

dropDown ($availableProfiles, "Profile laden...","edit.php" );

echo '&nbsp; &nbsp;';

dropDown ($availableProfiles, "Profile Löschen","delProfile.php");


echo "</fieldset>";

echo '</div>';

// Close infoEditRight
echo "</span>";

// close pageInfo
echo "</div>";

// Main frame showing all videos
echo '<div id=pageMainEdit>';

$i=1;
foreach($confTitle AS $title) {

    // Edit the Video Title
    echo '<div class=linkLineEdit > <div id=buttonNumber>'.$i.'</div>
          <input class=videoTitle type=text name=Title'.$i.'  size=40 value="'.$title.'">
          &nbsp; &nbsp; &nbsp;';

    $selectName="VideoFile".$i;

    // Select the video file
    pullDown($availableVideos, $confVideoFiles[$i], $selectName);

    echo "&nbsp; &nbsp; &nbsp;";
    if($i == $Loop) {$selected="checked=\"checked\"";}else{$selected=""; }
    radioButton(" ", "Loop", $selected, $i );

    if($i == 9) { echo " <span style=\"font-size:small;\"> *ACHTUNG: Im Modus \" Bilder\" können nur 8 Videos verwendet werden!</span>"; }
    
    echo '</div>';
    
    $i++;
}

// Main frame close
echo '</div>';

// Bottom frame with Cancel and save botton
echo '<div id=pageBottomEdit>';


echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ';


echo ' <input class=button type="submit" value="Speichern" name="StoreAll"> ';


echo ' <input class="button" type="button" onclick="window.location.replace('. "'$startPage'" . ')" value="Cancel"> &nbsp; ';

// Buttom frame close
echo '</div>';

// close form
echo '</form>';

// finish the page
echo '</div></body></html>';

?>
