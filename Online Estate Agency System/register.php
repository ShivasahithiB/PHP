<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = md5(trim($_POST['password']));
    $confirm = md5(trim($_POST['confirm']));

    if ($password !== $confirm) {
        $error = "Passwords do not match!";
    } else {
        $check = $conn->query("SELECT * FROM users WHERE username = '$username'");
        if ($check->num_rows > 0) {
            $error = "Username already exists!";
        } else {
            $conn->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
            header("Location: login.php?msg=Registered successfully!");
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Admin - Estate Agency</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #FFDEE9, #B5FFFC);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            background-color: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }

        h2 {
            margin-bottom: 25px;
            color: #333;
            font-size: 26px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #00bcd4;
            box-shadow: 0 0 6px rgba(0, 188, 212, 0.5);
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #36D1DC, #5B86E5);
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #2bbecf, #4a71c0);
        }

        .error {
            color: #e53935;
            font-size: 14px;
            margin-bottom: 15px;
        }

        p {
            margin-top: 20px;
            font-size: 14px;
        }

        a {
            color: #2196F3;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="login-box">
    <h2>Admin Registration</h2>
    <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Choose Username" required><br>
        <input type="password" name="password" placeholder="Choose Password" required><br>
        <input type="password" name="confirm" placeholder="Confirm Password" required><br>
        <input type="submit" value="Register">
    </form>
    <p>Already registered? <a href="login.php">Login here</a></p>
</div>
</body>
</html>
