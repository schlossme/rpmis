<?php

// Include variable extracted from config.ini
include('environment.php');
// Incude all functions
include('functions.php');

// Header information <header/><title/><body>
// Incuding java script and css
headerVideoPHP();

// Whole frame
echo '<div id="pageFrame">';

// Headline including name (typically Museum name)
// force omxplayer to stop in case it is still running
// (iframe will be shown by 1px)
echo "<div id=pageTopVideo> $Name";
echo "<iframe src=http://localhost:9192/omxcmd?cmd=stop width=0 height=0></iframe>";

// Close pageTop
echo "</div>";

// Main frame showing all videos
echo "<div id=pageMainVideo>";

// play video
play ($video);

// close main page
echo " </div>";

// Bottom frame of the page
echo " <div id=pageBottomVideo>";

// infoLeft
echo "<span id=infoLeft>";

// Print video information depending from where
// the pages was called (index.php).
videoInfo($video, $videoTitle, $videoFile);

// Close infoLeft
echo "</span>";

// Start infoRight
echo '<span id=infoRight>';

// Print the back button depending from where
// the pages was called (index.php or debug.php).
back ($video);

// Close infoRight
echo "</span>";

// close Buttom frame video
echo "</div>";

// finish the page
echo "</div></body> </html> ";

?>
