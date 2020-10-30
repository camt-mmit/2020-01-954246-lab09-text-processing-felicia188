<?php
// 602110188 chen shuo
//2. 编写程序，根据给定的模式和文件中给定的产品名称生成产品代码，两者都是由命令行指定的。
//php hw9-2.php PD00050 ass-02-input.txt  
//php hw9-2.php CC0000111 ass-02-input.txt

$fp = fopen($_SERVER['argv'][2], 'r');//读取product_names_filenam
fscanf($fp, "%d", $n);//读取文件的第一行的数字
    $arrs = [];// 总数组arrs
    for($i = 0; $i < $n; $i++) {//循环n次，读取文件每一行
        $arr = [];//分数组arr
        fscanf($fp, "%s", $arr);//将文件中的数据放入分数组arr
        $arrs[] = $arr;
    }
    fclose($fp);// 关闭文件
     //substr() 函数返回字符串的一部分，substr(string,start,length)
    //start正数 - 在字符串的指定位置开始
    //start负数 - 在从字符串结尾的指定位置开始
   //start 0 - 在字符串中的第一个字符处开始
    $s=substr($_SERVER['argv'][1], 0, -1);//length 负数 - 从字符串末端返回 读取输入的字符串PD0005,CC000011
    $m=substr($_SERVER['argv'][1], -1);//m为输入的字符串的最后一位数，结合下方式子，累加
    $co=[];//数组co
        for($j=0;$j<$n;$j++){//n文件的第一行的数字,循环n次，与文件的每一行对应
            $co[$j]=$m;//M:0\1\2\3...
            $m++;
    printf("%s%d  %s\n",$s,$co[$j],$arrs[$j]);
        }
  /*
  PD00050  Book
PD00051  Note
PD00052  Eraser
PD00053  Ruler
PD00054  Pen
PD00055  Clutch-type
PD00056  Calculator