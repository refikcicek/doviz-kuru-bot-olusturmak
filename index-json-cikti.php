<?php
	
		function ara($bas, $son, $yazi)
		{
			@preg_match_all('/' . preg_quote($bas, '/') . '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
			return @$m[1];
		}

		$link = "https://kur.doviz.com/";
		$link2 = "https://altin.doviz.com/gram-altin";
		$link3 = "https://borsa.doviz.com/endeksler/XU100";
		$doviz = file_get_contents($link);
		$altin = file_get_contents($link2);
		$bist = file_get_contents($link3);

		$deger = ara('<td>','</td>',$doviz);
		$altinfiyati = ara('<span class="value">','</span>',$altin);
		$bistfiyati = ara('<span class="value">','</span>',$bist);
		$dolar_alis = str_replace(",",".",$deger[0]);
		$dolar_satis = str_replace(",",".",$deger[1]);
		$euro_alis = str_replace(",",".",$deger[2]);
		$euro_satis = str_replace(",",".",$deger[3]);
		$altin_alis = str_replace(",",".",$altinfiyati[6]);
		$altin_satis = str_replace(",",".",$altinfiyati[7]);
		$bist = $bistfiyati[6];
		
		preg_match_all('@<div class="change">
                        <span class="arrow (.*?)"></span>
                        (.*?)
                    </div>@si', $doviz, $change_up);
		
		

$json["doviz"] = array( 
	'DOLAR ALIS'=> $dolar_alis, 
	'DOLAR SATIS'=> $dolar_satis,
	'DOLAR YON'=> $change_up[1][3],
	'DOLAR CHANGE'=> $change_up[2][3],
	'EURO ALIS'=> $euro_alis,
	'EURO SATIS'=> $euro_satis,
	'EURO YON'=> $change_up[1][2],
	'EURO CHANGE'=> $change_up[2][2],
	'DOLAR SATIS'=> $euro_satis,
	'ALTIN ALIS'=> $altin_alis,
	'ALTIN SATIS'=> $altin_satis,
	'ALTIN YON'=> $change_up[1][0],
	'ALTIN CHANGE'=> $change_up[2][0],
	'BIST'=> $bist,
	'BIST YON'=> $change_up[1][4],
	'BIST CHANGE'=> $change_up[2][4],
	); 	
	
	
$dt = fopen("doviz.json", "w+");

if(fwrite($dt, json_encode($json, true)))
{
  echo 'JSON Güncellemesi Başarılı.';
}
	?>
	
