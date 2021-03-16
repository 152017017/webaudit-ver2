<!DOCTYPE html>
<html>
<head>
	<title>Tabel 5.a Kurikulum, Capaian Pembelajaran, dan Rencana Pembelajaran </title>
</head>
<body data-rsssl=1>

<p style="text-align:center">Tabel 5.a Kurikulum, Capaian Pembelajaran, dan Rencana Pembelajaran</p>
	<br/>
	<br/>
	<table class="table table-bordered" id="tabel5a" width="100%" cellspacing="4">
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="3" style="text-align:center">Bobot Kredit (sks)</th>
            <th></th>
            <th colspan="4" style="text-align:center">Capaian Pembelajaran</th>
        </tr>
        <tr>
        <th>No</th>
            <th style="text-align:center">Semester</th>
            <th style="text-align:center">Kode Mata Kuliah</th>
            <th style="text-align:center">Nama Mata Kuliah</th>
            <th style="text-align:center">Mata Kuliah Kompetensi</th>
            <th style="text-align:center">Kuliah/ Responsi/ Tutorial</th>
            <th style="text-align:center">Seminar</th>
            <th style="text-align:center">Praktikum/ Praktik/ Praktik Lapangan</th>
            <th style="text-align:center">Konversi Kredit ke Jam</th>
            <th style="text-align:center">Sikap</th>
            <th style="text-align:center">Pengetahuan</th>
            <th style="text-align:center">Keterampilan Umum</th>
            <th style="text-align:center">Keterampilan Khusus</th>
            <th style="text-align:center">Dokumen Rencana Pembelajaran</th>
            <th style="text-align:center">Unit Penyelenggara</th>
            </tr>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tabel5a");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['semester']; ?></td>
				<td><?php echo $d['kode_matkul']; ?></td>
                <td><?php echo $d['nama_matkul']; ?></td>
                <td><?php echo $d['komp_matkul']; ?></td>
                <td><?php echo $d['bobot_kul']; ?></td>
                <td><?php echo $d['bobot_sem']; ?></td>
                <td><?php echo $d['bobot_prak']; ?></td>
                <td><?php echo $d['konversi']; ?></td>
                <td><?php echo $d['nilai_sikap']; ?></td>
                <td><?php echo $d['nilai_peng']; ?></td>
                <td><?php echo $d['nilai_umum']; ?></td>
                <td><?php echo $d['nilai_khusus']; ?></td>
				<td><?php echo $d['dok_pem']; ?></td>
                <td><?php echo $d['unit']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>