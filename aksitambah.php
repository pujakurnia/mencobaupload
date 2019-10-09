<?php
include('koneksi.php');
if(isset($_POST['ttambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$kodeobat	= $_POST['kodeobat'];
	$namaobat	= $_POST['namaobat'];
	$satuan	= $_POST['satuan'];
	$stok	= $_POST['stok'];
	
	$sql	= 'insert into obat (kodeobat,namaobat,satuan,stok) values ("'.$kodeobat.'","'.$namaobat.'","'.$satuan.'","'.$stok.'")';
	$query	= mysqli_query($koneksi,$sql);
	
	if($query){
		header('location: obat.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}
?>