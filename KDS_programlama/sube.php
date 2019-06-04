<!DOCTYPE html>
<head>
	<title>ATM Yerleşim Noktaları</title>
	<meta charset="utf-8">

	<link href="stil.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
	
	<div id="elin">
		<div class="foto2">
			
			<img src="women.png" width="70px" height="70px" title="Kullanıcı Profili"></img>
			<h4>Senem Karataş</h4>
		</div>
		
		<div style="width:100%;height:30px">
		</div>
		
		<div id="menu">
			<ul>
				<li><a href="atm.php" title="ATM">ATM Cihazları</a></li>
				<li style="width:160px;background:white"><a href="sube.php" title="Şube" style="color:black">Şubedeki Cihazlar</a></li>
				<li><a href="nufus.php" title="Müşteriler">Nüfus</a></li>
				<li><a href="kullanicilar.php" title="Müşteriler">Kullancılar</a></li>
		
			</ul>
		</div>
		<br><br><br>
		
		<div id="harita">
			<ul>
				<li style="width:160px;background:#8e2727"><b>HARİTALAR</b></li>
				<li><a href="atm_harita.php"><b>Atm</b></a></li>
				<li><a href="sube_harita.php"><b>Şube</b></a></li>
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
		
			<?php
	/* Database connection settings */
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'atm_cihazi_yeri';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

	$data1 = '';
	$data2 = '';
	$data3 = '';
	$data4 = '';
	$data5= '';

	//query to get data from the table
	$sql = "SELECT sube_kullanim_orani.ocak,sube_kullanim_orani.subat,sube_kullanim_orani.mart,sube_kullanim_orani.nisan,sube_kullanim_orani.mayis
	FROM sube_kullanim_orani";
    $result = mysqli_query($mysqli, $sql);

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$data1 = $data1 . '"'. $row['ocak'].'",';
		$data2 = $data2 . '"'. $row['subat'] .'",';
		$data3 = $data3 . '"'. $row['mart'] .'",';
		$data4 = $data4 . '"'. $row['nisan'] .'",';
		$data5 = $data5 . '"'. $row['mayis'] .'",';
	}

	$data1 = trim($data1,",");
	$data2 = trim($data2,",");
	$data3 = trim($data3,",");
	$data4 = trim($data4,",");
	$data5 = trim($data5,",");
?>

<!DOCTYPE html>
<html>
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
		<title>Accelerometer data</title>

		<style type="text/css">			
			body{
				font-family: Arial;
			    margin: 0px 0px 0px 0px;
			    padding: 0;
			    color: black;
			    text-align: center;
			    background: #555652;
				
			}

			.container {
				color: black;
				background: while;
				border: #555652 0px solid;
				padding: 20px;
			}
		</style>

	</head>

	<body>	   
	    <div class="container">	
	    <h1>Şubelerdeki Cihazların Aylara Göre Kullanımı</h1>       
			<canvas id="chart" style="width: 100%; height: 65vh; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>

			<script>
				var ctx = document.getElementById("chart").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'line',
		        data: {
		            labels: ['Buca Şubesi','DEU Tınaztepe Şubesi','Gediz Mah. Şubesi','Menderes Cad.Şubesi','Nato Şubesi','Stadyum Şubesi','Şirinyer Şubesi','Yıkıkkemer Şubesi'],
		            datasets: 
		            [{
		                label: 'ocak',
		                data: [<?php echo $data1; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(255,99,132)',
		                borderWidth: 3
		            },

		            {
		            	label: 'subat',
		                data: [<?php echo $data2; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(0,255,255)',
		                borderWidth: 3	

		            },
					
					{
		            	label: 'mart',
		                data: [<?php echo $data3; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(94,236,17)',
		                borderWidth: 3	

		            },
					{
		            	label: 'nisan',
		                data: [<?php echo $data4; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(252, 23, 2)',
		                borderWidth: 3	

		            },
					{
		            	label: 'mayis',
		                data: [<?php echo $data5; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(252, 247, 1)',
		                borderWidth: 3	

		            }]
		        },
		     
		        options: {
		            scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
		            tooltips:{mode: 'index'},
		            legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
		        }
		    });
			</script>
	    </div>
	    
	</body>
</html>

		</div>
		<br><br><br><br><br><br><br><br>
		
		<div id="tablo">
		
		<?php
			$con = mysqli_connect('localhost','root','') or die ("Bağlantı başarısız");
			mysqli_select_db($con,'atm_cihazi_yeri') or die ("veritabanı hatası");
			mysqli_query($con,"SET NAMES UTF8");
			$bilgi=mysqli_query($con,"SELECT sube.sube_no,sube.sube_ad,sube_kullanim_orani.ocak,sube_kullanim_orani.subat,sube_kullanim_orani.mart,sube_kullanim_orani.nisan,sube_kullanim_orani.mayis
									FROM sube,sube_kullanim_orani,kullanim_sube
									WHERE sube.sube_no=kullanim_sube.sube_no AND
									sube_kullanim_orani.kullanim_id=kullanim_sube.sube_no");
			echo '<table class="tablo" border="1" cellpadding="10" cellspacing="3">
				<tr>
					<td width="100" bgcolor="#E7E7E7"><b>Şube No</b></td>
					<td width="100" bgcolor="#E7E7E7"><b>Şube Adı</b></td>
					<td width="100" bgcolor="#E7E7E7"><b>Ocak</b></td>
					<td width="100" bgcolor="#E7E7E7"><b>Şubat</b></td>
					<td width="100" bgcolor="#E7E7E7"><b>Mart</b></td>
					<td width="100" bgcolor="#E7E7E7"><b>Nisan</b></td>
					<td width="100" bgcolor="#E7E7E7"><b>Mayıs</b></td>
				</tr>';
			while ($cek=mysqli_fetch_array($bilgi))	
			{echo '	<tr>
					<td>'.$cek["sube_no"].'</td>
					<td>'.$cek["sube_ad"].'</td>
					<td>'.$cek["ocak"].'</td>		
					<td>'.$cek["subat"].'</td>		
					<td>'.$cek["mart"].'</td>		
					<td>'.$cek["nisan"].'</td>		
					<td>'.$cek["mayis"].'</td>						
				</tr>';}
			echo '</table>';


		?>
			
		</div>



		
	</div>
	
	
	

	
	
	
</div>
</body>
</html>
