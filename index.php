<?php
		function ara($bas, $son, $doviz)
		{
			@preg_match_all('/' . preg_quote($bas, '/') .
			'(.*?)'. preg_quote($son, '/').'/i', $doviz, $m);
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
		echo 'Dolar Alış= '.$deger[0];
		echo '<br>Dolar Satış= '.$deger[1];
		echo '<br>Euro Alış= '.$deger[2];
		echo '<br>Euro Satış= '.$deger[3];
		echo '<br>Altın Alış= '.$altinfiyati[6];
		echo '<br>Altın Satış= '.$altinfiyati[7];
		echo '<br>BIST= '.$bistfiyati[6];
		
?>
