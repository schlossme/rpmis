<?php

// Include variable extracted from config.ini
include('environment.php');
// Incude all functions
include('functions.php');

if ($Mode == "Text" ) {
 sleep(1);
 header("Location: select_text.php");
}elseif ($Mode == "Bilder") {
  sleep(1);
  header("Location: select_graphical.php");
}
else {
  sleep(1);
  header("Location: select_text.php");

};

// Whole frame
echo '<div id="pageFrame">';

// Finish the page
echo "</div></body></html>";

?>
