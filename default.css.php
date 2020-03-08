<?php

// Include variable extracted from config.ini
include('environment.php');

// Header information <header/><title/><body>
// Incuding java script and css
header('Content-type: text/css');

//include 'select.css.php';

// A group of colors for different themes
if( $Theme == "Blau") {
    $darkBG      = "#1E2541";
    $lightBG     = "#D9D9D9";
    $lighterBG   = "#EEEEEE";
    $darkLetter  = "#1E2541";
    $lightLetter = "#FFFFFF";
    $shadow      = "#888888";

}elseif ( $Theme == "Gelb") {

    $darkBG      = "#633A05";
    $lightBG     = "#C0A35B";
    $lighterBG   = "#AE8234";
    $darkLetter  = "#633A05";
    $lightLetter = "#FFFFFF";
    $shadow      = "#755D3E";

}elseif ($Theme == "Grau") {

    $darkBG      = "#585858";
    $lightBG     = "#BDBDBD";
    $lighterBG   = "#D8D8D8";
    $darkLetter  = "#000000";
    $lightLetter = "#FFFFFF";
    $shadow      = "#6E6E6E";

}elseif ($Theme == "Gruen") {

    $darkBG      = "#4B8A08";
    $lightBG     = "#BDBDBD";
    $lighterBG   = "#D8D8D8";
    $darkLetter  = "#000000";
    $lightLetter = "#FFFFFF";
    $shadow      = "#6E6E6E";

}elseif ($Theme == "Tuerkis") {

    $darkBG      = "#8e44ad";
    $lightBG     = "#BDBDBD";
    $lighterBG   = "#D8D8D8";
    $darkLetter  = "#000000";
    $lightLetter = "#FFFFFF";
    $shadow      = "#6E6E6E";
}

// For a better overview css will be split into different files
include 'edit.css.php';


?>



/* The @media function will be used to use individual devices like tablet and smartphones */
/* ====================================================================================== */


@media screen and (max-width : 2000px  ) {
  body {
     text-align: center; /* Zentrierung für alte IEs */
     background-color: black;
     max-width: 1920px;
     font-size: 110%
  }

  #pageFrame {
      text-align: left;  /* Inhalt wieder links wegen alten IEs */
      margin: 0 auto;    /* Zentrierung mitte */
      background-color: <?=$lightBG?>;
      margin: 1.5em 2em 2em 2em;
      border-radius: 15px 15px 15px 15px;
  }

}



@media screen and (max-width : 1440px ) {
  body {
     text-align: center; /* Zentrierung für alte IEs */
     background-color: white;
     max-width: 1260px;
     font-size: 60%
  }

  #pageFrame {
      text-align: left;  /* Inhalt wieder links wegen alten IEs */
      margin: 0 auto;    /* Zentrierung mitte */
      background-color: <?=$lightBG?>;
      margin: 1.5em 2em 2em 2em;
      border-radius: 15px 15px 15px 15px;
  }

}




/* Main frames */
/* ====================================================================================== */





#pageTop {
	height: 1em;
	background-color: <?=$darkBG?>;
  padding: 1em 1.2em 0.8em 1.2em;
	margin: 0 0 0 0;
	font-size: 2.3em;
	font-style: italic;
	font-weight: bold;
	color: <?=$lightLetter?>;
  border-radius: 15px 15px 0 0;
}

#pageInfo {
  height: 11em;
  color: <?=$darkLetter?>;
  background-color: <?=$lightBG?>;
  padding: 1em 1.2em 0.8em 1.2em;
  margin: 0 0 0 0;
}

#pageMain {
  clear: both;
  height: 33.5em;
  text-align: left;
  background-color: <?=$lightBG?>;
  padding: 0.5em 1em 1em 1em;
  margin: 0 0 0 0;
}

#pageBottom {
  height: 0.5em;
  text-align: right;
  background-color: <?=$lightBG?>;
  padding: 1em 2em 2em 1em;
  margin: 0 0 0 0;
  border-radius: 0 0 15px 15px;
}


/* Info frame. The section is devided into left and right */
/* ====================================================================================== */

#infoLeft {
  width: 70%;
  text-align: left;
  float: left;
}

.infoWelcome {
  font-size: 1.5em;
  font-weight: bold;'
}

#infoBetreff {
  color: <?=$darkLetter?>;
  border: 0;
  background-color: <?=$lightBG?>;
  font-weight: bold;
  font-size: 1.2em;
}

#infoHelp {
  width: 40em;
 height: 3em;
 background-color: <?=$darkBG?>;
 padding: 0.6em 0.4em 0em 1em;
 margin: 1em 0 0 1em;
 box-shadow: 0.4em 0.4em 0.1em <?=$shadow?>;
 border-radius: 0.5em;
 font-size: 1.2em;
 color: <?=$lightLetter?>;
}


#infoRight {
  float: right;
  width: 30%;
  text-align: left;
}

.infoPicture {
  display: block;
  margin-left: auto;
  margin-right: 0;
  width: 20em;
  height: 10em;
	padding: 0 0 0 0;
	box-shadow: 0.4em 0.4em 0.1em <?=$shadow?>;
}

a {
	text-decoration: none;
	color: <?=$darkLetter?>;
}



/* video.php part
/* ====================================================================================== */


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


.video-wrapper {position: absolute; padding-bottom: 56.25%; /* 16:9 */  padding-top: 25px;}
.video-wrapper iframe {position: absolute; top: 0; left: 0; width: 1400px; height: 810px;}



/* Designe of the buttons for choosing the video */
/* ====================================================================================== */

#buttonNumber {
  width: 1em;
  height: 0.8em;
  background-color: <?=$darkBG?>;
  color: <?=$lightLetter?>;
  padding: 0.2em 0.2em 0.5em 0.2em;
  margin: 0 0.6em 0 0;
  font-size: 1.5em;
  font-style: italic;
  font-weight: bold;
  text-align: center;
  float: left;
  border-radius: 0.3em;
}

div.link {
	height: 1.3em;
	box-shadow: 0.4em 0.4em 0.1em <?=$shadow?>;
	color: <?=$darkLetter?>;
	background-color: <?=$lighterBG?>;
	padding: 0.2em 0.2em 0em 0;
	margin: 0 0.6em 0 0;
	border-radius: 0.3em;
  font-size: 1.5em;
  font-weight: bold;
}


div.linkLine {
	height: 2em;
	color: <?=$topcolor?>;
	background-color: <?=$lightBG?>;
	padding: 0.1em 0em 0.1em 0.4em;
	margin: 1.1em 4em 0 4em;

}

/* General link design */
/* ====================================================================================== */


a.null {
	text-decoration: none;
	color: <?=$darkLetter?>;
}


a.marked {
	color: <?=$darkLetter?>;
}


a.hover {
	color: <?=$darkLetter?>;
}



/* Select graphical  */
/* ====================================================================================== */


#infoGraphicalHelp {
 width: 40em;
 height: 3em;
 background-color: rgba(40, 40, 40, 0.7);
 padding: 0.6em 0.4em 0em 1em;
 margin: 1em 0 0 1em;
 box-shadow: 0.4em 0.4em 0.1em <?=$shadow?>;
 border-radius: 0.5em;
 font-size: 1.2em;
 color: <?=$lightLetter?>;
}


.bild_beschriftung {
  position: relative;
  margin: 20px 30px 20px 30px;
}

.bild_beschriftung img {
  border-radius: 0.5em;
  box-shadow: 0.4em 0.4em 0.1em <?=$shadow?>;
  margin: 20px 30px 20px 30px;
  width: 18em;
}

.bild_beschriftung span {
  position: absolute;
  margin: 20px 30px 20px 30px;
  padding-top: 10px;
  bottom: 0;
  left: 0;
  width: 18em;
  color: #fff;
  text-align: center;
  vertical-align: middle;
  height: 3.4em;
  line-height: 1.3em;
  font-size: 1em;
  border-radius: 0 0 0.5em 0.5em;
  border-top: 1px solid #ababab;;
  background: #404040; /* Fallback IE 6-8 */
  background-color: rgba(40, 40, 40, 0.7);
}




/* Edit part */
/* ========================================================================= */


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
  height: 4em;

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
  height: 1.5em;
  padding: 4px 10px 4px 10px;
  margin: 0 0 0 1em;
//  box-shadow: 0.2em 0.2em 0.1em <?=$shadow?>;
//  border-radius: 0.5em;
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
  min-width: 11.5em;
  margin: 0 0 0 10px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 2px 2px;
}


.dropdown-content a {
  color: black;
  padding: 6px 2px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
