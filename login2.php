<?php
$loginMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($username === "admin" && $password === "1234") {
        $loginMessage = "<p style='color: lightgreen;'>Login successful!</p>";
    } else {
        $loginMessage = "<p style='color: red;'>Invalid username or password.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #1f57db;
      font-family: Arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .login-container {
      background: none;
      padding: 40px;
      border-radius: 8px;
      text-align: center;
      width: 300px;
      color: white;
    }

    .icon-cart {
      font-size: 40px;
      margin-bottom: 20px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 4px;
      background: white;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: white;
      color: #1f57db;
      font-weight: bold;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #e6e6e6;
    }

    .forgot {
      margin-top: 10px;
    }

    .forgot a {
      color: white;
      text-decoration: none;
      font-size: 14px;
    }

    .message {
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="icon-cart">🛒↑</div>
    <form method="POST" action="">
      <input type="text" name="username" placeholder="USERNAME" required />
      <input type="password" name="password" placeholder="PASSWORD" required />
      <button type="submit">LOGIN</button>
      <div class="forgot"><a href="#">Forgot password?</a></div>
      <div class="message"><?php echo $loginMessage; ?></div>
    </form>
  </div>
</body>
</html>