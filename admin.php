 <!DOCTYPE html>
 <html>
 <head>
   <title>admin</title>
              <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
body{
  background-image: url(down-jackets-1281699_1920.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
form{
  height: 700px;width: 500px;margin-top: 50px;margin-left: 500px;margin-top: 200px;color: white;
}
</style>
 </head>

 <body>
  <a href="index.php"><button class="btn btn-primary" type="button" style="position: absolute;z-index: 999;top: 130px;left: 500px;">Home</button></a>
 <form name="login" action="varify2.php" method="post">
    <div class="form-group">
      <h1 style="font-family: cursive;">Log in For Admin</h1>
      <label for="id1">Username</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="text" name="name" id="id1" placeholder="Username" class="form-control" required="">
    </div>
    </div>
    <div class="form-group">
      <label for="id2">Password</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input type="Password" name="password" placeholder="Password" id="id2" class="form-control" required="">
    </div>
    </div>
    <div class="form-group">
    <label for="id2">Role</label>
      <div class="input-group">
        <span class="input-group-addon"></span>
      <input type="role" name="role" placeholder="Role" id="id2" class="form-control" required="">
    </div>
    </div><br>
    <button type="submit" name="submit" class="btn btn-success" id="btn">Log in</button>
  </form>
  <script type="text/javascript">
  $(function(){
     localStorage['role']="admin";
  })
</script>

</body>
 </html>