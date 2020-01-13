<?php
require '../Database/database.php';

if (isset($_POST['edit'])) {
	$image_edit = $_POST['imagePr'];
	$name_edit = $_POST['namePr'];
	$price_edit = $_POST['pricePr'];
	$type_edit = $_POST['typePr'];

	$stm = 'UPDATE milktea SET image="../Image/' . $image_edit . '", name="' . $name_edit . '", price=' . $price_edit . ' WHERE id=' . $_POST['edit'] . '';
	$db->query($stm);
}
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../Css/edit.css">
</head>
<body>
	<?php
		$sql = "SELECT * FROM milktea ORDER BY id";
		$result = $db->query($sql)->fetch_all();
	?>
	<?php
		for ($i = 0; $i < count($result); $i++) {
	?>

		<form action="edit.php" method="post">
			<h2 style="text-align: center;">Edit</h2>
			<div>
				<label for="">Image</label>
				<input type="file" name="imagePr" id="" value="<?php echo $result[$i][0] ?>" placeholder="">
				<label>Product Name</label>
				<input type="text" name="namePr" value="<?php echo $result[$i][1] ?>">
			</div>
			<div>
				<label>Product Type</label>
				<input type="text" name="typePr" value="<?php echo $result[$i][3] ?>">
			</div>
			<div>
				<label>Product Price</label>
				<input type="text" name="pricePr" value="<?php echo $result[$i][2] ?>">
			</div>
			<button name="edit" type="submit" value="<? echo $result[$i][0] ?>">Edit</button>
		</form>
	<?php
		}
	?>
	</div>
</body>

</html>