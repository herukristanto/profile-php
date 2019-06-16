<?php
if($_POST['submite']){
	$admin = 'herukristanto90@gmail.com'; 
	
	$nama	= htmlentities($_POST['name']);
	$email	= htmlentities($_POST['email']);
	$judul	= htmlentities($_POST['phone']);
	$pesan	= htmlentities($_POST['massage']);
	
	$pengirim	= 'Dari: '.$name.' <'.$email.'>';
	
	if(mail($admin, $phone, $massage, $pengirim)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.php">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.php">Kembali</a>';
	}
}else{
	header("Location: index.php");
}
?>
