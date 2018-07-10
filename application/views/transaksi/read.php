<?php $this->load->view('template/headerKaryawan') ?>
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
	<table id="example" class="table table-striped table-bordered" width="100%" >
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>id</th>
				<th>Tanggal</th>
				<th>Alamat</th>
				<th>Penerima</th>
				<th>Telepon Penerima</th>
				<th>Nama Barang</th>
				<th>Nama Pelanggan</th>
				<th>Jenis</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($transaksi as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $value['id_transaksi'] ?></td>
					<td><?php echo $value['tanggal_transaksi'] ?></td>
					<td><?php echo $value['alamat_rinci'] ?></td>
					<td><?php echo $value['penerima'] ?></td>
					<td><?php echo $value['telepon_penerima'] ?></td>
					<td><?php echo $value['nama_barang']?></td>
					<td><?php echo $value['Nama'] ?></td>
					<td><?php echo $value['Nama_jenis']?></td>
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