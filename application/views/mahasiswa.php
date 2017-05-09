<!DOCTYPE html>
<html>
<head>
	<title>TES</title>
</head>
<body>
<table border="1">
	<tr>
	<td>No</td><td>Mahasiswa</td><td>Aksi</td>
	</tr>
	<?php 
foreach ($data->result_array() as $mahasiswa) {
?>
<tr>
	<td><?php echo $mahasiswa['no_induk']; ?></td>
		<td><?php echo $mahasiswa['nama']; ?></td>
		<td><a href="<?php echo base_url().'index.php/mahasiswa/edit/'.$mahasiswa['no_induk']; ?>">Edit</a>

<a href="<?php echo base_url().'index.php/mahasiswa/hapus/'.$mahasiswa['no_induk']; ?>">Hapus</a>
		</td>

</tr>	
<?php
}
 ?>
	<?php echo $num; ?>
</table>

</body>
</html>