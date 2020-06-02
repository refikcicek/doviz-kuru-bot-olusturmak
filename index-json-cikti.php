<?php
		function ara($bas, $son, $yazi)
		{
			@preg_match_all('/' . preg_quote($bas, '/') . '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
			return @$m[1];
		}

		$link = "https://kur.doviz.com/";
		$link2 = "https://altin.doviz.com/gram-altin";
		$link3 = "https://borsa.doviz.com/endeksler/XU100";
		$eurourl = "https://kur.doviz.com/serbest-piyasa/euro";
		$dolarurl = "https://kur.doviz.com/serbest-piyasa/amerikan-dolari";
		$doviz = file_get_contents($link);
		$altin = file_get_contents($link2);
		$bist = file_get_contents($link3);
		$dolar = file_get_contents($dolarurl);
		$euro = file_get_contents($eurourl);

		$deger = ara('<td>','</td>',$doviz);
		$altinfiyati = ara('<span class="value">','</span>',$altin);
		$bistfiyati = ara('<span class="value">','</span>',$bist);
		$dolarfiyati = ara('<span class="value">','</span>',$dolar);
		$eurofiyati = ara('<span class="value">','</span>',$euro);
		$altin_alis = str_replace(",",".",$altinfiyati[7]);
		$altin_satis = str_replace(",",".",$altinfiyati[8]);
		$dolar_alis = str_replace(",",".",$dolarfiyati[7]);
		$dolar_satis = str_replace(",",".",$dolarfiyati[8]);
		$euro_alis = str_replace(",",".",$eurofiyati[7]);
		$euro_satis = str_replace(",",".",$eurofiyati[8]);
		
		$bist = $bistfiyati[4];
		
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
	
