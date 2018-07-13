<?php $this->load->view('template/header') ?>
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
			<div class="panel panel-default">
				<div class="row">
					<h1>Transaksi Berhasil</h1>
					<div class="col-md-6">
						<table class="table">
							<tr>
								<td>ID_Transaksi</td>
								<td><?php echo $transaksi->id_transaksi ?></td>
							</tr>
							<tr>
								<td>tanggal_transaksi</td>
								<td><?php echo $transaksi->tanggal_transaksi ?></td>
							</tr>
							<tr>
								<td>alamat_rinci</td>
								<td><?php echo $transaksi->alamat_rinci ?></td>
							</tr>
							<tr>
								<td>penerima</td>
								<td><?php echo $transaksi->penerima ?></td>
							</tr>
							<tr>
								<td>telepon_penerima</td>
								<td><?php echo $transaksi->telepon_penerima ?></td>
							</tr>
							<tr>
								<td>nama_barang</td>
								<td><?php echo $transaksi->nama_barang ?></td>
							</tr>
							<tr>
								<td>berat</td>
								<td><?php echo $transaksi->berat ?></td>
							</tr>
							<tr>
								<td>nama_pelanggan</td>
								<td><?php echo $transaksi->nama_pelanggan ?></td>
							</tr>
							<tr>
								<td>nama_jenis</td>
								<td><?php echo $transaksi->nama_jenis ?></td>
							</tr>
							<tr>
								<td>hargaperkilo</td>
								<td><?php echo $transaksi->hargaperkilo ?></td>
							</tr>
							<tr>
								<td></td>
								<th><?php echo $transaksi->hargaperkilo*$transaksi->berat ?></th>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
<?php $this->load->view('template/footer') ?>