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
<body>
	<button id="button">Click me</button><br>
<input type="text" name="search" id="search" placeholder="Enter Name to search">
<button id="searchbtn">Search</button>
<table class="table" id="history_display">
    <thead>
     <th>ID</th>
     <th>cat</th>
      <th>brand</th>
      <th>desc</th>
      <th>price</th>
      <th>Name</th>
      <th>img</th>
      <th>Action</th>
    </thead>
</table>

<script type="text/javascript">
	$(function(){
		$('#searchbtn').click(function(){
			var a=document.getElementById('search').value;
			alert(a);
			$.ajax({
				url:'productsearch.php',
				type:'post',
				data:{
					"prd_name":a
				},
				success:function(response){
					
					var obj=JSON.parse(response);
					
                        var table_content=""
                        $('#history_display').find('tr:not(:first)' ).remove();
                        $.each(obj,function(index,value){
                        	alert(value.prd_id)
                            table_content+="<tr>";
                            table_content+="<td>"+value.prd_id+"</td>";
                            table_content+="<td>"+value.prd_cat+"</td>";
                            table_content+="<td>"+value.prd_brand+"</td>";
                            table_content+="<td>"+value.prd_desc+"</td>";
                            table_content+="<td>"+value.prd_price+"</td>";
                            table_content+="<td>"+value.prd_name+"</td>";
                            table_content+="<td>"+value.prd_img+"</td>";
  table_content+="<td><a class='btn btn-primary' href='productedit.php?prd_id="+value.prd_id+"'>Edit</a><button class='btn btn-danger' onclick='delet("+value.prd_id+")'>Delete</button></td>";
                            table_content+="</tr>";
                        });
                        $("#history_display").append(table_content);
				},
				error:function(){
					alert('something went wrong')
				}
			})
		})
	})
	function delet(id){
		alert(id);
		$.ajax({
				url:'productdelete.php',
				type:'post',
				data:{
					"prd_id":id
				},
				success: function(response){
					alert(response);
				},
				error:function(){
					alert('not right')
				}
			})
	}
	$(function(){
		$('#button').click(function(){
			$.ajax({
				url:'productindex.php',
				type:'get',
				data:{

				},
				success: function(response){
					
					var obj=JSON.parse(response);

                        var table_content=""
                        $('#history_display').find( 'tr:not(:first)' ).remove();
                        $.each(obj,function(index,value){
                            table_content+="<tr>";
                            table_content+="<td>"+value.prd_id+"</td>";
                            table_content+="<td>"+value.prd_cat+"</td>";
                            table_content+="<td>"+value.prd_brand+"</td>";
                            table_content+="<td>"+value.prd_desc+"</td>";
                            table_content+="<td>"+value.prd_price+"</td>";
                            table_content+="<td>"+value.prd_name+"</td>";
                            table_content+="<td>"+value.prd_img+"</td>";
  table_content+="<td><a class='btn btn-primary' href='productedit.php?prd_id="+value.prd_id+"'>Edit</a><button class='btn btn-danger' onclick='delet("+value.prd_id+")'>Delete</button></td>";
                            table_content+="</tr>";
                        });
                        $("#history_display").append(table_content);
				},
				error: function(){
					alert('Something went wrong');
				}
			})
		})
		
	})

</script>
</body>
</html>