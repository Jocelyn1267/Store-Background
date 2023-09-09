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


.container-1 {
	max-width: 1200px;
	margin: 0 auto;
	padding: 20px;
}

.login-container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      margin: auto;
      margin-top: 50px;
      max-width: 400px;
    }

    .input-field {
      margin-bottom: 10px;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
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

             </ul><!-- menu Finish -->   
        </div><!-- col-md-6 Finish -->
    </div><!-- container Finish -->
</div><!-- Top Finish -->



   <div class="container" id="slider"><!-- container Begin -->
       
        <br><br><br><br>

       <div class="col-md-12"><!-- col-md-12 Begin -->
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
       <div class="box"><!-- box Begin -->


	<div class="container-1">
        <center>
            <h1>Welcome To Dev-M-Store Admin System</h1>
            <br>
		    <h3>Please log in first!</h3> 
        </center>
        <div class="login-container">
            <form method="post" action="">
                <div class="input-field">
                    <label for="admin_id">Admin ID:</label>
                    <input type="text" id="admin_id" name="admin_id"><br>
                </div>
                <div class="input-field">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password"><br>
                    
                </div>
                
            </form>
        </div>
        <br><br>
        <center><a href="index1.php" class="button">Login</a></center>
        <br>
    </div>
	</div>

               
           </div><!-- container Finish -->
           
       </div><!-- box Finish -->
       

   
   
   
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
