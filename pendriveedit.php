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
	<?php $pendrive_id=$_GET['pendrive_id'];
		
		include 'conn.php';

	$query="SELECT * FROM `pendrives` where pendrive_id='$pendrive_id'";
	$result=mysqli_query($con,$query);
	$json_data=array();
	while($row=mysqli_fetch_assoc($result)){
		
		$pendrive_brand=$row['pendrive_brand'];
		$pendrive_desc=$row['pendrive_desc'];
		$pendrive_price=$row['pendrive_price'];
    $pendrive_name=$row['pendrive_name'];
    $pendrive_img=$row['pendrive_img'];
	}
	
	?>
		   <form name="register" action="pendriveinsert.php" method="post" class="container" style="height: 700px;width: 500px;margin-top: 100px;">
        <input type="hidden" name="pendrive_id" value="<?php echo $pendrive_id?>" id="pendrive_id">
    <div class="form-group">
       <h1 style="font-family: cursive;">Edit The pendrive</h1>
    </div>
    <div class="form-group">
      <label>pendrive Brand</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="Brand" name="pendrive_brand" placeholder="pendrive Brand" class="form-control" required="" value="<?php echo $pendrive_brand?>">
    </div>
    </div>
     <div class="form-group">
    <label>pendrive Description</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="Description" name="pendrive_desc" placeholder="pendrive Description" class="form-control" required="" value="<?php echo $pendrive_desc?>">
    </div>
    </div>
     <div class="form-group">
    <label>pendrive Price</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="price" name="pendrive_price" placeholder="pendrive Price" class="form-control" required="" value="<?php echo $pendrive_price?>">
    </div>
    </div>
    <div class="form-group">
      <label>pendrive Name</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-forward"></i></span>
      <input type="text" name="pendrive_name" placeholder="pendrive name" class="form-control" required="" value="<?php echo $pendrive_name?>">
    </div>
    </div>
    
    <button type="submit" name="submit" class="btn btn-success" id="btn">Submit</button>
  </form>
	<img src="<?php echo $pendrive_img?>" id="profile_pic" width="150px" height="150px" style="border-radius: 50%;margin-left: 500px;margin-bottom: 100px;">
         <input type="hidden" id="eid" class="form-control" placeholder="EID" value="<?php echo $pendrive_id?>" readonly>

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
                               	"pendrive_id":eid,
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
			var pendrive_name=document.getElementById('pendrive_name').value;
                var pendrive_id=document.getElementById('pendrive_id').value;
               
                var pendrive_brand = document.getElementById('pendrive_brand').value;
                var pendrive_desc = document.getElementById('pendrive_desc').value;
                var pendrive_price = document.getElementById('pendrive_price').value;
                               
                alert(id);
                $.ajax({
                    url:"update.php",
                    type:"post",
                    data:{
                        "pendrive_name":name,
                        
                        "pendrive_brand":brand,
                        "pendrive_desc":desc,
                        "pendrive_price":price,
                        "pendrive_id":id
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