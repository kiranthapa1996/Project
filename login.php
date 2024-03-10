<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Users WHERE email = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Successful login
        $_SESSION['email'] = $username;
        header("Location: welcome.php"); // Redirect to a welcome page or any other page
    } else {
        // Invalid login
        $error_message = "Invalid email or password";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image:url("food_pic_2.jpg");
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        button {
            background-color: yellow;
            color: black;
            padding: 10px 30px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color:darkorange;
        }

        .error-message {
            color: #ff0000;
            margin-top: 5px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login to OnlineFood</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" id="email" name="email" placeholder="Email" required>
        <input type="password" id="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
        <p>Don't have an account?<a href="Signup"> Signup<a><p>
          <br>
        <p>Forgot Password?<p>
        <?php if (isset($error_message)) { ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php } ?>
    </form>
</div>

</body>
</html>
