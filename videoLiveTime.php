<?php
// This is a AJAX implementation for checking if the video play has finshed.
// With Ajax, web applications can send and retrieve data from a
// server asynchronously (in the background) without interfering
// with the display and behavior of the existing page.

// Is the connection from internal or external
$ipAddress = $_SERVER['REMOTE_ADDR'];

sleep (1);

// Looking for the PID of the video player if it is NOT empty
// The video play will not be used by external access so we have
// to check alternatively (OR) if it is NOT internal.
if ( ($ret=shell_exec('pidof omxplayer.bin')) != "" or $ipAddress != "127.0.0.1" )
{
    // OK means that the video is still playing OR the acess is external
    echo "ok";
} else {
    sleep(3);
    // NOK means that the player has finished (see script.js)
    echo "nok";
}

?>
