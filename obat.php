<?php
include('koneksi.php'); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CCCCCC">
<?php
$sql	= 'select * from obat';
$query	= mysqli_query($koneksi,$sql);
?>
<h2><strong><p align="center">Data Obat</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">KodeObat</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Nama Obat</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Satuan</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Stok</td>
    <td width="133" align="center" valign="middle" bgcolor="#00FFFF"><a href="tambah.php">TAMBAH</a></td></tr>
<?php
	while($data	= mysqli_fetch_array($query)){ 
?>
  <tr>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kodeobat']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['namaobat']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['satuan']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['stok']; ?></td>
    <td p align="center" bgcolor="#FFFFFF">
	 || edit || || hapus ||
	</td>
  </tr>
<?php
}
?>
</table>
</body>
</html>