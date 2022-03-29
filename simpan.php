<?php
If (isset($_POST['submit'])){
	$nama=$_POST['nama'];
	echo "Nama    : <b>$nama</b>";
    $email=$_POST['email'];
	echo "Email   : <b>$email</b>";
    $telepon=$_POST['telepon'];
	echo "Telepon : <b>$telepon</b>";
    $paket=$_POST['paket'];
	echo "Paket : <b>$paket</b>";
}
?>
