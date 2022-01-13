<?php 

//print_r($_SERVER);

echo $url=$_SERVER['REQUEST_URI'];
$URL=explode('/',$url);

$level1=$URL[1];
$level2=$URL[2];
$level3=$URL[3];
$level4=$URL[4];
if($level1){
    $page= $level1.".php";
   if(file_exists($page)){
    include($page);
   }else{
    include('blogview.php');
   }
    
}else{
    include('home.php');
}
 echo "test";
?>
