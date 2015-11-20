<div class="grid_12">
	<h1>Laporan Penjualan</h1>
	<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
</div>

<ul class="actions-left">
	<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
</ul>

<div class="grid_6">
	<div class="block-border">
		<div class="block-header">
			<h1>Pilih Periode Laporan</h1><span></span>
		</div>
		<form action="<?=$action_form;?>" method="post" class="block-content form"> <!-- id="validate-form"  -->

		<div class="_50">
			<p><label for="datepicker">Pilih Tanggal Awal</label><input id="datepicker_awal" name="periode_awal" class="required" type="text" value="" /></p>
		</div>

		<div class="_50">
			<p><label>Pilih Tanggal Akhir</label><input id="datepicker_akhir" name="periode_akhir" class="required" type="text" value="" /></p>
		</div>
		<p>&nbsp;</p>
		<div class="clear"></div>
			<div class="block-actions">
				<ul class="actions-left">
					<li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
				</ul>
				<ul class="actions-right">
					<li><input type="submit" class="button" value="Tampilkan Transaksi"></li>
				</ul>
			</div>
		</form>
	</div>
</div>

<?php if ($proses == 'report'){?>
<div class="grid_12">
		<div class="block-border">
			<div class="block-header">
				<h1><a href="downloads.php?start_date={$start_date}&end_date={$end_date}" target="_blank">Download Transaksi</a></h1><span></span>
			</div>
			<div class="block-header">
				<h1>Transaksi Hari Ini</h1><span></span>
			</div>
			<div class="block-content">
				<table id="table-example" class="table">
					<thead>
						<tr>
							<th>No</th>
							<th width="80">Tanggal</th>
							<th width="140">Produk</th>
							<th width="130">Kategori</th>
							<th>Harga Satuan</th>
							<th width="18">Qty</th>
							<th>Subtotal</th>
							<th>Untung</th>
							<th width="20">Sisa Stok</th>
						</tr>
					</thead>
					<tbody>
						{section name=datareport loop=$datareport}
						<tr class="gradeX">
							<td width="10">{$datareport[datareport].no}</td>
							<td>{$datareport[datareport].sales_date}</td>
							<td>{$datareport[datareport].product}</td>
							<td>{$datareport[datareport].category}</td>
							<td>Rp. {$datareport[datareport].sales_price}</td>
							<td>{$datareport[datareport].sales_qty}</td>
							<td>Rp. {$datareport[datareport].subtotal}</td>
							<td>Rp. {$datareport[datareport].profit}</td>
							<td>{$datareport[datareport].sales_stock}</td>
						</tr>
						{/section}
						<tr>
							<td colspan="4"></td>
							<td colspan="2"><b>Total Transaksi</b></td>
							<td><b>Rp. {$subtota}</b></td>
							<td><b>Rp. {$pro}</b></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php } ?>
