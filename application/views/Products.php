<?php if(!empty($proses)){
if ($proses == 'add'){?>
	<div class="grid_12">
		<h1>Manajemen Product</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>

	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>

	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Tambah Produk</h1><span></span>
			</div>
			<form action="<?=$action_form;?>" method="post" class="block-content form"> <!-- id="validate-form"  -->

			<div class="_100">
				<p><label for="textfield">Kategori</label>
					<select name="category">
						<?php foreach($datacat as $data){	?>
								<option value="<?=$data['category_id'];?>"><?=$data['category'];?></option>
						<?php	}?>
					</select>
			</div>

			<div class="_100">
				<p><label for="textfield">Supplier</label>
					<select name="supplier">
						<?php foreach($datasup as $data){	?>
								<option value="<?=$data['supplier_id'];?>"><?=$data['supplier'];?></option>
						<?php	}?>
					</select>
			</div>

			<div class="_100">
				<p><label for="textfield">Nama Produk</label><input id="textfield" name="nama" class="required" type="text"></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Harga Jual</label><input id="textfield" name="harga" class="required" type="text"></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Harga Modal (P.O.)</label><input id="textfield" name="harga_po" class="required" type="text"></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Harga Paling Murah (P.M.)</label><input id="textfield" name="harga_pm" class="required" type="text"></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Stok Produk</label><input id="textfield" name="stok" class="required" type="text"></p>
			</div>

			<div class="_100">
				<p><label for="textarea">Keterangan</label><textarea id="textarea" name="description" rows="5" cols="40"></textarea></p>
			</div>

			<div class="_50">
				<p>
					<span class="label">Aktif</span>
					<label><input type="radio" name="aktif" value="Y" checked> Y</label>
					<label><input type="radio" name="aktif" value="N"> N</label>
				</p>
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
		<h1>Manajemen Product</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>

	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>
	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Ubah Produk</h1><span></span>
			</div>
			<form action="products.php?module=act_update_product" method="post" class="block-content form"> <!-- id="validate-form"  -->
			<input id="textfield" name="productid" class="required" type="hidden" value="<?=$dataupdate['product_id'];?>">

			<div class="_100">
				<p><label for="textfield">Kategori</label>
					<select name="category">
					<?php foreach($datacat as $data){
						if ($data['category_id'] == $dataupdate['category_id']){?>
							<option value="<?=$data['category_id'];?>" SELECTED><?=$data['category'];?></option>
						<?php } else{?>
							<option value="<?=$data['category_id'];?>"><?=$data['category'];?></option>
					<?php	}
					 }?>
					</select>
			</div>

			<div class="_100">
				<p><label for="textfield">Supplier</label>
					<select name="supplier">
						<?php foreach($datasup as $data){
							if ($data['supplier_id'] == $dataupdate['supplier_id']){?>
								<option value="<?=$data['supplier_id'];?>" SELECTED><?=$data['supplier'];?></option>
							<?php } else{?>
								<option value="<?=$data['supplier_id'];?>"><?=$data['supplier'];?></option>
						<?php	}
						 }?>
					</select>
			</div>

			<div class="_100">
				<p><label for="textfield">Nama Produk</label><input id="textfield" name="nama" class="required" type="text" value="<?=$dataupdate['product'];?>"></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Harga Jual</label><input id="textfield" name="harga" class="required" type="text" value="<?=$dataupdate['price'];?>"></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Harga Modal (P.O.)</label><input id="textfield" name="harga_po" class="required" type="text" value="<?=$dataupdate['po_price'];?>"></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Harga Paling Murah (P.M.)</label><input id="textfield" name="harga_pm" class="required" type="text" value="<?=$dataupdate['pm_price'];?>"></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Stok Produk</label><input id="textfield" name="stok" class="required" type="text" value="<?=$dataupdate['stock'];?>"></p>
			</div>

			<div class="_100">
				<p><label for="textarea">Keterangan</label><textarea id="textarea" name="description" rows="5" cols="40"><?=$dataupdate['description'];?></textarea></p>
			</div>

			<div class="_50">
				<p>
					<span class="label">Aktif</span>
					<label><input type="radio" name="aktif" value="Y" <?=$aktif1;?>> Y</label>
					<label><input type="radio" name="aktif" value="N" <?=$aktif2;?>> N</label>
				</p>
			</div>

			<div class="clear"></div>
				<div class="block-actions">
					<ul class="actions-left">
						<li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
					</ul>
					<ul class="actions-right">
						<li><input type="submit" class="button" value="Update"></li>
					</ul>
				</div>
			</form>
		</div>
	</div>

<?php } elseif ($proses == 'update_category'){?>

	<div class="grid_12">
		<h1>Manajemen Supplier</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>

	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>
	{section name=dataupdate_category loop=$dataupdate_category}
	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Ubah Supplier</h1><span></span>
			</div>
			<form action="categories.php?module=act_update_category" method="post" class="block-content form"> <!-- id="validate-form"  -->
			<div class="_100">
				<p><label for="textfield">Nama Category</label>
					<input id="textfield" name="nama" class="required" type="text" value="{$dataupdate_category[dataupdate_category].category}">
					<input id="textfield" name="category_id" class="required" type="hidden" value="{$dataupdate_category[dataupdate_category].category_id}"></p>
			</div>

			<div class="_50">
				<p>
					<span class="label">Aktif</span>
					<label><input type="radio" name="aktif" value="Y" {$aktif1}> Y</label>
					<label><input type="radio" name="aktif" value="N" {$aktif2}> N</label>
				</p>
			</div>

			<div class="clear"></div>
				<div class="block-actions">
					<ul class="actions-left">
						<li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
					</ul>
					<ul class="actions-right">
						<li><input type="submit" class="button" value="Update"></li>
					</ul>
				</div>
			</form>
		</div>
	</div>
	{/section}

<?php }} else{?>



<div class="grid_12">
	<h1>Manajemen Product</h1>
</div>

<ul class="actions-left">
	<a class="button red" id="reset-validate-form" href="Products/add">Tambah Produk</a>
</ul>

<div class="grid_12">
	<div class="block-border">
		<div class="block-header">
			<h1>Daftar Produk  |</h1><h1><a href="products_report.php" target="_blank">Download Produk</a></h1><span></span>

		</div>
		<div class="block-content">
			<table id="table-example" class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Produk</th>
						<th>Kategori</th>
						<th>Stok</th>
						<th>Harga</th>
						<th>Modal</th>
						<th>Harga Paling Murah</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; $priceomset ="";
					$modalomset ="";
					$pmomset =""; foreach ($dataproducts as $dataproduct){?>
					<tr class="gradeX">
						<td width="10"><?=$no;?></td>
						<td><?=$dataproduct['product'];?></td>
						<td><?=$dataproduct['category'];?></td>
						<td><?=$dataproduct['stock'];?></td>
						<td>Rp. <?=$dataproduct['price'];?></td>
						<td>Rp. <?=$dataproduct['po_price'];?></td>
						<td>Rp. <?=$dataproduct['pm_price'];?></td>
						<td class="center">
							<a href="Products/update/<?=$dataproduct['product_id'];?>" title="<?=$dataproduct['product'];?>"><img src="<?=base_url();?>/asset/img/update.png"></a> &nbsp;
							<!-- <a href="?module=hapus_user&id={$datauser[datauser].employe_id}" onclick="return confirm('Anda yakin ingin menghapus user {$datauser[datauser].name}?');" disabled><img src="img/hapus.png"></a> --></td>
					</tr>
					<?php $no++;

					$qtyomset = $dataproduct['stock'] * $dataproduct['po_price'];
					$modalomset += $qtyomset;
					$pmqomset = $dataproduct['stock'] * $dataproduct['pm_price'];
					$pmomset += $pmqomset;
					$promset = $dataproduct['stock'] * $dataproduct['price'];
					$priceomset += $promset;}?>
					<tr>
						<td colspan="4"></td>
						<td>Rp. <?=$priceomset;?></td>
						<td>Rp. <?=$modalomset;?></td>
						<td>Rp. <?=$pmomset;?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php }?>
