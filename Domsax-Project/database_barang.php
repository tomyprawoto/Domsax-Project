<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db("db_webservices");

	$databarang = simplexml_load_file('barang.xml');
	foreach ($databarang->barang  as $barang) {
		$kode_barang = $barang->kode;
		$satuan = $barang->satuan;
		$harga = $barang->harga;
		$asal_pt = $barang->asal->pt;
		$asal_kodewil = $barang->asal->kodewil;
		$tujuan_pt = $barang->tujuan->pt;
		$tujuan_kodewil = $barang->tujuan->kodewil;
		$query = "INSERT INTO tb_barang VALUES ('$kode_barang', '$satuan', '$harga', '$asal_pt', '$asal_kodewil', '$tujuan_pt', '$tujuan_kodewil')";
		 $result = mysql_query($query);

		 if ($query) {
		 	echo "<h1>Succes save to Database</h1>";
		 }else{
		 echo "<h1>Field save to Database</h1>";
		 }
				  

				


	}
?>