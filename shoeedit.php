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
	<?php $shoe_id=$_GET['shoe_id'];
		
		include 'conn.php';

	$query="SELECT * FROM `shoes` where shoe_id='$shoe_id'";
	$result=mysqli_query($con,$query);
	$json_data=array();
	while($row=mysqli_fetch_assoc($result)){
		
		$shoe_brand=$row['shoe_brand'];
		$shoe_desc=$row['shoe_desc'];
		$shoe_price=$row['shoe_price'];
    $shoe_name=$row['shoe_name'];
    $shoe_img=$row['shoe_img'];
	}
	
	?>
		   <form name="register" action="shoeinsert.php" method="post" class="container" style="height: 700px;width: 500px;margin-top: 100px;">
        <input type="hidden" name="shoe_id" value="<?php echo $shoe_id?>" id="shoe_id">
    <div class="form-group">
       <h1 style="font-family: cursive;">Edit The shoe</h1>
    </div>
    <div class="form-group">
      <label>shoe Brand</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="Brand" name="shoe_brand" placeholder="shoe Brand" class="form-control" required="" value="<?php echo $shoe_brand?>">
    </div>
    </div>
     <div class="form-group">
    <label>shoe Description</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="Description" name="shoe_desc" placeholder="shoe Description" class="form-control" required="" value="<?php echo $shoe_desc?>">
    </div>
    </div>
     <div class="form-group">
    <label>shoe Price</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="price" name="shoe_price" placeholder="shoe Price" class="form-control" required="" value="<?php echo $shoe_price?>">
    </div>
    </div>
    <div class="form-group">
      <label>shoe Name</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="text" name="shoe_name" placeholder="shoe name" class="form-control" required="" value="<?php echo $shoe_name?>">
    </div>
    </div>
    
    <button type="submit" name="submit" class="btn btn-success" id="btn">Submit</button>
  </form>
	<img src="<?php echo $shoe_img?>" id="profile_pic" width="150px" height="150px" style="border-radius: 50%;margin-left: 500px;margin-bottom: 100px;">
         <input type="hidden" id="eid" class="form-control" placeholder="EID" value="<?php echo $shoe_id?>" readonly>

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
                               	"shoe_id":eid,
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
			var shoe_name=document.getElementById('shoe_name').value;
                var shoe_id=document.getElementById('shoe_id').value;
               
                var shoe_brand = document.getElementById('shoe_brand').value;
                var shoe_desc = document.getElementById('shoe_desc').value;
                var shoe_price = document.getElementById('shoe_price').value;
                               
                alert(id);
                $.ajax({
                    url:"update.php",
                    type:"post",
                    data:{
                        "shoe_name":name,
                        
                        "shoe_brand":brand,
                        "shoe_desc":desc,
                        "shoe_price":price,
                        "shoe_id":id
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