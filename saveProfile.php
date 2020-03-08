<?php

// Include variable extracted from config.ini
include('environment.php');
// Incude all functions
include('functions.php');

// Header information <header/><title/><body>
// Incuding java script and css
headerPHP();

// Load main page after several seconds
echo "<body onload=\"setTimeout(function(){window.location = 'edit.php';},1100)\" >";



$file = $_GET['config'];



// Whole frame
echo '<div id="pageFrame">';

// Headline including name (typically Museum name)
echo "<div id=pageTop> Saving File </div>";

// Main frame (stolan from debug.php css because it will be expand by lines)
echo '<div id=pageMain >';


// Some debug information
echo " <hr>";

echo "<h2>Saving File" . $file . " </h2>";


if ( $_POST['config'] ) {

  $myco = put_ini_file($confAll, "profiles/". $_POST['config'], "true", "true");
  
}




// Main frame close
echo "</div>";

// Finish page
echo "</div></body> </html>";



?>
