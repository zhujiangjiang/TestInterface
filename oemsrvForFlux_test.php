<?php
$i = 0;
$loop = $argv[1];
if(!$loop) $loop = 1;
function GetMob()
{
    $mob = '13' . rand(100000000,999999999);
$mob = '13811419902';
    return $mob;
}
while($loop)
{
    $loop--;

    $socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
    $rs = socket_connect($socket,'10.1.100.250',2020);
    //$rs = socket_connect($socket,'192.168.16.224',2012);

    /*
    $socket1 = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
    $rs1 = socket_connect($socket1,'192.168.0.250',2007);
    //$rs1 = socket_connect($socket1,'192.168.16.224',2012);
    */

    $i++;
    $seed = str_pad($i,6,'0',STR_PAD_LEFT);
    $orderid = "Add_" . time() . $seed;
    $orderid = "20160503D000V3MP";
    $now = date("YmdHis");
    $mob = GetMob();
	$mob = '13410099999';
    $str = "007KA_KM~1.0.0.1~39~7300000013~$orderid~$mob~$now~1~";
//  $str = "007KA_KM~1.0.0.1~39~7300000013~$orderid~$mob~$now~3~";
//  $str = "007KA_KM~1.0.0.1~39~7300000013~$orderid~$mob~$now~2~";
//    $str = "007KA_KM~1.0.0.1~39~7300000013~MBPRTSvr050500031834~212121~20170505105257~";
//    $str = "007KA_KM~1.0.0.1~37~1777777777~20160503D000ViiMP~13811419902~3000~~20170506160217~~";
 //   $str = "007KA_KM~1.0.0.1~37~7000100001~20160503D000VRFKM~13312345678~3000~~20170506085454~~1~";
//  $str = "007KA_KM~1.0.0.1~37~7300000132~20160503D000V9KM~13312345678~3000~~20170506085454~~2~";
//   $str = "007KA_KM~1.0.0.1~37~7300000132~20160503D000V9KM~13312345678~3000~~20170506085454~~2~";
  //  $sign = strtoupper(md5($str . 'I5oCbrolpr4='));
    $sign = strtoupper(md5($str . 'lk839u45lqzf'));
    $str .= $sign;
    $len = strlen($str);
    $len_str = str_pad($len,5,'0',STR_PAD_LEFT);
    $send = $len_str . $str;
    //sleep(5);
    echo 'w:|' . $send . "\n";
    socket_write($socket,$send,$len + 5);

    /*
    $i++;
    $seed = str_pad($i,15,'0',STR_PAD_LEFT);
    $orderid = time() . $seed;
    $now = date("YmdHis");
    $mob = GetMob();
    $str = "007KA_B2B~1.0.0.1~1~1100000006~100000100000006~$orderid~$mob~10000~~~$now~1~";
    $sign = strtoupper(md5($str . '007ka'));
    $str .= $sign;
    $len = strlen($str);
    $len_str = str_pad($len,5,'0',STR_PAD_LEFT);
    $send = $len_str . $str;
    echo 'w:|' . $send . "\n";
    socket_write($socket1,$send,$len + 5);
    */

    $read = socket_read($socket,1024);
    echo 'r:|' . $read . "\n";
    socket_close($socket);

    /*
    $read = socket_read($socket1,1024);
    echo 'r:|' . $read . "\n";
    socket_close($socket1);
    */
    //sleep(1);
    //break;
	echo "hello";
}
?>
