<?php
// --- 1. CONTROLLER LOGIC ---
$error = "";
$success = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Basic Validation
    if (empty($email) || empty($password)) {
        $error = "Please enter both email and password.";
    } else {
        // This is a placeholder for actual database verification
        if ($email == "test@user.com" && $password == "123456") {
            $success = "Login successful! Redirecting to marketplace...";
            // header("Location: marketplace.php"); // Uncomment later when marketplace is ready
        } else {
            $error = "Invalid email or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KrishiBazaar | Login</title>
    <style>
        /* Using your Green Color Palette */
        :root {
            --primary-green: #2D6A4F;
            --light-green: #B7D1B7;
            --bg-white: #F8F9F8;
        }

        body {
            background-color: var(--bg-white);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Navbar style matching your marketplace image */
        .navbar {
            background: white;
            width: 100%;
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid var(--primary-green);
            box-sizing: border-box;
        }

        .navbar strong { color: var(--primary-green); font-size: 24px; }

        .login-card {
            background: white;
            padding: 40px;
            margin-top: 80px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 350px;
            border-top: 6px solid var(--primary-green);
        }

        h2 { color: var(--primary-green); margin-bottom: 25px; text-align: center; }

        label { display: block; margin-bottom: 5px; font-weight: bold; color: #333; }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        button {
            background: var(--primary-green);
            color: white;
            border: none;
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover { background: #1B4332; }

        .msg { font-size: 14px; text-align: center; margin-bottom: 15px; }
        .error { color: #d9534f; }
        .success { color: #2D6A4F; }
        
        .signup-link { text-align: center; margin-top: 20px; font-size: 14px; }
        .signup-link a { color: var(--primary-green); text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

    <div class="navbar">
        <strong>🌿 KrishiBazaar</strong>
    </div>

    <div class="login-card">
        <h2>Customer Login</h2>

        <?php if($error): ?>
            <div class="msg error"><?= $error ?></div>
        <?php endif; ?>

        <?php if($success): ?>
            <div class="msg success"><?= $success ?></div>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="email@example.com" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password" required>

            <button type="submit">Login</button>
        </form>

        <div class="signup-link">
            Don't have an account? <a href="registration.php">Sign Up</a>
        </div>
    </div>

</body>
</html>