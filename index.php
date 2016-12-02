
<?php 
include ("dashboard.php");


echo $num_comments;
if (isset($_POST['submit']))
  {
  // Execute this code if the submit button is pressed.
  $formvalue = $_POST['input_value'];
   
  }


if($_POST == true) {
$string_reddit = file_get_contents("https://www.reddit.com/r/$formvalue/.json?Count=1");
$json = json_decode($string_reddit, true);  

$jsonLoop = $json['data']['children'];
foreach ($jsonLoop as $loop){
    $title = $loop['data']['title'];
    $url = $loop['data']['url'];
		$num_comments = $loop['data']['num_comments'];
	
}
	echo $num_comments;



/*
	$type=Array(1 => 'gifv', 2 => 'jpeg', 3 => 'png', 4 => 'gif'); //store all the image extension types in array

 //get image name here
$ext = explode(".",$url); //explode and find value after dot
echo $url;
	?> <video width="320" height="240" controls>
  <source src="<?php echo $url;?>" type="video/mp4">
  
</video><?php
	$path_parts = pathinfo($url);
if($path_parts['extension'] = 'gifv') //check image extension not in the array $type
{
$clean = trim($url, 'gifv');
var_dump($clean);
	$path_parts = pathinfo($url);

echo $path_parts['basename'], "\n";
//http://stackoverflow.com/questions/5898851/php-stripping-the-extension-from-a-file-name-string  


	?><html>
<img  scr = "<?php echo $path_parts['dirname'];echo $path_parts['basename'];echo $path_parts['filename'];?>.gif" height="42" width="42">
</html>
<?php */


// This will check if the url is an image 
$headers = get_headers( $url );
	echo $num_comments;
$image_exist = implode(',',$headers);
if (strpos($image_exist, 'image') !== false) 
{
    echo 'Yes image is here'; //Keep for Testing
      // The image exists
 //closing the php tag so I can add in html 
?>

<html><h1><?php echo $title; ?></h1>
  <img src="<?php echo $url?>" alt="" height = "420" /> </html>


<?php 
  //Opening it again to continue the else statement 
	 

  
}



// will check if the the url is a vimeo link or a youtube link
elseif (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
    $video_id = $match[1];
// I used this thread as help  http://stackoverflow.com/questions/2936467/parse-youtube-video-id-using-preg-match for help 

?>

<html><h1><?php echo $title; ?></h1>
  <iframe width="420" height="315" src="http://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allowfullscreen></iframe>  

<?php 
    } 



else {
    	
?>

<html><h1><?php echo $title; ?></h1>
  <?php echo $url?></html>


<?php 
  //Opening it again to continue the else statement 
		


    }
}//main if to check if user has entered input 


