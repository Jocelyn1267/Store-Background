<?php
session_start();

// database information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_platform";

// connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $admin_id = $_POST["admin_id"];
  $password = $_POST["password"];

  // search
  $stmt = $conn->prepare("SELECT * FROM administrator WHERE admin_id = :admin_id AND password = :admin_passwords");
  $stmt->bindParam(":admin_id", $admin_id);
  $stmt->bindParam(":password", $password);
  $stmt->execute();


  if ($stmt->rowCount() > 0) {
    $_SESSION["admin_id"] = $admin_id;
    header("Location: index.php");
    exit();
  } else {

    $error_message = "Invalid username or password";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Log in</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f1f1f1;
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

    button:hover {
      opacity: 0.8;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h2>Welcome</h2>
    <?php if (isset($error_message)) { ?>
    <p><?php echo $error_message; ?></p>
  <?php } ?>
    <form method="post" action="">
      <div class="input-field">
        <label for="admin_id">Admin ID:</label>
        <input type="text" id="admin_id" name="admin_id"><br>
      </div>
      <div class="input-field">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
      </div>
      <input type="submit" value="Login">
      </form>
      
  </div>
</body>

</html>
