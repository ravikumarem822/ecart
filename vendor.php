<!DOCTYPE html>
<html>
<head>
	<title>vendor</title>
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(pier-407252_1920.jpg);background-repeat: no-repeat;background-size: cover;">
   <form action="logout2.php" method="post">
  <button type="submit" class="btn btn-info" style="position: absolute;z-index: 999;top: 100px;left: 950px;">Logout</button>
</form>
	 <form name="register" action="productinsert.php" method="post" class="container" style="height: 700px;width: 500px;margin-top: 50px;">
    <div class="form-group">
    	 <h1 style="font-family: cursive;">Vendor</h1>
      <label>Product Category</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="category" name="prd_cat" placeholder="Product Category" class="form-control">
    </div>
    </div>
    <div class="form-group">
      <label>Product Brand</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="Brand" name="prd_brand" placeholder="Product Brand" class="form-control" required="">
    </div>
    </div>
     <div class="form-group">
    <label>Product Description</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="Description" name="prd_desc" placeholder="Product Description" class="form-control" required="">
    </div>
    </div>
     <div class="form-group">
    <label>Product Price</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="price" name="prd_price" placeholder="Product Price" class="form-control" required="">
    </div>
    </div>
    <div class="form-group">
      <label>Product Name</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="text" name="prd_name" placeholder="Product name" class="form-control" required="">
    </div>
    </div>
    <div class="form-group">
    <div>
    	<input type="file" name="prd_img"><br><b style="color: white;">choose Proper files</b><br><br>
    </div>
    </div>
    <button type="submit" name="submit" class="btn btn-success" id="btn">Submit</button>
  </form>
</body>
</html>