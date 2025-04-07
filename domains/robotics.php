<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/internship_portal/logo.jpg" height="50px" width="50px"/>
    <title>Robotics Internships - InternHub</title>
    <link rel="stylesheet" href="../styling/styles.css">
    <link rel="stylesheet" href="../styling/domain.css">
</head>
<body>
<nav class="navbar">
    <div class="nav-container">
        <a href="../index.php" class="nav-logo">InternHub</a>
        <div class="nav-links">
            <a href="../index.php" class="nav-button">Home</a>
            <?php if (isset($_SESSION['fullname'])): ?>
                <a href="../dashboard.php" class="nav-button">Dashboard</a>
                <a href="../logout.php" class="nav-button">Sign Out</a>
            <?php else: ?>
                <a href="../login.php" class="nav-button">Sign In</a>
                <a href="../register.php" class="nav-button">Sign Up</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

    <main>
        <div class="domain-header">
            <h1>Robotics Internships</h1>
            <p>Explore opportunities in robot design, automation, and AI systems</p>
        </div>

        <div class="companies-section">
            <div class="companies-grid">
                <a href="../companies/boston-dynamics.html" class="company-card">
                    <img src="https://logo.clearbit.com/bostondynamics.com" alt="Boston Dynamics" class="company-logo">
                    <div class="company-info">
                        <h3>Boston Dynamics</h3>
                        <p>Leading developer of advanced mobile robots and cutting-edge robotics technology</p>
                        <span class="company-internships">5 internships available</span>
                    </div>
                </a>

                <a href="../companies/fanuc.html" class="company-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Fanuc_logo.svg/220px-Fanuc_logo.svg.png" alt="FANUC" class="company-logo">
                    <div class="company-info">
                        <h3>FANUC Corporation</h3>
                        <p>Leading manufacturer of industrial robots and automation systems</p>
                        <span class="company-internships">8 internships available</span>
                    </div>
                </a>

                <a href="../companies/kuka.html" class="company-card">
                    <img src="https://logo.clearbit.com/kuka.com" alt="KUKA" class="company-logo">
                    <div class="company-info">
                        <h3>KUKA Robotics</h3>
                        <p>Global manufacturer of industrial robots and automation solutions</p>
                        <span class="company-internships">6 internships available</span>
                    </div>
                </a>

                <a href="../companies/abb-robotics.html" class="company-card">
                    <img src="https://logo.clearbit.com/abb.com" alt="ABB Robotics" class="company-logo">
                    <div class="company-info">
                        <h3>ABB Robotics</h3>
                        <p>Pioneer in robotics, machine automation, and digital services</p>
                        <span class="company-internships">9 internships available</span>
                    </div>
                </a>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>InternHub</h3>
                <p>Connecting students with the best internship opportunities.</p>
            </div>
            
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../about.php">About</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4>Domains</h4>
                <ul>
                    <li><a href="../domains/cse.php">CSE</a></li>
                    <li><a href="../domains/ece.php">ECE</a></li>
                    <li><a href="../domains/eee.php">EEE</a></li>
                    <li><a href="../domains/mechanical.php">Mechanical</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 InternHub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>