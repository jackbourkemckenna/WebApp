<?php 
//This will find the image file extenshion and append it to the end of $url
  $url;
list($width, $height, $type, $attr) = getimagesize("http://imgur.com/ffIxUFj");

echo "Width: " .$width. "<br />";
echo "Height: " .$height. "<br />";
echo "Type: " .$type. "<br />";
echo "Attribute: " .$attr. "<br />";


if ($type == "1") {
    $type = $imgAppend;
    $imgAppend = ".gif";
  
  echo $imgAppend;
} elseif ($type == "2") {
    $type = $imgAppend;
    $imgAppend = ".jpg";
  echo $imgAppend;
}
 elseif ($type == "3") {
    $type = $imgAppend;
    $imgAppend = ".png";
   
} 

else {
  $type == $imgeAppend;
    echo "Unkown image type please open link in new tab!";
}


 // call the function
/*
1 = GIF
2 = JPG
3 = PNG
4 = SWF
5 = PSD
6 = BMP
7 = TIFF(intel byte order)
8 = TIFF(motorola byte order)
9 = JPC
10 = JP2
11 = JPX
12 = JB2
13 = SWC
14 = IFF
15 = WBMP
16 = XBM

*/
