<?php

// Include for video page

 ?>


 #pageTopVideo {
 	height: 0.4em;
 	background-color: <?=$darkBG?>;
   padding: 0.2em 1.2em 0.8em 1.2em;
 	margin: 0 0 0 0;
 	font-size: 2.3em;
 	font-style: italic;
 	font-weight: bold;
 	color: <?=$lightLetter?>;
   border-radius: 15px 15px 0 0;
 }

 #pageMainVideo {
   clear: both;
   height: 39.5em;
   background-color: <?=$lightBG?>;
   padding: 0.5em 1em 1em 1em;
   margin: 0 0 0 0;
 }

#pageBottomVideo {
  text-align: right;
  background-color: <?=$lightBG?>;
  padding: 10em 2em 2em 1em;
  margin: 0 0 0 0;
  height: 1.5em;
  border-radius: 0 0 15px 15px;
}


video.noneFull {
  height: 45em;
  display: block;
  margin: 0 auto;
  object-fit: fill;
}


video.full {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: fill;
}
