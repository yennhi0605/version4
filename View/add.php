<?php
	require '../View/indexAdmin.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../Css/add.css">
	<link rel="stylesheet" type="text/css" href="../Css/index.css">
</head>

<body>
	<form action="indexAdmin.php" method="post">
		<div class="container" style="background-color: black">
			<h2 style="text-align: center;color: brown">ADD PRODUCT</h2>
			<hr>
			<input type="file" name="img">
			<label><b style="margin-top: 30px">Name Product</b></label>
			<input type="text" placeholder="Enter Product Name" name="namePr">

			<label><b>Type Product</b></label>
			<input type="text" placeholder="Enter Product Type" name="type">
			<hr>
			<label><b>Price Product</b></label>
			<input type="text" placeholder="Enter Product Price" name="price">
			<hr>
			<form action="" method="post">
				<button style="margin-top: 10px;background-color: brown" type="submit" name="add">ADD</button>
			</form>
		</div>
	</form>

</body>

</html>