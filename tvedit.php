<!DOCTYPE html>
<html>
<head>
	<title></title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="background-image: url(pier-407252_1920.jpg);background-repeat: no-repeat;background-size: cover;">
	<?php $tv_id=$_GET['tv_id'];
		
		include 'conn.php';

	$query="SELECT * FROM `tvs` where tv_id='$tv_id'";
	$result=mysqli_query($con,$query);
	$json_data=array();
	while($row=mysqli_fetch_assoc($result)){
		
		$tv_brand=$row['tv_brand'];
		$tv_desc=$row['tv_desc'];
		$tv_price=$row['tv_price'];
    $tv_name=$row['tv_name'];
    $tv_img=$row['tv_img'];
	}
	
	?>
		   <form name="register" action="tvinsert.php" method="post" class="container" style="height: 700px;width: 500px;margin-top: 100px;">
        <input type="hidden" name="tv_id" value="<?php echo $tv_id?>" id="tv_id">
    <div class="form-group">
       <h1 style="font-family: cursive;">Edit The tv</h1>
    </div>
    <div class="form-group">
      <label>tv Brand</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="Brand" name="tv_brand" placeholder="tv Brand" class="form-control" required="" value="<?php echo $tv_brand?>">
    </div>
    </div>
     <div class="form-group">
    <label>tv Description</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="Description" name="tv_desc" placeholder="tv Description" class="form-control" required="" value="<?php echo $tv_desc?>">
    </div>
    </div>
     <div class="form-group">
    <label>tv Price</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="price" name="tv_price" placeholder="tv Price" class="form-control" required="" value="<?php echo $tv_price?>">
    </div>
    </div>
    <div class="form-group">
      <label>tv Name</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="text" name="tv_name" placeholder="tv name" class="form-control" required="" value="<?php echo $tv_name?>">
    </div>
    </div>
    
    <button type="submit" name="submit" class="btn btn-success" id="btn">Submit</button>
  </form>
	<img src="<?php echo $tv_img?>" id="profile_pic" width="150px" height="150px" style="border-radius: 50%;margin-left: 500px;margin-bottom: 100px;">
         <input type="hidden" id="eid" class="form-control" placeholder="EID" value="<?php echo $tv_id?>" readonly>

    <input type="file" name="files[]" id="file" accept="" required/>
    <br>
     <button type="button" id="upload_profile_pic" class="btn btn-primary ">Update Pic</button>
<script type="text/javascript">

	$(function(){

		  		     $('#file').on('change', function () {
                    var file_data = $('#file').prop('files')[0];
                    var form_data = new FormData();
                    form_data.append('file', file_data);
                    $.ajax({
                        url: 'upload.php', // point to server-side PHP script 
                        dataType: 'text', // what to expect back from the PHP script
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (response) {
                        
                            alert(response)
                            document.getElementById("profile_pic").src=response;
                            x=response;

                           
                        },
                        error: function (response) {
                          
                           alert(response);
                        }
                    });
               });
  	$('#upload_profile_pic').on('click', function () {

               
                  var eid=$("#eid").val();
                  var profile=x;
                   alert(profile);
                        $.ajax({
                            url:"update_profile_pic.php",
                            type:"post",
                            data:{
                               	"tv_id":eid,
                                "profile":profile
                            },
                            success:function(data){
                              alert(data);
                             // window.reload();   
                              },
                              error:function(){
                              	alert(';hi');
                              }
                });
           
      });
		$('#btn').click(function(){
			var tv_name=document.getElementById('tv_name').value;
                var tv_id=document.getElementById('tv_id').value;
               
                var tv_brand = document.getElementById('tv_brand').value;
                var tv_desc = document.getElementById('tv_desc').value;
                var tv_price = document.getElementById('tv_price').value;
                               
                alert(id);
                $.ajax({
                    url:"update.php",
                    type:"post",
                    data:{
                        "tv_name":name,
                        
                        "tv_brand":brand,
                        "tv_desc":desc,
                        "tv_price":price,
                        "tv_id":id
                    },
                    success:function(data){
                       alert(data);   
                        
                    },
                    error:function(data){
                    	alert('not right');
                    }
                });
		})
  			
	})
        		
              
        
</script>
</body>
</html>