<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="js/jquery-331.min.js"></script>
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
    </style>
</head>
<body>
   
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
                        <li>
                           <a href="index1.php">Home</a>
                        </li>
                        <li  class="active">
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
   
    <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
            <div class="col-md-12"><!-- col-md-12 Begin -->
               
                <ul class="breadcrumb"><!-- breadcrumb Begin -->
                    <li>
                       <a href="index1.php">Home</a>
                    </li>
                    <li>
                       <a href="category.php">Category</a>
                    </li>
                    <li>
                       Add Category
                    </li>
                </ul><!-- breadcrumb Finish -->
            </div><!-- col-md-12 Finish -->

           
            <div class="col-md-9" style="width: 100%;"><!-- col-md-9 Begin -->
                 <div class="box"><!-- box Begin --> 
                    <div class="box-header"><!-- box-header Begin -->
                        <center><!-- center Begin -->
                            <h2> Add Category</h2>
                        </center><!-- center Finish -->
                       
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_platform";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Display the results
echo "<form method='post'>
                           
                            <div class='form-group'><!-- form-group Begin -->
                               <label>Name</label>
                               <input type='text' class='form-control' name='category_name' required>
                            </div><!-- form-group Finish -->
                           
                            <div class='form-group'><!-- form-group Begin -->
                               <label>Description</label>
                               <input type='text' class='form-control' name='category_description' required>
                            </div><!-- form-group Finish -->
                           
                            <div class='text-center'>
                               <button type='submit' name='add' class='btn btn-primary'>
                               <i class='fa fa-plus'></i> Add
                               </button>
                            </div>
        </form>";



        if (isset($_POST["add"])) {
            $name = $_POST["category_name"];
            $des = $_POST["category_description"];
            $sql = "INSERT INTO category (category_name, category_description) VALUES ('$name', '$des')";
            if (mysqli_query($conn, $sql)) {
                echo '<div class="alert">
                    <h2>Reminder</h2>
                    <p>Category Information Inserted Successfully!</p>
                    <a href="category.php">
                    <button>Close</button>
                    </a>
                    </div>';
            } else {
              echo "Error category user information: " . mysqli_error($conn);
            }
          }
        
        $conn->close();
?>
                       
                   </div><!-- box-header Finish -->
               </div><!-- box Finish -->
           </div><!-- col-md-9 Finish -->
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
