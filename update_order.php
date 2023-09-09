<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <style>
        /* 提示框的外部容器 */
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

    /* 提示框的标题 */
    .alert h2 {
    font-size: 20px;
    font-weight: bold;
    margin: 0 0 10px;
    }

    /* 提示框的内容 */
    .alert p {
    font-size: 16px;
    margin: 0;
    }

    /* 提示框的按钮 */
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
    /* select 样式 */
    .styled-select {
    position: relative;
    width: 200px;
    height: 36px;
    overflow: hidden;
    background-color: #f7f7f7;
    border-radius: 5px;
    border: none;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    /* option 样式 */
    .styled-select option {
    padding: 10px;
    background-color: #f7f7f7;
    color: #666;
    font-size: 16px;
    border: none;
    border-radius: 0;
    transition: all 0.2s ease-in-out;
    }

    /* 选中 option 样式 */
    .styled-select option:checked {
    background-color: #f9b600;
    color: #fff;
    }

    /* option 下拉箭头 */
    .styled-select:after {
    content: "";
    position: absolute;
    top: 50%;
    right: 10px;
    width: 0;
    height: 0;
    margin-top: -3px;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 6px solid #333;
    transition: all 0.2s ease-in-out;
    }

    /* 下拉箭头翻转 */
    .styled-select:hover:after {
    transform: rotate(180deg);
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
                        <li>
                           <a href="category.php">Category</a>
                        </li>
                        <li>
                           <a href="customer.php">User</a>
                        </li>
                        <li class="active">
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
                        <a href="order.php">Order</a>
                   </li>
                   <li>
                        Edit Order
                   </li>
               </ul><!-- breadcrumb Finish -->
            </div><!-- col-md-12 Finish -->
           

            <div class="col-md-9" style="width: 100%;"><!-- col-md-9 Begin -->
                <div class="box"><!-- box Begin -->
                    <div class="box-header"><!-- box-header Begin -->
                   
                        <center><!-- center Begin -->
                           <h2> Edit Order Information</h2>
                        </center><!-- center Finish -->

                        <?php
                            // Connect to the database
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "admin_platform";

                            $conn = mysqli_connect($servername, $username, $password, $dbname);

                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            if (isset($_GET['order_id'])) {
                                $order_id = $_GET['order_id'];

                                // Prepare an SQL statement to retrieve the data for the specified order
                                $stmt = mysqli_prepare($conn, "SELECT * FROM orders WHERE order_id=?");
                                mysqli_stmt_bind_param($stmt, "i", $order_id);
                                mysqli_stmt_execute($stmt);

                                // Get the result set
                                $result = mysqli_stmt_get_result($stmt);

                                // Check if there is only one row in the result set
                                if (mysqli_num_rows($result) == 1) {
                                    // Retrieve the data for the order and store it in variables
                                    $row = mysqli_fetch_assoc($result);
                                    $customer_id = $row['customer_id'];
                                    $order_time = $row['order_time'];
                                    $order_price = $row['order_price'];
                                    $order_address = $row['order_address'];
                                    $order_status = $row['order_status'];
                                    $order_paymethod = $row['order_paymethod'];
                                }
                            }
                            ?>

                            <form method="post">    
                                <div class='form-group'>
                                    <label>Customer ID</label>
                                    <input type='text' class='form-control' name='customer_id' value="<?php echo htmlspecialchars($customer_id); ?>" >
                                </div>

                                <div class='form-group'>
                                    <label>Order Time</label>
                                    <input type='datetime-local' class='form-control' name='order_time' value="<?php echo htmlspecialchars($order_time); ?>">
                                </div>

                                <div class='form-group'>
                                    <label>Order Price</label>
                                    <input type='text' class='form-control'  name='order_price' value="<?php echo htmlspecialchars($order_price); ?>" required>
                                </div>

                                <div class='form-group'>
                                    <label>Order Address</label>
                                    <input type='text' class='form-control'  name='order_address' value="<?php echo htmlspecialchars($order_address); ?>" required>
                                </div>

                                <div class='form-group'>
                                    <label>Order Status</label>
                                    &nbsp;
                                    <select class="styled-select"  name='order_status'>
                                        <option value='Pending' <?php if ($order_status == 'Pending') echo 'selected'; ?>>Pending</option>
                                        <option value='Shipped'<?php if ($order_status == 'Shipped') echo 'selected'; ?>>Shipped</option>
                                        <option value='Delivered'<?php if ($order_status == 'Delivered') echo 'selected'; ?>>Delivered</option>
                                    </select><br>
                                </div>

                                <div class='form-group'>
                                    <label>Order Paymethod</label>
                                    &nbsp;
                                    <select class="styled-select" name='order_paymethod'>
                                        <option value='ApplePay' <?php if ($order_paymethod == 'ApplePay') echo 'selected'; ?>>ApplePay</option>
                                        <option value='Alipay'<?php if ($order_paymethod == 'Alipay') echo 'selected'; ?>>Alipay</option>
                                        <option value='WechatPay'<?php if ($order_paymethod == 'WechatPay') echo 'selected'; ?>>WechatPay</option>
                                    </select><br>
                                </div>

                                <div class="text-center">
                                    <button type="submit" name="update_order" class="btn btn-primary">
                                    <i class="fa fa-pencil"></i> Update Order                                
                                    </button>
                                </div>
                            </form>
                            

                        <?php
                        if(isset($_POST['update_order'])) {
                            $customer_id = $_POST['customer_id'];
                            $order_time = $_POST['order_time'];
                            $order_price = $_POST['order_price'];
                            $order_address = $_POST['order_address'];
                            $order_status = $_POST['order_status'];
                            $order_paymethod = $_POST['order_paymethod'];

                            $sql = "UPDATE orders SET customer_id='$customer_id', order_time='$order_time', order_price='$order_price', order_address='$order_address', order_status='$order_status', order_paymethod='$order_paymethod'
                                    WHERE order_id='$order_id'";

                            // Step 5: Execute the SQL statement to update the data in the "product" table
                            if (mysqli_query($conn, $sql)) {
                                echo '<div class="alert">
                                    <h2>Reminder</h2>
                                    <p>Order Information Updated Successfully!</p>
                                    <a href="order.php">
                                    <button>Close</button>
                                    </a>
                                    </div>';
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                        }
                    
                        // Close the database connection
                        mysqli_close($conn);
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
