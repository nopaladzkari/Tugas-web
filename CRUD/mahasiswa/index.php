<!DOCTYPE html>
<html>
<head>
  
	<title>Data Mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="../../bootstraps/css/bootstraps.min.css"> -->
	
</head>
<body>

	<div class="container">
		<div class="alert alert-into">Data Mahasiswa</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					
					<th>No</th>
					<th>Nim</th>
					<th>Nama</th>
					<th>Prodi</th>
					<th>Aksi</th>

				</tr>
			</thead>

			<tbody>
				<?php 

				require'../koneksi.php';
				$query = "SELECT * FROM mahasiswa";
				$result = mysqli_query($link, $query);

				$no = 1;

				//Jalankan query diatas
				while ($isi = mysqli_fetch_object($result)) {
				 ?>
				
				
				<tr>
					<td><?= $no++; ?></td>
					<td><?php echo $isi->nim; ?></td>
					<td><?= $isi->nama_mahasiswa; ?></td>
					<td><?= $isi->prodi; ?></td>
					<td>
						<a href=""class="btn btn-danger">Del</a>
						<a href=""class="btn btn-warning">Edit</a>
					</td>
					
				</tr>

			<?php } ?>
			</tbody>
		</table>
		
	</div>

</body>
</html>