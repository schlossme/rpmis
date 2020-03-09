<?php

// Include variable extracted from config.ini
include('environment.php');
// Incude all functions
include('functions.php');

// Header information <header/><title/><body>
// Incuding java script and css
headerPHP();


//if(isset($_POST['Profile'])) {
  // Load main page after several seconds
//  echo "<body onload=\"setTimeout(function(){window.location = 'edit.php';},60)\" >";
  //header( "Location: edit.php" );
//}else{
  // Load main page after several seconds
  echo "<body onload=\"setTimeout(function(){window.location = 'index.php';},60)\" >";
  //header( "Location: index.php" );
//}



// read config.ini
// $confAll = parse_ini_file("config.ini", TRUE);

// Make a backup from thre current config.ini
//$myco = put_ini_file($confAll, "profiles/letztesProfil", "true", "true");

// Store Default array from the edit.php form
$confAll['Defaults']['Theme'] 	  	= $_POST['Theme'];
$confAll['Defaults']['Mode'] 		    = $_POST['Mode'];
$confAll['Defaults']['FullScreen'] 	= $_POST['FullScreen'];
$confAll['Defaults']['LoopActive']  = $_POST['LoopActive'];
$confAll['Defaults']['Loop']		    = $_POST['Loop'];
$confAll['Defaults']['Bild']	    	= $_POST['Bild'];
$confAll['Defaults']['Name']		    = $_POST['Name'];
$confAll['Defaults']['Willkommen']	= $_POST['Willkommen'];
$confAll['Defaults']['Betreff']	 	  = $_POST['Betreff'];
$confAll['Defaults']['HelpText']	  = $_POST['HelpText'];

// Store Title array from the edit.php form
// $confAll['Title']['0'] = $_POST['Title0'];
$confAll['Title']['1'] = $_POST['Title1'];
$confAll['Title']['2'] = $_POST['Title2'];
$confAll['Title']['3'] = $_POST['Title3'];
$confAll['Title']['4'] = $_POST['Title4'];
$confAll['Title']['5'] = $_POST['Title5'];
$confAll['Title']['6'] = $_POST['Title6'];
$confAll['Title']['7'] = $_POST['Title7'];
$confAll['Title']['8'] = $_POST['Title8'];
$confAll['Title']['9'] = $_POST['Title9'];

// Store Videos array from the edit.php form
// $confAll['Videos']['0'] = $_POST['VideoFile0'];
$confAll['Videos']['1'] = $_POST['VideoFile1'];
$confAll['Videos']['2'] = $_POST['VideoFile2'];
$confAll['Videos']['3'] = $_POST['VideoFile3'];
$confAll['Videos']['4'] = $_POST['VideoFile4'];
$confAll['Videos']['5'] = $_POST['VideoFile5'];
$confAll['Videos']['6'] = $_POST['VideoFile6'];
$confAll['Videos']['7'] = $_POST['VideoFile7'];
$confAll['Videos']['8'] = $_POST['VideoFile8'];
$confAll['Videos']['9'] = $_POST['VideoFile9'];

// Save all the arrays to config.ini
$myco = put_ini_file($confAll, "config.ini", "true", "true");


// Whole frame
echo '<div id="pageFrame">';

// Headline including name (typically Museum name)
echo "<div id=pageTop>" . $confAll['Defaults']['Name'] . "</div>";

// Main frame (stolan from debug.php css because it will be expand by lines)
echo '<div id=pageMain >';


// Some debug information
echo " <h3> New configuration stored to config.ini!</h3>";
echo " <h3> (New profile is:".$_POST['Profile'].") </h3>";
echo " <hr>";
echo " <h3> Return value is: " . $myco . "</h3>";

// Main frame close
echo "</div>";

// Finish page
echo "</div></body> </html>";

?>
