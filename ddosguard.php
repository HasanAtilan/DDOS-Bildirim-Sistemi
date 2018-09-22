}<?php
 /**
  * www.ts3.web.tr
  * MR.HASANATİLAN TARAFİNDAN KODLANMİSTİR ACİK KAYNAKTİR İSTEDİĞİNİZ GİBİ KULLANABİLİRSİNİZ.
**/
require_once("libraries/TeamSpeak3/TeamSpeak3.php");
require_once("config.php");
###
try{
	$tsayar['bot'] = TeamSpeak3::factory("serverquery://".$bot['query_login'].":".$bot['query_password']."@".$bot['server_ip'].":".$bot['query_port']."/?server_port=".$bot['server_port']."&blocking=0");
	$tsayar['bot']->selfUpdate(array('client_nickname'=>$bot['query_nickname']));
}catch(TeamSpeak3_Adapter_ServerQuery_Exception $e){
	echo $e->getMessage();
}
// Paket Ölcer.
while(true){
	sleep(1);
	$sunucubilgisi = $tsayar['bot']->getInfo();
	$toplampaketkaybi = (float)$sunucubilgisi["virtualserver_total_packetloss_total"]->toString() *100;
	
	echo $toplampaketkaybi;
	if($toplampaketkaybi >= 49.9999) {
		$tsayar['bot']->message("[COLOR=#CF000F][B]Saldırı Tespit Edildi Paket Kaybınız ".$toplampaketkaybi."%)[/COLOR]");
		sleep(30);
		continue;
	}
	else if($toplampaketkaybi >= 29.9999)
	{	
		$tsayar['bot']->message("[COLOR=#F89406][B]Saldırı Tespit Edildi Paket Kaybınız ".$toplampaketkaybi."%)[/COLOR]");
		sleep(30);
		continue;
	}
	else if($toplampaketkaybi >= 18.9999)
	{	
		$tsayar['bot']->message("[COLOR=#F2784B][B]Saldırı Tespit Edildi Paket Kaybınız ".$toplampaketkaybi."%)[/COLOR]");
		sleep(30);
		continue;
	}
	else if($toplampaketkaybi >= 9.9999)
	{
		$tsayar['bot']->message("[COLOR=#BDC3C7][B]Saldırı Tespit Edildi Paket Kaybınız ".$toplampaketkaybi."%)[/COLOR]");
		sleep(30);
		continue;
	}
}
