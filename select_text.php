<?php

// Include variable extracted from config.ini
include('environment.php');
// Incude all functions
include('functions.php');

// If LoopActive flag is set go directly to video.php aftere several seconds
// This is not true from external
if ($LoopActive == "AN"  and $ipAdress == "127.0.0.1" ) {
 sleep(3);
 header("Location: video.php?video=$Loop");
 }

// Header information <header/><title/><body>
// Incuding java script and css
headerPHP();

// Whole frame
echo '<div id="pageFrame">';

// Deside if the access comes from internal or external
if ( $ipAdress != "127.0.0.1" ) { $Link = "edit.php"; } else { $Link = "index.php"; }

// Headline including name (typically Museum name)
// force omxplayer to stop in case it is still running
// (iframe will be shown by 1px)
echo "<div id=pageTop> $Name";
echo "<iframe src=http://localhost:9192/omxcmd?cmd=stop width=0 height=0></iframe>";

// Close pageTop
echo "</div>";

// Info frame (welcome, info, help block)
echo "<div id=pageInfo>";

// infoLeft
echo "<span id=infoLeft>";

// Start Welcome
echo "<div class=infoWelcome><a  class=infoWelcome href=$Link>$Willkommen</a></div>";

// Print Info section
echo "<div id=infoBetreff>$Betreff</div>";

// Print Help frame
echo "<div id=infoHelp>$HelpText</div>";

// Close infoLeft
echo "</span>";

// Start infoRight
echo "<span id=infoRight>";

// Show picture
echo "<div class=infoPicture><img class=infoPicture src=videos/images/$Bild > </div>";

// Close infoRight
echo "</span>";

// close pageInfo
echo "</div>";

// Main frame showing all videos
echo "<div id=pageMain><hr>";

// Print the prepated Video number info and and link
$i=1;
foreach($confTitle AS $title) {
    if(!empty($title)) {
	      echo "<div class=linkLine > <div id=buttonNumber>".$i."</div> <div class=link>
	            <a class=link accesskey=".$i." href=video.php?video=".$i.">".$title."</a></div>  </div>";
    }
    $i++;
}

// close pageMain
echo "</div>";

// Buttom frame with version info
echo "<div id=pageBottom> (c) by schloss@me.com</div>";

// Finish the page
echo "</div></body></html>";

?>
