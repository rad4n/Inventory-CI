<?php
	if(!empty($content)){
		if ($content == 'Users')
			{include "Users.php";}

		elseif ($content == 'Suppliers')
			{include "Suppliers.php";}

		elseif ($content == 'Categories')
			{include "Categories.php";}

		elseif ($content == 'Merks')
			{include "Merks.php";}

		elseif ($content == 'Products')
			{include "Products.php";}

		elseif ($content == 'Sales')
			{include "Sales.php";}

		elseif ($content == 'Buys')
			{include "Buys.php";}

		elseif ($content == 'Searchs')
			{include "Searchs.php";}

		elseif ($content == 'Reports')
			{include "Reports.php";}
}
else{
	echo "Hai, <b>".$name."</b>.<br>
	Selamat datang di Aplikasi Point of Sales ASFA Jaya, sebuah aplikasi yang dapat membantu anda untuk mengerjakan transaksi
	secara cepat dan mudah.<br>
	Saat ini, Anda login sebagai ".$level;
}
?>
