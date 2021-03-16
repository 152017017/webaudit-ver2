<!DOCTYPE html>
<html>
<head>
	<title>TABEL 9a : KETERSEDIAAN DOKUMEN PROGRAM STUDI			
 </title>
</head>
<body data-rsssl=1>

<p style="text-align:center">TABEL 9a : KETERSEDIAAN DOKUMEN PROGRAM STUDI</p>
<p>* Beri tanda √ pada kolom tersedia jika disertai dengan bukti.</p>
	<br/>
	<br/>
	<table class="table table-bordered" id="tabel9a" width="100%" cellspacing="4">
        <tr>
        <th>No</th>
            <th style="text-align:center">Jenis Dokumen</th>
            <th style="text-align:center">Tersedia *</th>
            </tr>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tabel9a");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['JenisDokumen']; ?></td>
				<td><?php echo $d['Tersedia']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>