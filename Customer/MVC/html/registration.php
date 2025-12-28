<?php
// Logic to be added later
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KrishiBazaar | Register</title>
    <style>
        :root { --primary-green: #2D6A4F; --bg: #F8F9F8; }
        body { background-color: var(--bg); font-family: 'Segoe UI', sans-serif; display: flex; flex-direction: column; align-items: center; min-height: 100vh; margin: 0; }
        .navbar { background: white; width: 100%; padding: 15px 8%; border-bottom: 3px solid var(--primary-green); box-sizing: border-box; }
        .navbar b { color: var(--primary-green); font-size: 24px; }
        .card { background: white; width: 420px; padding: 30px 40px; margin: 40px 0; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-top: 8px solid var(--primary-green); }
        h2 { color: #1B4332; text-align: center; margin-bottom: 5px; }
        p { text-align: center; color: #666; font-size: 14px; margin-bottom: 25px; }
        label { font-weight: 600; color: #333; }
        input, select { width: 100%; padding: 10px; margin: 8px 0 15px 0; border: 1px solid #ccc; border-radius: 6px; box-sizing: border-box; }
        .btn { background: var(--primary-green); color: white; border: none; width: 100%; padding: 12px; font-weight: bold; border-radius: 6px; cursor: pointer; font-size: 16px; margin-top: 10px; }
        .links { text-align: center; margin-top: 20px; font-size: 14px; }
        .links a { color: var(--primary-green); text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="navbar"><b>🌿 KrishiBazaar</b></div>
    <div class="card">
        <h2>Create Account</h2>
        <p>Join the agriculture marketplace</p>
        <form action="login.php" method="POST">
            <label>Full Name</label>
            <input type="text" name="fullname" required>
            <label>Email Address</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <label>Gender</label>
            <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <button type="submit" class="btn">Register Now</button>
        </form>
        <div class="links">
            Already have an account? <a href="login.php">Sign In</a>
        </div>
    </div>
</body>
</html>