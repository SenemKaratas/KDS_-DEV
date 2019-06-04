<!DOCTYPE html>
<head>
	<title>ATM Yerleşim Noktaları</title>
	<meta charset="utf-8">
	
	<link href="stil.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
	
	<div id="elin">
		<div class="foto">
			
			<img src="women.png" width="70px" height="70px" title="Kullanıcı Profili"></img>
			<h4 style="font-size:18px;margin-left:-20px;margin-top:7px">Senem Karataş</h4>
		</div>
		
		<div style="width:100%;height:30px">
		</div>
		
		<div id="menu">
			<ul>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="atm.php" title="ATM" style="font-size:18px">ATM Cihazları</a></li>
				<li>&nbsp;&nbsp;&nbsp;<a href="sube.php" title="Şube" style="font-size:18px">Şubedeki Cihazlar</a></li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="nufus.php" style="font-size:18px" title="Müşteriler">Nüfus</a></li>
				<li style="width:160px;background:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="kullanicilar.php" title="Müşteriler" style="font-size:18px;color:black;">Kullancılar</a></li>
			</ul>
		</div>
		<br><br><br>
		
		<div id="harita">
			<ul>
				<li style="width:160px;background:#8e2727">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>HARİTALAR</b></li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="atm_harita.php"><b>Atm</b></a></li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="sube_harita.php"><b>Şube</b></a></li>
			</ul>
		</div>
		
	</div>
	
	
	<div id="ilk">
		<div class="seze">
			<a href="#"><img title="Bildirimler" src="zill.png"></a>
			<a href="#"><img title="Ayarlar"src="ayarlar.png"></a>
			<a href="#"><img title="Telefon"src="tell.png"></a>
			<a href="#"><img title="Bul" src="arama.png"></a>
			<input style="float:right;margin-top:13px;margin-right:3px;width:80px;background-color:#ddc5c5"></input>
		</div>
		
	<div id="grafik">	
		<div id="yas">
		
		<?php
$conn = new mysqli('localhost','root','','atm_cihazi_yeri');
$sifir = $conn->query("SELECT * FROM kullanicilar WHERE yas='20'");
$iki = $conn->query("SELECT * FROM kullanicilar WHERE yas='22'");
$bes = $conn->query("SELECT * FROM kullanicilar WHERE yas='25'");
$alti = $conn->query("SELECT * FROM kullanicilar WHERE yas='26'");
$kirk = $conn->query("SELECT * FROM kullanicilar WHERE yas='40'");
$kbes = $conn->query("SELECT * FROM kullanicilar WHERE yas='45'");


$jumlah_sifir = mysqli_num_rows($sifir);
$jumlah_iki = mysqli_num_rows($iki);
$jumlah_bes = mysqli_num_rows($bes);
$jumlah_alti = mysqli_num_rows($alti);
$jumlah_kirk = mysqli_num_rows($kirk);
$jumlah_kbes = mysqli_num_rows($kbes);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['yas', 'Jumlah'],
          ['Yaş:20',     <?php echo $jumlah_sifir; ?> ],
          ['Yaş:22',     <?php echo $jumlah_iki; ?> ],
          ['Yaş:25',     <?php echo $jumlah_bes; ?> ],
          ['Yaş:26',     <?php echo $jumlah_alti; ?> ],
		  ['Yaş:40',     <?php echo $jumlah_kirk; ?> ],
          ['Yaş:45',     <?php echo $jumlah_kbes; ?> ],
        ]);

        var options = {
          title: 'Yaş'
        };

        var chart = new google.visualization.PieChart(document.getElementById('PieChart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="PieChart" style="width: 450px; height: 400px;"></div>
  </body>
</html>




		
		</div>
		
		<div id="kart_turu">
		
			<?php
$conn = new mysqli('localhost','root','','atm_cihazi_yeri');
$ogrenci = $conn->query("SELECT * FROM kullanicilar WHERE kart_turu='ogrenci'");
$yetiskin = $conn->query("SELECT * FROM kullanicilar WHERE kart_turu='yetiskin'");

$jumlah_ogrenci = mysqli_num_rows($ogrenci);
$jumlah_yetiskin = mysqli_num_rows($yetiskin);


?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['kart turu', 'Jumlah'],
          ['Öğrenci',     <?php echo $jumlah_ogrenci; ?> ],
          ['Yetişkin',     <?php echo $jumlah_yetiskin; ?> ],
        ]);

        var options = {
          title: 'Kart Türleri'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 450px; height: 400px;"></div>
  </body>
</html>
		</div>
		
	</div>
		
		<div id="grafik2">
			<div id="mahalle">
			
				<?php
$conn = new mysqli('localhost','root','','atm_cihazi_yeri');
$yildiz = $conn->query("SELECT * FROM kullanicilar WHERE mahalle='Yıldız Mah.'");
$koop = $conn->query("SELECT * FROM kullanicilar WHERE mahalle='Buca Koop Mah.'");
$adatepe = $conn->query("SELECT * FROM kullanicilar WHERE mahalle='Adatepe Mah.'");
$yesil = $conn->query("SELECT * FROM kullanicilar WHERE mahalle='Yeşilbağlar Mah.'");
$goksu = $conn->query("SELECT * FROM kullanicilar WHERE mahalle='Göksu Mah.'");
$ata = $conn->query("SELECT * FROM kullanicilar WHERE mahalle='Atatürk Mah.'");
$cumhur = $conn->query("SELECT * FROM kullanicilar WHERE mahalle='Cumhuriyet Mah.'");
$dicle = $conn->query("SELECT * FROM kullanicilar WHERE mahalle='Dicle Mah.'");
$zafer = $conn->query("SELECT * FROM kullanicilar WHERE mahalle='Zafer Mah.'");


$jumlah_yildiz = mysqli_num_rows($yildiz);
$jumlah_koop = mysqli_num_rows($koop);
$jumlah_adatepe = mysqli_num_rows($adatepe);
$jumlah_yesil = mysqli_num_rows($yesil);
$jumlah_goksu = mysqli_num_rows($goksu);
$jumlah_ata = mysqli_num_rows($ata);
$jumlah_cumhur = mysqli_num_rows($cumhur);
$jumlah_dicle = mysqli_num_rows($dicle);
$jumlah_zafer = mysqli_num_rows($zafer);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Mahaller', 'Jumlah'],
          ['Yıldız Mah.',     <?php echo $jumlah_yildiz; ?> ],
          ['Buca Koop Mah.',     <?php echo $jumlah_koop; ?> ],
          ['Adatepe Mah.',     <?php echo $jumlah_adatepe; ?> ],
          ['Yeşilbağlar Mah.',     <?php echo $jumlah_yesil; ?> ],
		  ['Göksu Mah',     <?php echo $jumlah_goksu; ?> ],
          ['Atatürk Mah.',     <?php echo $jumlah_ata; ?> ],
          ['Cumhuriyet Mah.',     <?php echo $jumlah_cumhur; ?> ],
          ['Dicle Mah.',     <?php echo $jumlah_dicle; ?> ],
          ['Zafer Mah.',     <?php echo $jumlah_zafer; ?> ],
        ]);

        var options = {
          title: 'Mahaller'
        };

        var chart = new google.visualization.PieChart(document.getElementById('mah'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="mah" style="width: 450px; height: 400px;"></div>
  </body>
</html>

			
			</div>
		
		</div>
		
		<div id="tablo">
		
		<?php
$con = mysqli_connect('localhost','root','') or die ("Bağlantı başarısız");
mysqli_select_db($con,'atm_cihazi_yeri') or die ("veritabanı hatası");
mysqli_query($con,"SET NAMES UTF8");
$bilgi=mysqli_query($con,"select * from kullanicilar");
echo '<table class="tablo" border="1" cellpadding="10" cellspacing="3">
	<tr>
		<td width="100" bgcolor="#E7E7E7"><b>Kullanıcı No</b></td>
		<td width="100" bgcolor="#E7E7E7"><b>Kullanıcılar</b></td>	
		<td width="100" bgcolor="#E7E7E7"><b>Yaş</b></td>	
		<td width="100" bgcolor="#E7E7E7"><b>Kart Türü</b></td>	
		<td width="100" bgcolor="#E7E7E7"><b>Mahalle</b></td>	
	</tr>';
while ($cek=mysqli_fetch_array($bilgi))	
{echo '	<tr>
		<td>'.$cek["kullanici_no"].'</td>
		<td>'.$cek["kullanici"].'</td>
		<td>'.$cek["yas"].'</td>		
		<td>'.$cek["kart_turu"].'</td>		
		<td>'.$cek["mahalle"].'</td>			
	</tr>';}
echo '</table>';


?>
		
		<div>
	
	
	
		

		

</div>
</body>
</html>


