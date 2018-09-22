<!DOCTYPE html>
 <html>
 <head>
 	<center>
 	<title></title>
 </head>

 <a href="hal2.php"><button>Halaman 2</button></a>
 <a href="hal3.php"><button>Halaman 3</button></a><br><br>
<?php 
include = "header.html";

session_start();
$_SESSION['nama'] 	= isset($_POST['nama']) ? $_POST["nama"]:$_SESSION["nama"];
$_SESSION['password']	= isset($_POST['password']) ? $_POST["password"]:$_SESSION["password"];

$data = array(
			array( 
				"nama" =>"ridho" ,
				"password" =>"rap",
				"akses" => "user"
			),
			array(  
				"nama" =>"admin1",
				"password"=>"admin1",
				"akses" =>"admin"
				)
		);
if ($_POST['nama'] == $data[1]["nama"] && $_POST['password'] == $data[1]['password']||
	$_POST['nama'] == $data[0]["nama"] && $_POST['password'] == $data[0]['password']) {
	echo "Selamat Datang";
	$_SESSION['akses'] = $data[0]["akses"];
}else{
	header("location: Form.html");
}

 ?>
 <body>
 	
 
 </body>
 </center>
 </html>