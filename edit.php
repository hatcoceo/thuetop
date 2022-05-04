<!-- sua bai viet -->

<?php  
	require_once '../condb.php' ;

	if (isset($_GET['action'])) $action = $_GET['action'];
		
	if ($action == "title") 
	{
		$sql = "SELECT * FROM tieu_de WHERE id = 1";

		$qr = mysqli_query($GLOBALS['connect'], $sql);

		while ($_GLOBALS['f_a']= mysqli_fetch_array($qr))
		{?>
			<a href="?action=detail&id_tieu_de=&id_user="><?php echo $_GLOBALS['f_a']['noi_dung_tieu_de']; ?></a>
		<?php }

	}
		

	if ($action == "add") 
	{
		echo "a";
	}

	if ($action == "detail") 
	{
		$sql2 = "SELECT * FROM bai_dang WHERE id_tieu_de = 1";

		$qr2 = mysqli_query($GLOBALS['connect'], $sql2);


		while ($f_a2 = mysqli_fetch_array($qr2)) 
		{
			echo $f_a2['noi_dung_bai_dang'];

		}
		//select_while('bai_dang', 'id_tieu_de', 1, 'noi_dung_bai_dang');
		
	}


?>