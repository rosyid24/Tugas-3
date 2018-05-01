<?php 
	    @$panjang = $_POST['panjang'];
	    @$lebar = $_POST['lebar'];
	    @$tinggi = $_POST['tinggi'];
	    @$luas = (2*$panjang* $lebar)+(2*$panjang*$tinggi)+(2*$lebar*$tinggi);
	    @$volume = $panjang*$tinggi*$lebar;
	   	?>

<!DOCTYPE html>
<html>
	<head>
		<title>HASIL PERHITUNGAN</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	<h1>HASIL PERHITUNGAN LUAS DAN VOLUME BALOK</h1>
	<div class="container">
		<form action="LuasBalok.html">
			<table border="1" align="center" width="300" class="table">
                <tr><td colspan="2"><center><strong> HASILNYA ADALAH SEBAGAI BERIKUT </strong></center></td></tr>
                <tr><td>Luas</td>
                <td><input type="text" name="luas" value="<?php echo $luas;?>" disabled="" /> cm <sup>2</sup></td></tr>
                <tr><td>Volume</td>
                <td><input type="text" name="volume" value="<?php echo $volume ; ?>" disabled="" /> cm <sup>3</sup></td></tr><br/>
                <tr><td colspan="2"><center><input type="submit" class="tmbl" name="submit" value="KEMBALI KE INPUT" /></td></tr>
            </table>
        </form>
	</div>
	</body>
</html>
