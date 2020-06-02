 <?php
$jsonVeri=file_get_contents("doviz.json");
$veri=json_decode($jsonVeri,1);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
		
      <div class="piyasaVerileri">
	  <h2>Döviz Kuru</h2>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                    <tr>
                      <td colspan="2"><strong>BIST 100 <i class='fas fa-caret-<?php echo $veri["doviz"]["BIST YON"]; ?>'></i></td>
                    </tr>
                    <tr>
                      <td><?php echo $veri["doviz"]["BIST CHANGE"]; ?></i></td>
                      <td><?php echo $veri["doviz"]["BIST"]; ?></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                    <tr>
                      <td><strong>USD <i class='fas fa-caret-<?php echo $veri["doviz"]["DOLAR YON"]; ?>'></i></strong></td>
                      <td><span>Alış</span></td>
                      <td><span>Satış</span></td>
                    </tr>
                    <tr>
                      <td><?php echo $veri["doviz"]["DOLAR CHANGE"]; ?></td>
                      <td><?php echo $veri["doviz"]["DOLAR ALIS"]; ?></td>
                      <td><?php echo $veri["doviz"]["DOLAR SATIS"]; ?></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                    <tr>
                      <td><strong>EUR <i class='fas fa-caret-<?php echo $veri["doviz"]["EURO YON"]; ?>'></i></strong></td>
                      <td><span>Alış</span></td>
                      <td><span>Satış</span></td>
                    </tr>
                    <tr>
                      <td><?php echo $veri["doviz"]["EURO CHANGE"]; ?></td>
                      <td><?php echo $veri["doviz"]["EURO ALIS"]; ?></td>
                      <td><?php echo $veri["doviz"]["EURO SATIS"]; ?></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                    <tr>
                      <td><strong>ALTIN <i class='fas fa-caret-<?php echo $veri["doviz"]["ALTIN YON"]; ?>'></strong></td>
                      <td><span>Alış</span></td>
                      <td><span>Satış</span></td>
                    </tr>
                    <tr>
                      <td><?php echo $veri["doviz"]["ALTIN CHANGE"]; ?></td>
                      <td><?php echo $veri["doviz"]["ALTIN ALIS"]; ?></td>
                      <td><?php echo $veri["doviz"]["ALTIN SATIS"]; ?></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
          </tbody>
        </table>
      </div>