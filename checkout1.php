<!DOCTYPE html>
<html lang="en">

<head>

    <title>
        order
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">
                            <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


</head>

<body>
 
                        <form action="mailer/index1.php" method="get">
                            <h1>Checkout</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="checkout1.php"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Firstname</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Lastname</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname">
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row">
                                    
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <select class="form-control" id="state" name="state">
                                                <option>Karnataka</option>
                                                <option>Andhra Pradesh</option>
                                                <option>Tamil Nadu</option>
                                                <option>Kerala</option>
                                                <option>Maharashtra</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="country">City</label>
                                            <select class="form-control" id="country" name="city">
                                                <option>Bengaluru</option>
                                                <option>Mysuru</option>
                                                <option>Manya</option>
                                                <option>Raichur</option>
                                                <option>Ballari</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="phone">Postal Address</label>
                                            <input type="address" class="form-control" id="address" name="address">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Telephone</label>
                                            <input type="text" class="form-control" id="phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email">
                                        </div>
                                    </div>

                                </div>
                              
                            </div>
                           <button type="submit" class="btn btn-primary" id="btn">Place Order</button>
                        </form>
                        <script type="text/javascript">
                            $(function(){
                            localStorage['role']="user";
                            })
                        </script>
</body>

</html>