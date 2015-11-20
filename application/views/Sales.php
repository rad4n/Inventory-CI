<?php if(!empty($proses)){
if ($proses == 'add_transaction'){?>
	<div class="grid_12">
		<h1>Manajemen Transaksi</h1>
	</div>

	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>

	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Tambah Transaksi Penjualan</h1><span></span>
			</div>
			<form action="<?=$action_form;?>" method="post" class="block-content form"> <!-- id="validate-form"  -->

			<div class="_100">
				<p><label for="textfield">Tanggal</label>
					<?=$date;?></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Nama Produk</label>

				<select name="product">
				<?php foreach($dataproduct as $data){?>
					<option value="<?=$data['product_id'];?>"><?=$data['product'];?></option>
					<?php }?>
				</select>
				</p>
			</div>

			<div class="_100">
				<p><label for="textfield">Harga Jual</label><input id="textfield" name="harga" class="required" type="text"></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Quantity (Qty)</label><input id="textfield" name="qty" class="required" type="text" value="1"></p>
			</div>

			<div class="_100">
				<p><label for="textarea">Keterangan</label><textarea id="textarea" name="description" rows="5" cols="40">-</textarea></p>
			</div>

			<div class="clear"></div>
				<div class="block-actions">
					<ul class="actions-left">
						<li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
					</ul>
					<ul class="actions-right">
						<li><input type="submit" class="button" value="Simpan"></li>
					</ul>
				</div>
			</form>
		</div>
	</div>

<?php } elseif ($proses == 'update'){?>

	<div class="grid_12">
		<h1>Manajemen Transaksi</h1>
	</div>

	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>
	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Ubah Transaksi Penjualan</h1><span></span>
			</div>
			<form action="sales.php?module=act_update_transaction" method="post" class="block-content form"> <!-- id="validate-form"  -->

			<div class="_100">
				<p><label for="textfield">Tanggal</label>
					<?=$date;?></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Nama Produk</label>
				<input id="textfield" name="product" class="required" type="text" value="<?=$dataproduct['product'];?>" disabled><input id="textfield" name="product_id" class="required" type="hidden" value="<?=$dataproduct['product_id'];?>">
				<input id="textfield" name="trx_id" class="required" type="hidden" value="<?=$trx_id;?>">
				</p>
			</div>

			<div class="_100">
				<p><label for="textfield">Harga Jual</label><input id="textfield" name="harga" class="required" type="text" value="<?=$dataproduct['sales_price'];?>"></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Quantity (Qty)</label><input id="textfield" name="qty" class="required" type="text" value="<?=$dataproduct['sales_qty'];?>">
					<input id="textfield" name="stock" class="required" type="hidden" value="<?=$dataproduct['sales_stock'];?>">
					<input id="textfield" name="sales_qty" class="required" type="hidden" value="<?=$dataproduct['sales_qty'];?>">
				</p>
			</div>

			<div class="_100">
				<p><label for="textarea">Keterangan</label><textarea id="textarea" name="description" rows="5" cols="40"><?=$dataproduct['description'];?></textarea></p>
			</div>

			<div class="clear"></div>
				<div class="block-actions">
					<ul class="actions-left">
						<li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
					</ul>
					<ul class="actions-right">
						<li><input type="submit" class="button" value="Simpan"></li>
					</ul>
				</div>
			</form>
		</div>
	</div>

<?php }} else{ ?>
	<div class="grid_12">
		<h1>Transaksi Penjualan</h1>
	</div>

	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="<?=site_url('sales/add_transaction');?>">Tambah Transaksi</a>
	</ul>

	<div class="grid_12">
		<div class="block-border">
			<div class="block-header">
				<h1>Transaksi Hari Ini</h1><span></span>

			</div>
			<div class="block-content">
				<table id="table-example" class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Produk</th>
							<th>Kategori</th>
							<th>Harga Satuan</th>
							<th>Qty</th>
							<th>Subtotal</th>
							<th>Untung</th>
							<th>Sisa Stok</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $subtota=0; $pro=0; $no=1;	$total_price = 0; $po_pri=0; $po_pri=0; $pro_f=0;
						$sub=0; foreach ($datasales as $datasale){?>
						<tr class="gradeX">
							<td width="10"><?=$no;?></td>
							<td><?=$datasale['product'];?></td>
							<td><?=$datasale['category'];?></td>
							<td>Rp. <?=format_rupiah($datasale['sales_price']);?></td>
							<td><?=$datasale['sales_qty'];?></td>
							<td>Rp. <?=format_rupiah($datasale['subtotal']);?></td>
							<td>Rp. <?=format_rupiah($datasale['profit']);?></td>
							<td><?=$datasale['sales_stock'];?></td>
							<td class="center">
								<a href="<?=site_url('sales/update')."/".$datasale['trx_id']."/".$datasale['product_id'];?>" title="<?=$datasale['product'];?>"><img src="<?=base_url();?>/asset/img/update.png"></a> &nbsp;
								<a href="?module=cancel_sales&id=<?=$datasale['trx_id'];?>" onclick="return confirm('Anda yakin ingin membatalkan transaksi <?=$datasale['product'];?>?');"><img src="<?=base_url();?>/asset/img/hapus.png"></a></td>
						</tr>
						<?php
						$sales_price = format_rupiah($datasale['sales_price']);
						$po_price	 = format_rupiah($datasale['po_price']);
						$profit		 = format_rupiah($datasale['profit']);
						$subtotal	 = format_rupiah($datasale['subtotal']);


						$total_price += $datasale['sales_price'];
						$totalprice = format_rupiah($total_price);

						$po_pri += $datasale['po_price'];
						$popri = format_rupiah($po_pri);

						$pro_f += $datasale['profit'];
						$pro = format_rupiah($pro_f);

						$sub += $datasale['subtotal'];
						$subtota = format_rupiah($sub);
					$no++; } ?>
						<tr>
							<td colspan="3"></td>
							<td colspan="2"><b>Total Transaksi</b></td>
							<td><b>Rp. <?=$subtota;?></b></td>
							<td><b>Rp. <?=$pro;?></b></td>
							<td></td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php } ?>
