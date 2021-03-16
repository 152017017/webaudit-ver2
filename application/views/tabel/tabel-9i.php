<!DOCTYPE html>
<html>
<head>
	<title>TABEL 9i: PERSENTASE KETERSEDIAAN DOKUMEN RPS UNTUK SETIAP MATA KULIAH</title>
</head>
<body data-rsssl=1>

<p style="text-align:center">TABEL 9i: PERSENTASE KETERSEDIAAN DOKUMEN RPS UNTUK SETIAP MATA KULIAH</p>
<p>Tuliskan kode dan nama mata kuliah untuk semua mata kuliah pada kurikulum yang berlaku</p>
<p>*Beri tanda √ jika dokumen RPS (berupa RPS, RTM, dan Rubrik) tersedia</p>
	<br/>
	<br/>
	<table class="table table-bordered" id="tabel9i" width="100%" cellspacing="4">
        <tr>
        <th>No</th>
            <th style="text-align:center">Kode Matakuliah</th>
            <th style="text-align:center">Nama Matakuliah</th>
            <th style="text-align:center">Ketersediaan Dokumen RPS*</th>
            
            </tr>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tabel9i");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kode_matkul']; ?></td>
				<td><?php echo $d['nama_matkul']; ?></td>
                <td><?php echo $d['ketersediaan']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>