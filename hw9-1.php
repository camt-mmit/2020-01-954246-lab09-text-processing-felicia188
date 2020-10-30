<?php
// php hw9-1.php ass-01-input-01.txt
// 602110188 chen shuo
    $fp = fopen($_SERVER['argv'][1], 'r');//$_SERVER['argv'][1],$_SERVER是数组，[1]表示下标（第二个数组），[0]是php文件名example-01.php，[1]是example-01-input.txt
//$fp被赋值文件example-01-input.txt
fscanf($fp, "%s %s", $name['first'], $name['last']);//顺序读取名字
fscanf($fp, "%d", $n);//%d 整数，第二行第一个数被读取为n
for($i = 0; $i < $n; $i++) {//n行数据，n次循环
    fscanf($fp, "%s %f", $ifm['first'], $ifm['last']);//顺序读取信息
    $ifms[] = $ifm;
}



printf("Transaction for:\n");
printf("First name: %s\n",$name['first'] );
printf("First name: %s\n",$name['last'] );
printf("Number of transactions:%d\n",$n);
for($i = 0; $i < $n; $i++) {//n行数据，n次循环
    printf("%8.s : %2.2f\n",$ifms[$i]['first'], $ifms[$i]['last']);
    if($ifms[$i]['first']== 'withdraw'or $ifms[$i]['first']== 'WITHDRAW' or $ifms[$i]['first']== 'wItHDrAw'){$ifms[$i]['last'] = 0-$ifms[$i]['last'];}//将取钱换成复数
    if($ifms[$i]['first']== 'balANCE' or $ifms[$i]['first']== 'DEPOXXX' or $ifms[$i]['first']== 'Opposit'){$ifms[$i]['last'] = 0;}
    $Account+=$ifms[$i]['last'];
  
}
printf("Account Balance:  %s\n",$Account );

/* $m=substr($_SERVER['argv'][1], -1);
