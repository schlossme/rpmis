<?php

// Include for edit page

 ?>


 #infoEditRight {
   float: right;
   width: 55%;
   text-align: left;
 }


 #infoEditLeft {
   width: 45%;
   text-align: left;
   float: left;
 }



/* Section where the Save and chancel botton are */
 #pageBottomEdit {
   height: 2em;
   text-align: left;
   background-color: <?=$lightBG?>;
   padding: 1em 2em 2em 1em;
   margin: 0 0 0 0;
   border-radius: 0 0 15px 15px;
 }

/* Size of the pulldown selection */
select {
    font-size: 1em;
    height: 2em;
}

/* Radio button size */
input[type=radio] {
    width: 2em;
}

/* Video Title field */
input.videoTitle {
    height: 1.5em;
    font-size: 1.5em;
    background-color: <?=$lightBG?>;

}


/* Button (Save and Chancel) */
.button {
	background-color: <?=$darkBG?>;
  border: none;
	color: <?=$lightLetter?>;
  text-align: center;
  display: inline-block;
  font-size: 1em;
  cursor: pointer;
  width: 8.5em;
	height: 2em;
	margin: 0 0 0 1em;
	box-shadow: 0.2em 0.2em 0.1em <?=$shadow?>;
	border-radius: 0.5em;

}


/* Top name (e.g. Hopfenmuseum Speikern) */
 input.Name {
   color: <?=$lightLetter?>;
   border: 1;
   border-style: groove;
   border-color: <?=$darkBG?>;
   padding: 0 0 0 0;
   margin: 0 0 0.2em 0;
   background-color: <?=$darkBG?>;
   font-weight: bold;
   font-size: 1.2em;
 }

/* Welcome section (e.g. Hopfenmuseum Speikern) */
input.Welcome {
  color: <?=$darkLetter?>;
  border: 1;
  border-style: groove;
  border-color: <?=$lightBG?>;
  background-color: <?=$lightBG?>;
  font-weight: bold;
  font-size: 2em;
}

/* Info field */
input.Betreff {
  color: <?=$darkLetter?>;
  border: 1;
  border-style: groove;
  border-color: <?=$lightBG?>;
  background-color: <?=$lightBG?>;
  font-weight: bold;
  font-size: 1.2em;
}

/* Help text */
textarea.help {
  color: <?=$lightLetter?>;
  border: 1;
  background-color: <?=$darkBG?>;
  padding: 1em;
  font-weight: bold;
  font-size: 1.3em;
}


/* Line for each video */
div.linkLineEdit {
	height: 2em;
	color: <?=$topcolor?>;
	background-color: <?=$lightBG?>;
	padding: 0.1em 0em 0.1em 0.4em;
	margin: 1.3em 4em 0 1em;

}


/* Section Fullscreen and Loop */
#inputLineOne {
  display: -webkit-flex;
  display: flex;
}


/* Section for Theme and Bilder */
#input3 {
  font-size: 1em;
  padding: 0 0 0 0;
  margin: 0 0 0 0;
}

fieldset {
  height: 3em;

}



/* Section for Profiles */


.dropbtn {
  background-color: <?=$darkBG?>;
  border: none;
  color: <?=$lightLetter?>;
  text-align: center;
  display: inline-block;
  font-size: 1em;
  cursor: pointer;
  width: 10em;
  height: 2em;
  margin: 0 0 0 1em;
  box-shadow: 0.2em 0.2em 0.1em <?=$shadow?>;
  border-radius: 0.5em;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  text-align: left;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  bottom: 30px;
  border-radius: 0.5em;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-radius: 0.5em;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
