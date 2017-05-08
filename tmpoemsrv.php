<?php

    $socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
    $rs = socket_connect($socket,'192.168.0.250',1234);
    $send="000990004~04~2016090517535386~20160905~000211~18603051308~5000~20160905~42E2299DE00925F25D4CA08025634F35";
    $len=strlen($send)-5;
    socket_write($socket,$send,$len + 5);
	
	echo "hello5";
?>
