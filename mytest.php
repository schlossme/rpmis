<?php

// Include variable extracted from config.ini
include('environment.php');
// Incude all functions
include('functions.php');

// Header information <header/><title/><body>
// Incuding java script and css
headerIndexPHP();

// Whole frame
echo '<div id="pageFrame">';

// Main frame showing all videos
echo "<div id=pageMain><hr>";


echo "<h2>Hallo Welt</h2>";

// Print the prepated Video number info and and link
$i=1;
foreach($confTitle AS $title) {

  if(!empty($title)) {
     echo "<a href=video.php?video=".$i.">
              <span class=bild_beschriftung><img src=images/video".$i.".jpg>
                <span>".$title."</span>
              </span>
            </a>";
  }
  $i++;
}










echo '<div class="dropdown">
	<button class="dropbtn">Profile laden...</botton>
        <div class="dropdown-content">
	  <a href="edit.php?config=Pult">Pult</a>
	  <a href="edit.php?config=Touch">Touch</a>
        </div>
      </div>';



















// Close Main frame
echo "</div>";

// Buttom frame with version info
echo "<div id=pageBottom> (c) by schloss@me.com</div>";




// finish the page
echo "</div></body> </html> ";

?>
