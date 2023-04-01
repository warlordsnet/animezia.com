<?php 
require_once('../_config.php');

 $iani = "hxxpz:qqapi*c=nzumex*=rg";
 $s1 = str_replace("x","t",$ini);
 $s2 = str_replace("z","s",$s1);
 $s3 = str_replace("q","/",$s2);
 $s4 = str_replace("*",".",$s3);
 $ani = str_replace("=","o",$s4);
 
$getAnime = file_get_contents("$ani/meta/anilist/random-anime");
$getAnime = json_decode($getAnime, true);
$id = $getAnime['id'];
$newURL = "$websiteUrl/anilist/anime?id=$id";
header('Location: '.$newURL);
?>