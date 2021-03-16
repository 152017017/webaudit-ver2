<!DOCTYPE html>
<html>
<head>
	<title>Tabel 5.b Integrasi Kegiatan Penelitan/PkM dalam Pembelajaran</title>
</head>
<body data-rsssl=1>

<p style="text-align:center">Tabel 5.b Integrasi Kegiatan Penelitan/PkM dalam Pembelajaran</p>
	<br/>
	<br/>
	<table class="table table-bordered" id="tabel5b" width="100%" cellspacing="6">
        <tr>
        <th>No</th>
            <th style="text-align:center">Judul Penelitian/PKM</th>
            <th style="text-align:center">Nama Dosen</th>
            <th style="text-align:center">Mata Kuliah</th>
            <th style="text-align:center">Bentuk Integrasi</th>
            <th style="text-align:center">Tahun (YYYY)</th>
            </tr>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tabel5b");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['judul_pen']; ?></td>
				<td><?php echo $d['nama_dsn']; ?></td>
                <td><?php echo $d['matakuliah']; ?></td>
                <td><?php echo $d['integrasi']; ?></td>
                <td><?php echo $d['tahun']; ?></td>				
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>