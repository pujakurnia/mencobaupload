<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body bgcolor="#CCCCCC">
<h2><p align="center">TAMBAH DATA</p></h2>
<form method="post" action="aksitambah.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
  <!--DWLayoutTable-->
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Kode Obat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="kodeobat" type="text" size="10">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama Obat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="namaobat">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Satuan</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <select name="satuan">
      <option selected="selected">--Pilih--</option>
    <option>tablet</option>
    <option>sirup</option>
    <option>3</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Stok</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="stok" type="text" size="50">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="ttambah" value="TAMBAH"></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><a href="obat.php">Batal</a></td>
  </tr>


</table>
</form>
</body>
</html>