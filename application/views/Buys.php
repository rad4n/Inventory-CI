<?php if(!empty($proses)){
if ($proses == 'add'){?>
	<div class="grid_12">
		<h1>Manajemen Transaksi</h1>
	</div>

	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>

	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Tambah Transaksi Pembelian</h1><span></span>
			</div>
			<form action="<?=$action_form;?>" method="post" class="block-content form"> <!-- id="validate-form"  -->

			<div class="_100">
				<p><label for="textfield">Tanggal</label>
					<?=$date;?></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Supplier</label>

				<select name="supplier">
				<?php foreach($datasupp as $data){?>
					<option value="<?=$data['supplier_id'];?>"><?=$data['supplier'];?></option>
				<?php }?>
				</select>
				</p>
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
				<p><label for="textfield">Harga Satuan Modal</label><input id="textfield" name="harga" class="required" type="text"></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Quantity Stock (Qty)</label><input id="textfield" name="qty" class="required" type="text" value="1"></p>
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
				<h1>Ubah Transaksi Pembelian</h1><span></span>
			</div>
			<form action="<?=$action_form;?>" method="post" class="block-content form"> <!-- id="validate-form"  -->

			<div class="_100">
				<p><label for="textfield">Tanggal</label>
					<?=$date;?></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Supplier</label>

				<select name="supplier">
			<?php	foreach($datasupp as $data){
					 if ($data['supplier_id'] == $databuys['supplier_id']){?>
						<option value="<?=$data['supplier_id'];?>" SELECTED><?=$data['supplier'];?></option>
					<?php } else {?>
						<option value="<?=$data['supplier_id'];?>"><?=$data['supplier'];?></option>
					<?php } }?>
				</select>
				</p>
			</div>

			<div class="_100">
				<p><label for="textfield">Nama Produk</label>
				<input id="textfield" name="product" class="required" type="text" value="<?=$databuys['product'];?>" disabled>
				<input id="textfield" name="product_id" class="required" type="hidden" value="<?=$databuys['product_id'];?>">
				<input id="textfield" name="buys_qty" class="required" type="hidden" value="<?=$databuys['supp_qty'];?>">
				<input id="textfield" name="trx_id" class="required" type="hidden" value="<?=$databuys['trx_id'];?>">
				</p>
			</div>

			<div class="_100">
				<p><label for="textfield">Harga Satuan Modal</label><input id="textfield" name="harga" class="required" type="text" value="<?=$databuys['supp_price'];?>"></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Quantity Stock (Qty)</label><input id="textfield" name="qty" class="required" type="text" value="<?=$databuys['supp_qty'];?>"></p>
			</div>

			<div class="_100">
				<p><label for="textarea">Keterangan</label><textarea id="textarea" name="description" rows="5" cols="40"><?=$databuys['description'];?></textarea></p>
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

<?php }} else{?>
	<div class="grid_12">
		<h1>Transaksi Pembelian Produk</h1>
	</div>

	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="<?=site_url('Buys/add');?>">Tambah Transaksi</a>
	</ul>

	<div class="grid_12">
		<div class="block-border">
			<div class="block-header">
				<h1>Transaksi Pembelian Hari Ini</h1><span></span>

			</div>
			<div class="block-content">
				<table id="table-example" class="table">
					<thead>
						<tr>
							<th>No</th>
							<th width="200">Produk</th>
							<th width="130">Harga Satuan (Modal)</th>
							<th width="50">Qty</th>
							<th>Subtotal</th>
							<th>Stok Saat Ini</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $subtota=0; $no=1; foreach ($databuys as $databuy){?>
						<tr class="gradeX">
							<td width="10"><?=$no;?></td>
							<td><?=$databuy['product'];?></td>
							<td>Rp. <?=$databuy['supp_price'];?></td>
							<td><?=$databuy['supp_qty'];?></td>
							<td>Rp. <?=$databuy['subtotal'];?></td>
							<td><?=$databuy['stock'];?></td>
							<td class="center">
								<a href="<?=site_url('buys/update');?>/<?=$databuy['trx_id'];?>/<?=$databuy['product_id'];?>" title="<?=$databuy['product'];?>"><img src="<?=base_url();?>/asset/img/update.png"></a> &nbsp;
								<a href="?module=cancel_sales&id=<?=$databuy['trx_id'];?>" onclick="return confirm('Anda yakin ingin membatalkan transaksi <?=$databuy['product'];?>?');"><img src="<?=base_url();?>/asset/img/hapus.png"></a></td>
						</tr>
						<?php
						$price = format_rupiah($databuy['supp_price']);
						$subtotal = format_rupiah($databuy['subtotal']);
						$subtota += $databuy['subtotal'];
						$sub = format_rupiah($subtota);
					}?>
						<tr>
							<td colspan="4"><b>Total Transaksi</b></td>
							<td><b>Rp. <?=$subtota;?></b></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php }?>
