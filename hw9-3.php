<?php 
//php 3.php ass-03-text.txt ass-03-names-01.txt
// 602110188 chen shuo
$word=fopen($_SERVER['argv'][2], 'r');//读取要替换的字母
for($i=0;$i<99999;$i++){
$w[$i]=trim(fgets($word));//每次读取name文件的一行
$ww[$i]=(strtolower($w[$i]));//$ww是 $w 在原文的表述(除开头),strtolower全小写
$bigw[$i]= ucwords($w[$i]);//$w 首字母大写，需替换上去的
if(feof($word))break;
}
fclose($word);

$f=[];
$fp = fopen($_SERVER['argv'][1], 'r');//$_SERVER['argv'][1], 读写的模式打开第一个文件
do{
    $f[]= trim(fgets($fp)); //原文变数组
}while(!feof($fp));
$ff=implode("",$f);
$new=str_replace('Chiang','chiang',$ff);
$new2=str_replace($ww,$bigw,$new);
echo $new2;
