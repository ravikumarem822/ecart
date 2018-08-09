<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="framework.css">
    <link rel="stylesheet" type="text/css" href="layout.css">
    <link rel="stylesheet" type="text/css" href="custom.flexslider">
    <link rel="stylesheet" type="text/css" href="font-awesome.min">
	<style type="text/css" id="enject">
	</style>

</head>
<body>

	<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	
<!-- Sidebar end=============================================== -->
	<div class="span9" style="margin-top: -90px;">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Products Name</li>
		<li class="dropdown">
 <a class="dropdown-toggle" data-toggle="dropdown"
role="button" aria-haspopup="true" aria-expanded="false">Categories<span
class="caret"></span></a>
 <ul class="dropdown-menu">
 <li><a href="laptops.php">Laptops</a></li>
 <li><a href="phones.php">Phones</a></li>
 <li><a href="shoes.php">Shoes</a></li>
 <li role="separator" class="divider"></li>
 <li><a href="tvs.php">TV's</a></li>
 <li role="separator" class="divider"></li>
 <li><a href="pendrives.php">Pen Drives</a></li>
 </ul>
 <li class="dropdown">
 <a class="dropdown-toggle" data-toggle="dropdown"
role="button" aria-haspopup="true" aria-expanded="false">Brands<span
class="caret"></span></a>
 <ul class="dropdown-menu">
 <li><a href="dell.php">dell</a></li>
 <li><a href="iphone.php">iphone</a></li>
 <li><a href="hp.php">hp</a></li>
 <li role="separator" class="divider"></li>
 <li><a href="sony.php">sony</a></li>
 <li role="separator" class="divider"></li>
 <li><a href="puma.php">puma</a></li>
 <li><a href="sandisk.php">sandisk</a></li>
 </ul>
 </li>
 <form action="logout1.php" method="post">
	<button type="submit" style="margin-top: -25px; margin-left: 370px;">LogOut</button>
</form>
 </li>
    </ul>
	<h3> Products Name <small class="pull-right">  </small></h3>	
	<input type="text" name="search" id="search" placeholder="Enter Name to search">
	<button id="searchbtn">Search</button>

<div id="myTab" class="pull-right">
 
</div>
<br class="clr"/>
<div class="tab-content">

	

	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails" id="iphonei">
			<!-- <li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="iphonep1.jpg" alt=""/ style="height: 200px;width: 196.97px;"></a>
				<div class="caption"  style="">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					I'm a paragraph. Click here 
				  </p>
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li> -->

			<!-- <li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="sam1.jpeg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					I'm a paragraph. Click here 
				  </p>
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="tv4.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					I'm a paragraph. Click here 
				  </p>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="phone1.jpeg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					I'm a paragraph. Click here 
				  </p>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="iphone1.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					I'm a paragraph. Click here 
				  </p>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="iphone1.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					I'm a paragraph. Click here 
				  </p>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li> -->
		  </ul>
	<hr class="soft"/>
	</div>
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript">
	$(function(){
		$('#searchbtn').click(function(){
			var a=document.getElementById('search').value;
			alert(a);
			$.ajax({
				url:'iphonesearch.php',
				type:'post',
				data:{
					"iphone_name":a
				},
				success:function(response){
					
					var obj=JSON.parse(response);
					
                        var iphone_content=""
                        $('#iphonei').find('tr:not(:first)' ).remove();
                        $.each(obj,function(index,value){

                           iphone_content+="<li class='span3'><div class='thumbnail'><img src='"+value.iphone_img+"' alt='' style='height: 200px;width: 196.97px;'><div class='caption'  style=''><h5>"+value.iphone_name+"</h5><p>"+value.iphone_desc+" Click here</p><a class='btn' href='checkout1.php'>Buy Now</a><a class='btn' href='iphonecart.php'>Add to <i class='icon-shopping-cart'></i></a> <a class='btn btn-primary' href='#'>&euro;"+value.iphone_price+"</a></h4></div> </div></li>";

                        });
                        $("#iphonei").append(iphone_content);
                        
				},
				error:function(){
					alert('something went wrong')
				}
			})
		})
	})
	
	$(function(){
		$(document).ready(function(){
			$.ajax({
				url:'iphoneindex.php',
				type:'get',
				data:{

				},
				success: function(response){
					
					var obj=JSON.parse(response);

                        var iphone_content=""
                        $('#iphonei').find('tr:not(:first)' ).remove();
                        $.each(obj,function(index,value){
                        
                        	iphone_content+="<li class='span3'><div class='thumbnail'><img src='"+value.iphone_img+"' alt='' style='height: 200px;width: 196.97px;'><div class='caption'  style=''><h5>"+value.iphone_name+"</h5><p>"+value.iphone_desc+" Click here</p><a class='btn' href='checkout1.php'>Buy Now</a><a class='btn' href='iphonecart.php'>Add to <i class='icon-shopping-cart'></i></a> <a class='btn btn-primary' href='#'>&euro;"+value.iphone_price+"</a></h4></div> </div></li>";
                           
                        });
                        $("#iphonei").append(iphone_content);
				},
				error: function(){
					alert('Something went wrong');
				}
			})
		})
		
	})

</script>
<div class="wrapper row4 bgded overlay" style="background-image:url('');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">Contact Us</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
         #2341,16th B Cross, Above Wizz Photo Studio, Opp.to City Bank ATM Newtown, Yelahanka, Bengaluru, Karnataka 560064
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +91 9448942568</li>
        <li><i class="fa fa-fax"></i> +91 8861130370</li>
        <li><i class="fa fa-envelope-o"></i> ravikumarem822@gmail.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Mail Us</h6>
      <p class="nospace btmspace-30">You Can Contact Us At Any Time.We Are Here For YOU.</p>
      <form action="mailer/index.php" method="get">

  <input  class="form-control" type="text" id="name" name="name" placeholder="Enter Your Name"><br>
  <input  class="form-control" type="email" id="email" name="email" placeholder="Enter Your Email"><br>
  <textarea name="message" placeholder="Enter Your Message" style="width: 300px;color: black;"></textarea><br>
  <button type="submit" id="btn">Submit</button>
</form>
<script type="text/javascript">
  $(function(){
     localStorage['role']="user";
  })
</script>
    </div>
    <div class="one_third">
      <h6 class="heading">Address</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1" style="color: orange;">Address Of Yelahanka Branch</h2>
            <p class="nospace"> #2341,16th B Cross, Above Wizz Photo Studio, Opp.to City Bank ATM Newtown, Yelahanka, Bengaluru, Karnataka 560064</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1" style="color: orange;">Address Of Vidyaranyapura Branch</h2>
            
            <p class="nospace">#1234,20th C Cross, Above Adobe Photo Studio, Opp.to SBI Bank ATM, Vidyaranyapura, Bengaluru, Karnataka 560164</p>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>