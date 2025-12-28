<?php
// PHP logic area for future use
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KrishiBazaar | Sign In</title>
    <style>
        :root { --primary-green: #2D6A4F; --bg: #F8F9F8; }
        body { background-color: var(--bg); font-family: 'Segoe UI', sans-serif; display: flex; flex-direction: column; align-items: center; min-height: 100vh; margin: 0; }
        .navbar { background: white; width: 100%; padding: 15px 8%; border-bottom: 3px solid var(--primary-green); box-sizing: border-box; }
        .navbar b { color: var(--primary-green); font-size: 24px; }
        .card { background: white; width: 380px; padding: 40px; margin-top: 60px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-top: 6px solid var(--primary-green); }
        h2 { color: #1B4332; text-align: center; }
        input { width: 100%; padding: 12px; margin: 10px 0 20px 0; border: 1px solid #ccc; border-radius: 6px; box-sizing: border-box; }
        .btn { background: var(--primary-green); color: white; border: none; width: 100%; padding: 14px; font-weight: bold; border-radius: 6px; cursor: pointer; font-size: 16px; }
        .links { text-align: center; margin-top: 20px; font-size: 14px; }
        .links a { color: var(--primary-green); text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="navbar"><b>🌿 KrishiBazaar</b></div>
    <div class="card">
        <h2>Welcome Back</h2>
        <form action="login.php" method="POST">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="email@example.com" required>
            <label>Password</label>
            <input type="password" name="password" placeholder="••••••••" required>
            <button type="submit" class="btn">Sign In</button>
        </form>
        <div class="links">
            Don't have an account? <a href="registration.php">Register here</a>
        </div>
    </div>
</body>
</html>