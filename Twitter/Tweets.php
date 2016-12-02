<?php 

require'Request.php';


$arr = json_decode($response);
foreach($arr as $item) { //foreach element in $arr
    $uses = $item['trends']; //etc
}
