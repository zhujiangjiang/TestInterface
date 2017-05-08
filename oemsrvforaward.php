<?php
$i = 0;
$loop = $argv[1];
if(!$loop) $loop = 1;
function GetMob()
{
    $mob = '158' . rand(10000000,99999999);
  //  	$mob = '133' . rand(10000000,99999999);
//$mob = '13344596441';
//      $mob = '130' . rand(10000000,99999999);
    return $mob;
}
while($loop)
{
    $loop--;

    $socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
    $rs = socket_connect($socket,'192.168.0.250',1234);
    //$rs = socket_connect($socket,'192.168.16.224',2012);

    /*
    $socket1 = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
    $rs1 = socket_connect($socket1,'192.168.0.250',2007);
    //$rs1 = socket_connect($socket1,'192.168.16.224',2012);
    */

   // $i++;
    //$seed = str_pad($i,6,'0',STR_PAD_LEFT);
    //$orderid = "Add_" . time() . $seed;
    //$now = date("YmdHis");
    //$mob = GetMob();
    //$str = "007KA_B2B~1.0.0.2~1~1777777777~100000777777777~$orderid~$mob~5000~~~$now~1~";
//$sn = rand(1000000,9999999);
    //$str = "$sn~7300000035~$mob~";
    //$sign = strtoupper(md5($str . 'I5oCbrolpr4='));
    //$str .= $sign;
    //$len = strlen($str);
    //$len_str = str_pad($len,5,'0',STR_PAD_LEFT);
//	echo $len_str."\n";
    //$send = $len_str . $str;
    //sleep(5);
    //echo 'w:|' . $send . "\n";
    $send="000910002~04~2012042038048253~20120420~185846~13590176207~10000~F6237B0FBED310380B4AFF3DFDB53C9B";
    $send="000990002~02~2016090517535386~20160905~000211~18603051308~5000~20160905~42E2299DE00925F25D4CA08025634F35";
    $len=strlen($send)-5;
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
    $send = $len_str . $str
	*/
	?>
