<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "ecart");
if(isset($_POST["add"]))
{
	if(isset($_SESSION["cart"]))
	{
		$item_array_id = array_column($_SESSION["cart"], "iphone_id");
		if(!in_array($_GET["iphone_id"], $item_array_id))
		{
			$count = count($_SESSION["cart"]);
			$item_array = array(
			'iphone_id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'iphone_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"]
			);
			$_SESSION["cart"][$count] = $item_array;
			echo '<script>window.location="iphonecart.php"</script>';
		}
		else
		{
			echo '<script>alert("Products already added to cart")</script>';
			echo '<script>window.location="iphonecart.php"</script>';
		}
	}
	else
	{
		$item_array = array(
		'iphone_id' => $_GET["id"],
		'item_name' => $_POST["hidden_name"],
		'iphone_price' => $_POST["hidden_price"],
		'item_quantity' => $_POST["quantity"]
		);
		$_SESSION["cart"][0] = $item_array;
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["iphone_id"] == $_GET["id"])
			{
				unset($_SESSION["cart"][$keys]);
				echo '<script>alert("Product has been removed")</script>';
				echo '<script>window.location="iphonecart.php"</script>';
			}
		}
	}
}
?>