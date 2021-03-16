<!DOCTYPE html>
<html>
<head>
	<title>TABEL 9j: PERSENTASE KESESUAIAN RPS DALAM BAP, PENGEMBALIAN TUGAS, SOLUSI UTS DAN UAS, PENGEMBALIAN BERKAS  UJIAN, PROSES PENILAIAN, DAN PEMASUKAN NILAI UJIAN</title>
</head>
<body data-rsssl=1>

<p style="text-align:center">TABEL 9j: PERSENTASE KESESUAIAN RPS DALAM BAP, PENGEMBALIAN TUGAS, SOLUSI UTS DAN UAS, PENGEMBALIAN BERKAS  UJIAN, PROSES PENILAIAN, DAN PEMASUKAN NILAI UJIAN</p>
<p>Tuliskan semua kode dan nama matakuliah untuk seluruh kelas.</p>
	<br/>
	<br/>
	<table class="table table-bordered" id="tabel9j" width="100%" cellspacing="4">
        <tr>
        <th>No</th>
            <th style="text-align:center">Kode Matakuliah</th>
            <th style="text-align:center">Nama Matakuliah</th>
            <th style="text-align:center">Kelas</th>
            <th style="text-align:center">Kesesuaian Pelaksanaan perkuliahan yang tercantum dalam RPS</th>
            <th style="text-align:center">Berita Acara Pengembalian Tugas/Kuis</th>
            <th style="text-align:center">Berita Acara Pengembalian UTS dan UAS</th>
            <th style="text-align:center">Solusi UTS</th>
            <th style="text-align:center">Solusi UAS</th>
            <th style="text-align:center">Jumlah Komponen Penilaian</th>
            <th style="text-align:center">Waktu Pemasukkan nilai UTS</th>
            <th style="text-align:center">Waktu Pemasukkan nilai UAS</th>
            
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
                <td><?php echo $d['kelas']; ?></td>
                <td><?php echo $d['kesesuaian']; ?></td>
                <td><?php echo $d['bacara_kuis']; ?></td>
                <td><?php echo $d['bacara_uas']; ?></td>
                <td><?php echo $d['solusi_uts']; ?></td>
                <td><?php echo $d['solusi_uas']; ?></td>
                <td><?php echo $d['komp_nilai']; ?></td>
                <td><?php echo $d['waktu_uts']; ?></td>
                <td><?php echo $d['waktu_uas']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>