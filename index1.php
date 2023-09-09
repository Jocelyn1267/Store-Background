<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <style>

    body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

header {
	background-color: #222;
	color: #fff;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 20px;
}

.logo {
	font-size: 24px;
	font-weight: bold;
}

nav ul {
	list-style: none;
	display: flex;
}

nav li {
	margin-left: 20px;
}

nav a {
	color: #fff;
	text-decoration: none;
}

.container-1 {
	max-width: 1200px;
	margin: 0 auto;
	padding: 20px;
}

.row {
	display: flex;
	flex-wrap: wrap;
	margin: -10px;
}

.col-4 {
	flex-basis: calc(33.33% - 20px);
	margin: 10px;
}

.card {
	background-color: #f5f5f5;
	padding: 20px;
	box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}

.card h2 {
	font-size: 24px;
	margin: 0 0 10px 0;
}

.card p {
	font-size: 16px;
	margin: 0 0 20px 0;
}

.button {
	display: inline-block;
	background-color: #222;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
}

h1 {
  text-shadow: 8px -12px 0 rgba(79, 191, 168, 0.5), -1px -1px 0 rgba(79, 191, 168, 0.5), 1px -1px 0 rgba(79, 191, 168, 0.5), -1px 1px 0 rgba(79, 191, 168, 0.5);
  font-family: 'Montserrat', sans-serif;
  color: rgb(0 0 0 / 50%);

}
.combine{
    text-align: center;
    width: 100%;
    margin-top: 2%;
}
    </style>
</head>
<body>

    <script type="text/javascript">
		function refresh() {
			location.reload();

		}
	</script>

<div id="top"><!-- Top Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
        </div><!-- col-md-6 offer Finish -->
        
        <div class="col-md-6"><!-- col-md-6 Begin -->
            <ul class="menu"><!-- cmenu Begin -->

                <li>
                    <a href="index.php">Logout</a>
                </li>
                
            </ul><!-- menu Finish -->   
        </div><!-- col-md-6 Finish -->
    </div><!-- container Finish -->
</div><!-- Top Finish -->


<div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
    <div class="container"><!-- container Begin -->

        <div class="navbar-header"><!-- navbar-header Begin -->
            <a href="index1.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                <img src="images/logo.png" style='width: 100px;'alt="M-dev-Store Logo" class="hidden-xs">
            </a><!-- navbar-brand home Finish -->
            
            <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation"> 
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-align-justify"></i>
            </button>
            
            <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                <span class="sr-only">Toggle Search</span>
                <i class="fa fa-search"></i>
            </button>   
        </div><!-- navbar-header Finish -->
        
        <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->

            <div class="padding-nav"><!-- padding-nav Begin -->
                <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                    <li class="active">
                        <a href="index1.php">Home</a>
                    </li>
                    <li>
                        <a href="category.php">Category</a>
                    </li>
                    <li>
                        <a href="customer.php">Customer</a>
                    </li>
                    <li>
                        <a href="order.php">Order</a>
                    </li>
                    <li>
                        <a href="products.php">Product</a>
                    </li>
		            <li>
                        <a href="my_account.php?1">My Account</a>
                    </li>
                </ul><!-- nav navbar-nav left Finish --> 
            </div><!-- padding-nav Finish -->

            
            <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button><!-- btn btn-primary navbar-btn Finish -->
            </div><!-- navbar-collapse collapse right Finish -->
            
            <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                    <div class="input-group"><!-- input-group Begin -->
                        <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                        <span class="input-group-btn"><!-- input-group-btn Begin -->
                        <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                            <i class="fa fa-search"></i>
                        </button><!-- btn btn-primary Finish -->
                        </span><!-- input-group-btn Finish -->
                    </div><!-- input-group Finish -->
                </form><!-- navbar-form Finish -->
            </div><!-- collapse clearfix Finish -->

        </div><!-- navbar-collapse collapse Finish -->

    </div><!-- container Finish -->
</div><!-- navbar navbar-default Finish -->

   <div class="container" id="slider"><!-- container Begin -->
       
       <div class="col-md-12"><!-- col-md-12 Begin -->
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
       <div class="box"><!-- box Begin -->


	<div class="container-1">
        <center>
        <h1>Welcome To Dev-M-Store Admin System</h1>
        </center>
        <br>
        <br>
		<p>Here you can manage your customers, products, categories, orders and your own information.</p>
        <br>
		<div class="row">
			<div class="col-4">
				<div class="card">
					<h2>Customers</h2>
					<p>Manage your customers here.</p>
					<a href="customer.php" class="button">View Customers</a>
				</div>
			</div>
			<div class="col-4">
				<div class="card">
					<h2>Products</h2>
					<p>Manage your products here.</p>
					<a href="products.php" class="button">View Products</a>
				</div>
			</div>
			<div class="col-4">
				<div class="card">
					<h2>Orders</h2>
					<p>Manage your orders here.</p>
					<a href="order.php" class="button">View Orders</a>
				</div>
			</div>
            <div class="combine">
            <div class="col-4" style="display: inline-block; width:40%;">
				<div class="card">
					<h2>Categories</h2>
					<p>Manage your categories here.</p>
					<a href="category.php" class="button">View Categories</a>
				</div>
			</div>
            <div class="col-4" style="display: inline-block; width:40%;">
				<div class="card">
					<h2>My Account</h2>
					<p>Manage your account here.</p>
					<a href="my_account.php?1" class="button">View Profile</a>
				</div>
			</div>
            </div>
		</div>
	</div>

               
           </div><!-- container Finish -->
           
       </div><!-- box Finish -->
       

   
   
   
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
