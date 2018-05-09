<?php $this->load->view('template/header') ?>
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Pelanggan
    </div>
    <br>
	<a href="<?php echo base_url('pelanggan/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>

	<!-- File Header -->
	<table class="table table-striped table-bordered" width="100%" id="example">
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>ID</th>
				<th>Nama</th>
				<th>JenisKelamin</th>
				<th>Alamat</th>
				<th>No Hp</th>
				<th>Email</th>
				<th>Username</th>
				<th>Password</th>
				<th>Image</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $value['id_pelanggan'] ?></td>
					<td><?php echo $value['Nama'] ?></td>
					<td><?php echo $value['JenisKelamin'] ?></td>
					<td><?php echo $value['Alamat'] ?></td>
					<td><?php echo $value['NoHp'] ?></td>
					<td><?php echo $value['Email'] ?></td>
					<td><?php echo $value['Username'] ?></td>
					<td><?php echo $value['Password'] ?></td>
					<td><?php echo $value['image'] ?></td>
					<td>
						<!-- --AKSI-- -->
						<a href="<?php echo base_url('pelanggan/ubah/'.$value['id_pelanggan']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('pelanggan/hapus/'.$value['id_pelanggan']) ?>" class="btn btn-sm btn-danger">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<!-- File Footer -->

</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('template/footer') ?>