<?php
$i = 0;
$loop = $argv[1];
if(!$loop) $loop = 1;
function GetMob()
{
    $mob = '13' . rand(100000000,999999999);
    return $mob;
}
while($loop)
{
    $loop--;

    $socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
    $rs = socket_connect($socket,'192.168.0.250',20008);
    //$rs = socket_connect($socket,'192.168.16.224',2012);

    /*
    $socket1 = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
    $rs1 = socket_connect($socket1,'192.168.0.250',2007);
    //$rs1 = socket_connect($socket1,'192.168.16.224',2012);
    */

    $i++;
    $seed = str_pad($i,6,'0',STR_PAD_LEFT);
    $orderid = "Add_" . time() . $seed;
    $now = date("YmdHis");
    $mob = GetMob();
    $cardid = time().$seed;
echo $cardid;
echo "\n";
    //$str = "007KA_B2B~1.0.0.2~1~1777777777~100000777777777~$orderid~$mob~5000~~~$now~1~";
  //  $str = "007KA_B2B~1.0.0.2~1~1777777777~100000777777777~$orderid~$mob~5000~~~$now~1~";
    $str = "007KA_B2B~1.0.0.1~1~1777777777~100000777777777~$orderid~$mob~5000~85834058405804358~~$now~1~";
//    $sign = strtoupper(md5($str . 'lk839u45lqzf'));
    $sign = strtoupper(md5($str . 'I5oCbrolpr4='));
    $str .= $sign;
//    $str = "007KA_B2B~1.0.0.1~1~1777777777~100000777777777~$orderid~$mob~5000~~~$now~1~";
//  $str = "007KA_KM~1.0.0.1~38~1000000007~EBCC1609080010491500~13054545454~10000~~20160908104557~007KA_KM~FF9CC06E0AE829182E9F1D42506C93BA";
    $len = strlen($str);
    $len_str = str_pad($len,5,'0',STR_PAD_LEFT);
	echo $len_str."\n";
    $send = $len_str . $str;
    //sleep(5);
    echo 'w:|' . $send . "\n";
//$send="00127007KA_KM~1.0.0.1~38~1000000007~EBCC1609080010491500~13054545454~10000~~20160908104557~007KA_KM~FF9CC06E0AE829182E9F1D42506C93BA";
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
}
?>
