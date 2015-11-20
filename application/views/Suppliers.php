<?php
if(!empty($proses)){
if ($proses == 'add'){?>

	<div class="grid_12">
		<h1>Manajemen Supplier</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>

	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>

	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Tambah Supplier</h1><span></span>
			</div>
			<form action="<?=$action_form;?>" method="post" class="block-content form"> <!-- id="validate-form"  -->
			<div class="_100">
				<p><label for="textfield">Nama Supplier</label><input id="textfield" name="nama" class="required" type="text"></p>
			</div>

			<div class="_100">
				<p><label for="textarea">Alamat</label><textarea id="textarea" name="alamat" rows="5" cols="40"></textarea></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Phone/Hp</label><input id="textfield" name="phone" type="text"></p>
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
<?php }
elseif ($proses == 'update'){?>

	<div class="grid_12">
		<h1>Manajemen Supplier</h1>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p> -->
	</div>

	<ul class="actions-left">
		<a class="button red" id="reset-validate-form" href="javascript:history.go(-1)">Back</a>
	</ul>
	<div class="grid_6">
		<div class="block-border">
			<div class="block-header">
				<h1>Ubah Supplier</h1><span></span>
			</div>
			<form action="<?=$action_form;?>" method="post" class="block-content form"> <!-- id="validate-form"  -->
			<div class="_100">
				<p><label for="textfield">Nama Supplier</label><input id="textfield" name="nama" class="required" type="text" value="<?=$dataupdate['supplier'];?>"><input id="textfield" name="supplier_id" class="required" type="hidden" value="<?=$dataupdate['supplier_id'];?>"></p>
			</div>

			<div class="_100">
				<p><label for="textarea">Alamat</label><textarea id="textarea" name="alamat" rows="5" cols="40"><?=$dataupdate['address'];?></textarea></p>
			</div>

			<div class="_100">
				<p><label for="textfield">Phone/Hp</label><input id="textfield" name="phone" type="text" value="<?=$dataupdate['phone'];?>"></p>
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
<?php } }
else{?>

<div class="grid_12">
	<h1>Manajemen Supplier</h1>
</div>

<ul class="actions-left">
	<a class="button red" id="reset-validate-form" href="<?=site_url('Suppliers/add');?>">Tambah Supplier</a>
</ul>

<div class="grid_12">
	<div class="block-border">
		<div class="block-header">
			<h1>Daftar Supplier</h1><span></span>

		</div>
		<div class="block-content">
			<table id="table-example" class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Supplier</th>
						<th>Address</th>
						<th>Active</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($datasuppliers as $datasupplier){?>
					<tr class="gradeX">
						<td width="10"><?=$no;?></td>
						<td><?=$datasupplier['supplier'];?></td>
						<td><?=$datasupplier['address'];?></td>
						<td><?=$datasupplier['active'];?></td>
						<td class="center">
							<a href="Suppliers/update/<?=$datasupplier['supplier_id'];?>" title="<?=$datasupplier['supplier'];?>"><img src="<?=base_url();?>/asset/img/update.png"></a> &nbsp;
							<!-- <a href="?module=hapus_user&id={$datauser[datauser].employe_id}" onclick="return confirm('Anda yakin ingin menghapus user {$datauser[datauser].name}?');" disabled><img src="img/hapus.png"></a> --></td>
					</tr>
				<?php $no++;}?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php }?>
