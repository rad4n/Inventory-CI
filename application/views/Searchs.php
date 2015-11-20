<div class="grid_12">
	<h1>Manajemen Product</h1>
</div>

<ul class="actions-left">
	<a class="button red" id="reset-validate-form" href="products.php?module=add_product">Tambah Produk</a>
</ul>

<div class="grid_12">
	<div class="block-border">
		<div class="block-header">
			<h1>Hasil Pencarian:</h1><span></span>
			
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
					{section name=dataproduct loop=$dataproduct}
					<tr class="gradeX">
						<td width="10">{$dataproduct[dataproduct].no}</td>
						<td>{$dataproduct[dataproduct].product}</td>
						<td>{$dataproduct[dataproduct].category}</td>
						<td>{$dataproduct[dataproduct].stock}</td>
						<td>Rp. {$dataproduct[dataproduct].price}</td>
						<td>Rp. {$dataproduct[dataproduct].po_price}</td>
						<td>Rp. {$dataproduct[dataproduct].pm_price}</td>
						<td class="center">
							<a href="products.php?module=update_product&id={$dataproduct[dataproduct].product_id}&catid={$dataproduct[dataproduct].category_id}&supid={$dataproduct[dataproduct].supplier_id}" title="{$dataproduct[dataproduct].product}"><img src="img/update.png"></a> &nbsp;
							<!-- <a href="?module=hapus_user&id={$datauser[datauser].employe_id}" onclick="return confirm('Anda yakin ingin menghapus user {$datauser[datauser].name}?');" disabled><img src="img/hapus.png"></a> --></td> 
					</tr>
					{/section}
				</tbody>
			</table>
		</div>
	</div>
</div>