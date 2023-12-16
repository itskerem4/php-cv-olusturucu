<?php 
if (isset($_POST['btn'])) {
	$fullname=$_POST['fullname'];
	$profession=$_POST['profession'];
	$picture=$_FILES['picture']['name'];
	$tmp_name=$_FILES['picture']['tmp_name'];
	$folder="images/".$picture;
	move_uploaded_file($tmp_name,$folder);
	$objective=$_POST['objective'];
	$father=$_POST['father'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$nationality=$_POST['nationality'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$education=$_POST['education'];
	$skills=$_POST['skills'];
	$certificate1=$_POST['certificate1'];
	$certificate2=$_POST['certificate2'];
	$certificate3=$_POST['certificate3'];
	$language1=$_POST['language1'];
	$language2=$_POST['language2'];
	$language3=$_POST['language3'];
	$experience=$_POST['experience'];
$html="<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8' lang='tr-TR'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' type='text/css' href='style.css'>
	<title>CV Oluşturucu</title>
</head>
<body>
<div id='container'>
		<div id='header'>
			<div id='left'>
				<div id='image'>
					<img src='images/{$picture}'>
				</div>
				<div>
					<h1>
						$fullname
					</h1>
					<h3>
						($profession)
					</h3>
				</div>
				<div>
					<h2>İletişim</h2>
					<ul id='list'>
						<li>$address</li>
						<li>$mobile</li>
						<li>$email</li>
					</ul>
					<h2>Beceriler</h2>
					<ul id='list'>
						$skills
					</ul>
					<h2>Diller</h2>
					<ul id='list'>
						<li>$language1</li>
						<li>$language2</li>
						<li>$language3</li>
					</ul>
				</div>
			</div>
			<div id='right'>
				<div>
					<h2>Hakkında</h2>
					<p>
						$objective
					</p>
					<hr>
					<h2>Kişisel Bilgiler</h2>
					<table cellspacing='0' cellpadding='7'>
						<tr>
							<td><b>Baba Adı<b></td>
							<td>$father</td>
						</tr>
						<tr>
							<td><b>Cinsiyet<b></td>
							<td>$gender</td>
						</tr>
						<tr>
							<td><b>Doğum Tarihi<b></td>
							<td>$dob</td>
						</tr>
						<tr>
							<td><b>Uyruk<b></td>
							<td>$nationality</td>
						</tr>
					</table>
					<hr>
					<h2>Eğitim</h2>
					<p>
						$education
					</p>
					<hr>
					<h2>Deneyimler</h2>
					<p>
						$experience
					</p>
					<hr>
					<h2>Sertifikalar</h2>
					<ul>
						<li>$certificate1</li>
						<li>$certificate2</li>
						<li>$certificate3</li>
					</ul>
					
				</div>
			</div>
		</div>
</div>
	<div id='footer'>
		Telefon Numarası :$mobile / Email Adresi:$email
	</div>
</body>
</html>
</body>
</html>";



include "vendor/autoload.php";
$mpdf=new \Mpdf\Mpdf();
$mpdf->SetDisplayMode('fullpage');
$style=file_get_contents('style.css');
$mpdf->WriteHTML($style ,1);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit();




}?>