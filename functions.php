<?php

function play ( $Number ) {

    include('environment.php');

    if($Number == "11") { $FullScreen = "AUS"; }

    if($videoFile == "") { return 0; }
    if($ipAdress != "127.0.0.1") {
           $playVideo="<iframe src=leer.mp4 allow=autoplay style=display:none></iframe>
                       <video class=noneFull with=60% height=80% src=videos/$videoFile autoplay controls webkitExitFullScreen > </video>";
    }else{
        if($FullScreen == "AN") {
            $playVideo="<iframe src=http://localhost:9192/dplay?url=%2Fhome%2Fpi%2Fpublic_html%2Fvideos%2F$videoFile&omxoptions=--win;0,0,1920,1080;stop width=0 height=0></iframe>";
        }else{
            $playVideo="<iframe src=http://localhost:9192/dplay?url=%2Fhome%2Fpi%2Fpublic_html%2Fvideos%2F$videoFile&omxoptions=--win;160,105,1730,966;stop  width=100 height=0></iframe>";
        }
    }
    echo "$playVideo";
}


function videoInfo ($video, $videoTitle, $videoFile) {
        echo '<div id=buttonNumber>'.$video.'</div> <div class=link >
	            <a class=link href=video.php?video='.$video.'>'.$videoTitle.'</a></div>';
}


function back ( $video ) {
        echo '<div id=buttonNumber>0</div>
              <div class=link><a class=link href=index.php>Zurück</a></div>';
}


// PullDown Menue
// We would need:
//   - the list of available items
//   - the label name
//   - the default from config.ini which has to be pre-selected
//   - the name of the selection to send wich will become e.g. $_GET('Bild')
function pullDown ($list, $fromConfig, $selectName) {
    //include('environment.php');


    array_unshift($list, "");

    echo '    <select class=videoSelect name=' . $selectName . ' >' . "\n";

    foreach($list AS $myFile) {
        if($myFile == $fromConfig) { $select = "selected"; } else { $select = ""; }
        echo "<option $select >" . $myFile . "</option>\n";
    }

    echo "     </select>";
}

// Dropdown menue fpr edit.php
function dropDown ($List, $Text, $Url) {

  echo '<div class="dropdown">';
    echo '<span class="dropbtn">'.$Text.'</span>';
    echo '<div class="dropdown-content">';
      foreach($List AS $myFile) {
         echo "<a href=$Url?config=$myFile>$myFile</a>";
      }
    echo '</div>';
  echo '</div>';

}


// TODO:
function radioButton ($labelName, $Name, $selected, $value) {

    echo '<input type="radio" id="id'.${value}.'" name="' . $Name . '" value="' . $value . '" ' . $selected . ' >
          <label style="font-size: 1.2em;" for="id'.${value}.'">'.$labelName.'</label>';
}



// function to save all the array to config file
function put_ini_file($config, $file, $has_section = false, $write_to_file = true){

 $fileContent = '';
 if(!empty($config)){
  foreach($config as $i=>$v){
   if($has_section){
    $fileContent .= "\n[".$i."]\n" . put_ini_file($v, $file, false, false);
    }
   else{
    if(is_array($v)){
     foreach($v as $t=>$m){
      $fileContent .= $i."[".$t."] = ".(is_numeric($m) ? $m : '"'.$m.'"') . "\n";
      }
     }
    else $fileContent .= $i . " = " . (is_numeric($v) ? $v : '"'.$v.'"') . "\n";
    }
   }
  }

 if($write_to_file && strlen($fileContent)) {
	return file_put_contents($file, $fileContent, LOCK_EX); }

 else {
	return $fileContent;
 }

 }




function headerPHP () {

  echo " <html> <head>
  <title>Herzlich willkommen!</title>
  <meta http-equiv=Content-Language content=de>
  <meta http-equiv=Content-Type content=text/html; charset=utf-8 />
  <meta name=author content=schloss>
  <meta name=description content=Hopfenmuseum Speikern>
  <meta name=keywords content=Hopfenmuseum, Speikern, Neunkirchen, Heimat und Geschichts Verein>
  <link rel=stylesheet href=default.css.php type=text/css>
  <script type='text/javascript' src='script.js'></script>
  </head> <body>";
}


?>
