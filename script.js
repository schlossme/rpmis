// This is a AJAX implementation for checking if the video play has finshed.
// With Ajax, web applications can send and retrieve data from a
// server asynchronously (in the background) without interfering
// with the display and behavior of the existing page.

var req = new XMLHttpRequest();
window.onload = videoLiveTime();

function videoLiveTime()
{
        req.open('GET' , 'videoLiveTime.php', true);
        req.onreadystatechange = videoStatus;
        req.send();
}


// OK means that the video is still playing OR the acess is external
// NOK means that the player has finished his work and the video.php
// pages can be changed to index.php.
function videoStatus()
{
  if(req.readyState == 4 && req.status == 200)
  {
    if ( req.responseText == "ok" )
    {
      videoLiveTime();
    } else {
      window.location.href="index.php";
    }
  }
}
