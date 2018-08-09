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
	<?php $phone_id=$_GET['phone_id'];
		
		include 'conn.php';

	$query="SELECT * FROM `phones` where phone_id='$phone_id'";
	$result=mysqli_query($con,$query);
	$json_data=array();
	while($row=mysqli_fetch_assoc($result)){
		
		$phone_brand=$row['phone_brand'];
		$phone_desc=$row['phone_desc'];
		$phone_price=$row['phone_price'];
    $phone_name=$row['phone_name'];
    $phone_img=$row['phone_img'];
	}
	
	?>
		   <form name="register" action="phoneinsert.php" method="post" class="container" style="height: 700px;width: 500px;margin-top: 100px;">
        <input type="hidden" name="phone_id" value="<?php echo $phone_id?>" id="phone_id">
    <div class="form-group">
       <h1 style="font-family: cursive;">Edit The phone</h1>
    </div>
    <div class="form-group">
      <label>phone Brand</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="Brand" name="phone_brand" placeholder="phone Brand" class="form-control" required="" value="<?php echo $phone_brand?>">
    </div>
    </div>
     <div class="form-group">
    <label>phone Description</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="Description" name="phone_desc" placeholder="phone Description" class="form-control" required="" value="<?php echo $phone_desc?>">
    </div>
    </div>
     <div class="form-group">
    <label>phone Price</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="price" name="phone_price" placeholder="phone Price" class="form-control" required="" value="<?php echo $phone_price?>">
    </div>
    </div>
    <div class="form-group">
      <label>phone Name</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="text" name="phone_name" placeholder="phone name" class="form-control" required="" value="<?php echo $phone_name?>">
    </div>
    </div>
    
    <button type="submit" name="submit" class="btn btn-success" id="btn">Submit</button>
  </form>
	<img src="<?php echo $phone_img?>" id="profile_pic" width="150px" height="150px" style="border-radius: 50%;margin-left: 500px;margin-bottom: 100px;">
         <input type="hidden" id="eid" class="form-control" placeholder="EID" value="<?php echo $phone_id?>" readonly>

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
                               	"phone_id":eid,
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
			var phone_name=document.getElementById('phone_name').value;
                var phone_id=document.getElementById('phone_id').value;
               
                var phone_brand = document.getElementById('phone_brand').value;
                var phone_desc = document.getElementById('phone_desc').value;
                var phone_price = document.getElementById('phone_price').value;
                               
                alert(id);
                $.ajax({
                    url:"update.php",
                    type:"post",
                    data:{
                        "phone_name":name,
                        
                        "phone_brand":brand,
                        "phone_desc":desc,
                        "phone_price":price,
                        "phone_id":id
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