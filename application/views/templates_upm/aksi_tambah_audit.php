<?php
include "config/database.php";
$tahunajaran = $_POST['tahunAjaran'];
$semester = $_POST['semester'];
$auditor = $_POST['auditor'];
$audite = $_POST['audite'];
$tglvisitasi = $_POST['tglVisitasi'];

// simpan ke database
$sql = "INSERT INTO customer (tahunAjaran,semester,auditor,audite,tglVisitasi) values ('$tahunajaran','$semester','$auditor','$audite','$tglVisitasi')";
//mysqli_query("INSERT INTO customer set nama_event='$nama_event',tipe_event='$tipe_event',kategori_event='$kategori_event',lokasi='$lokasi',kode_event='$kode_event',tempat='$tempat',tanggal_mulai='$tanggal_mulai',tanggal_akhir='$tanggal_akhir',waktu_mulai='$waktu_mulai',waktu_akhir='$waktu_akhir',link_event='$link_event',baner_event='$nama_file_baru' where email='$email");
mysqli_query($db,$sql);
//memindahkan gambar ke tempat yang kita inginkan
move_uploaded_file($_FILES['baner_event']['tmp_name'], '../../img/gambar_buku/'.$nama_file_baru);
header("location:customer.php");
		
?>