<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="logo.jpg" height="50px" width="50px"/>
    <title>Sign Up - InternHub</title>
    <link rel="stylesheet" href="styling/styles.css">
    <link rel="stylesheet" href="styling/auth.css">
</head>
<body>
<nav class="navbar">
    <div class="nav-container">
        <a href="index.php" class="nav-logo">InternHub</a>
        <div class="nav-links">
            <a href="index.php" class="nav-button">Home</a>
            <?php if (isset($_SESSION['fullname'])): ?>
                <a href="dashboard.php" class="nav-button">Dashboard</a>
                <a href="logout.php" class="nav-button">Sign Out</a>
            <?php else: ?>
                <a href="login.php" class="nav-button">Sign In</a>
                <a href="register.php" class="nav-button">Sign Up</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

    <main class="auth-container">
        <div class="auth-box">
            <h2>Create Your Account</h2>
            <form class="auth-form" action="connection.php" method="POST">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required minlength="8">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required minlength="8">
                </div>
                <div class="form-group">
                    <label for="college">College/University</label>
                    <input type="text" id="college" name="college" required>
                </div>
                <div class="form-group">
                    <label for="course">Course</label>
                    <select id="course" name="course" required class="form-select">
                        <option value="">Select your course</option>
                        <option value="cse">Computer Science Engineering</option>
                        <option value="ece">Electronics & Communication</option>
                        <option value="eee">Electrical & Electronics</option>
                        <option value="mechanical">Mechanical Engineering</option>
                        <option value="law">Law</option>
                        <option value="agriculture">Agriculture</option>
                        <option value="robotics">Robotics</option>
                    </select>
                </div>
                <button type="submit" class="auth-button">Create Account</button>
            </form>

            <p class="auth-footer">
                Already have an account? <a href="login.html">Sign In</a>
            </p>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>InternHub</h3>
                <p>Connecting students with the best internship opportunities.</p>
            </div>
            <div class="footer-section">
                <h4>Contact Us</h4>
                <p>Email: support@internhub.com</p>
                <p>Phone: +1 234 567 890</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 InternHub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>