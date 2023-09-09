<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <style>
    .alert {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    text-align: center;
    }

    .alert h2 {
    font-size: 20px;
    font-weight: bold;
    margin: 0 0 10px;
    }

    .alert p {
    font-size: 16px;
    margin: 0;
    }

    .alert button {
    display: block;
    margin: 20px auto 0;
    padding: 10px 20px;
    background-color: rgb(79, 191, 168);
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    }

    a:hover {
    color: inherit;
    text-decoration: none;
    }

    .btnn{
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    color: #fff;
    background-color: #d9534f;
    border-color: #d43f3a;
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
                    <li >
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
                    <li class="active">
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


<div id="content"><!-- #content Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-12"><!-- col-md-12 Begin -->
            <ul class="breadcrumb"><!-- breadcrumb Begin -->
                <li>
                    <a href="index1.php">Home</a>
                </li>
                <li>
                    Product
                </li>
            </ul><!-- breadcrumb Finish -->
        </div><!-- col-md-12 Finish -->

  
        
        <div id="order" class="col-md-9" style="width: 100%;"><!-- col-md-9 Begin -->
            <div class="box"><!-- box Begin -->
                <form method="post" enctype="multipart/form-data"><!-- form Begin -->
                    <h1>Manage the Product</h1>
                    <br>
                    <br>
                        <tbody>
                            <?php
                            // establish database connection
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "admin_platform";
                            $conn = mysqli_connect($servername, $username, $password, $dbname);

                            // check connection
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            // retrieve product information from database
                            $sql = "SELECT * FROM product";
                            $result = mysqli_query($conn, $sql);

                            // display product information in a table format
                            if (mysqli_num_rows($result) > 0) {
                                echo "<table class=\"table\">";
                                echo "<thead><tr><th>Product ID</th><th>Product Name</th><th>Description</th><th>Price</th><th>Stock</th><th>Category ID</th><th>Action</th></tr></thead>";
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $product_id = $row["product_id"];
                                    $product_name = $row["product_name"];
                                    $product_description = $row["product_description"];
                                    $product_price = $row["product_price"];
                                    $product_stock = $row["product_stock"];
                                    $category_id = $row["category_id"];
                                    echo "<td>".$product_id."</td>";
                                    echo "<td>".$product_name."</td>";
                                    echo "<td>".$product_description."</td>";
                                    echo "<td>".$product_price."</td>";
                                    echo "<td>".$product_stock."</td>";
                                    echo "<td>".$category_id."</td>";
                                    echo "<td><a href=\"update_product.php?product_id=".$product_id."\">Update</a></td>";
                                    echo '<td>
                                            <form method="post">
                                                <input type="hidden" name="id" value="'.$product_id.'">
                                                <button class="btnn" style="width: auto" type="submit" name="delete">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>';
                                    echo "</tr>";
                                }
                                echo "</table>";
                            }
                            
                            // process delete operation if delete button is clicked
                            if (isset($_POST["delete"]) && isset($_POST["id"])) {
                                $id = $_POST["id"];
                            
                                // check if the product has associated categories
                                $check_categories_sql = "SELECT * FROM order_product WHERE product_id = $id";
                                $check_categories_result = mysqli_query($conn, $check_categories_sql);
                                $has_categories = mysqli_num_rows($check_categories_result) > 0;
                            
                                // if the product has associated categories, delete them
                                if ($has_categories) {
                                    $delete_categories_sql = "DELETE FROM order_product WHERE product_id = $id";
                                    if (mysqli_query($conn, $delete_categories_sql)) {
                                        $categories_deleted = true;
                                    } else {
                                        $categories_deleted = false;
                                        echo "Error deleting associated categories: " . mysqli_error($conn) . "<br>";
                                    }
                                }
                            
                                // delete the product
                                $delete_product_sql = "DELETE FROM product WHERE product_id = $id";
                                if (mysqli_query($conn, $delete_product_sql)) {
                                    $product_deleted = true;
                                } else {
                                    $product_deleted = false;
                                    echo "Error deleting product: ". mysqli_error($conn) . "<br>";
                                }
                                // display success or failure message based on deletion results
                                if ($product_deleted && (!$has_categories || $categories_deleted)) {
                                    echo '<div class="alert">
                                    <h2>Reminder</h2>
                                    <p>Product Deleted Successfully!</p>
                                    <a href="products.php">
                                    <button>Close</button>
                                    </a>
                                    </div>';
                                } else {
                                    echo "Error deleting product: ". mysqli_error($conn) . "<br>";
                                }
                            }
                            mysqli_close($conn);
                            ?>
                        </tbody>    
 
                
                    <div class="box-footer"><!-- box-footer Begin -->
                        <div class="pull-right"><!-- pull-right Begin -->
                            <a href="add_product.php" class="btn btn-default"><!-- btn btn-default Begin -->
                                <i class="fa fa-plus-circle"></i> Add New Prodcut
                            </a><!-- btn btn-default Finish -->
                        </div><!-- pull-right Finish -->
                    </div><!-- box-footer Finish -->
                       
                </form><!-- form Finish -->
                
            </div><!-- box Finish -->
    </div><!-- container Finish -->
</div><!-- #content Finish -->



<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>



    
    
</body>
</html>
