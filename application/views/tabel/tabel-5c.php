<!DOCTYPE html>
<html>
<head>
	<title>Tabel 5.c Kepuasan Mahasiswa</title>
</head>
<body data-rsssl=1>

<p style="text-align:center">Tabel 5.c Kepuasan Mahasiswa</p>
	<br/>
	<br/>
	<table class="table table-bordered" id="tabel5c" width="100%" cellspacing="6">
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="3">Tingkat Kepuasan Mahasiswa (%)</th>
        </tr>
        <tr>
        <th>No</th>
            <th style="text-align:center">Aspek yang Diukur</th>
            <th style="text-align:center">Sangat Baik</th>
            <th style="text-align:center">Baik</th>
            <th style="text-align:center">Cukup</th>
            <th style="text-align:center">Kurang</th>
            <th style="text-align:center">Rencana Tindak Lanjut UPPS/PS</th>
            </tr>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tabel5c");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['aspek']; ?></td>
				<td><?php echo $d['tingkat_SB']; ?></td>
                <td><?php echo $d['tingkat_B']; ?></td>
                <td><?php echo $d['tingkat_C']; ?></td>
                <td><?php echo $d['tingkat_K']; ?></td>
                <td><?php echo $d['rencana']; ?></td>
				
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>