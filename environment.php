<?php
//

$startPage = "index.php";

$ipAdress = $_SERVER['REMOTE_ADDR'];

// Available videos
$availableVideos = array_diff(scandir('videos'), array('.', '..'));

// Available pictures
$availablePictures = array_diff(scandir('images'), array('.', '..'));

// Available profiles
$availableProfiles = array_diff(scandir('profiles'), array('.', '..'));

// Available themes
$availableThemes = array("Grau", "Gruen", "Blau", "Gelb", "Tuerkis");

// Available Modes
$availableModes = array("Text", "Bilder");


if(isset($_GET['config'])) { copy( "profiles/".$_GET['config'],"config.ini" ); }

sleep (1);

$configFile = "config.ini";

$confAll = parse_ini_file($configFile, TRUE);


if(isset($_GET['video'])) { $video = $_GET['video'];
                            $videoTitle = $confAll['Title'][$video];
                            $videoFile = $confAll['Videos'][$video];
}


$confTitle      = $confAll['Title'];
$confVideoFiles = $confAll['Videos'];

// Defaults
$confDefaults   = $confAll['Defaults'];
 $Mode          = $confDefaults['Mode'];
 $Bild          = $confDefaults['Bild'];
 $HelpText      = $confDefaults['HelpText'];
 $Name          = $confDefaults['Name'];
 $Willkommen    = $confDefaults['Willkommen'];
 $Betreff       = $confDefaults['Betreff'];
 $FullScreen    = $confDefaults['FullScreen'];
 $Theme         = $confDefaults['Theme'];
 $Loop          = $confDefaults['Loop'];
 $LoopActive    = $confDefaults['LoopActive'];

if(isset($_GET['File']))  { $videoFile = $_GET['File']; }

?>
