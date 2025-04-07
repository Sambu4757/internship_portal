<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/internship_portal/logo.jpg" height="50px" width="50px"/>
    <title>Electrical & Electronics Internships - InternHub</title>
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
            <h1>Electrical & Electronics Internships</h1>
            <p>Explore opportunities in power systems, control systems, and automation</p>
        </div>

        <div class="companies-section">
            <div class="companies-grid">
                <a href="../companies/siemens.html" class="company-card">
                    <img src="https://logo.clearbit.com/siemens.com" alt="Siemens" class="company-logo">
                    <div class="company-info">
                        <h3>Siemens</h3>
                        <p>Global powerhouse focusing on electrification, automation, and digitalization</p>
                        <span class="company-internships">14 internships available</span>
                    </div>
                </a>

                <a href="../companies/ge.html" class="company-card">
                    <img src="https://logo.clearbit.com/ge.com" alt="General Electric" class="company-logo">
                    <div class="company-info">
                        <h3>General Electric</h3>
                        <p>Leading digital industrial company transforming industry with software-defined machines</p>
                        <span class="company-internships">8 internships available</span>
                    </div>
                </a>

                <a href="../companies/abb.html" class="company-card">
                    <img src="https://logo.clearbit.com/abb.com" alt="ABB" class="company-logo">
                    <div class="company-info">
                        <h3>ABB</h3>
                        <p>Pioneer in technology leadership serving utilities, industry, and transport & infrastructure</p>
                        <span class="company-internships">11 internships available</span>
                    </div>
                </a>

                <a href="../companies/schneider.html" class="company-card">
                    <img src="https://logo.clearbit.com/schneider-electric.com" alt="Schneider Electric" class="company-logo">
                    <div class="company-info">
                        <h3>Schneider Electric</h3>
                        <p>Global specialist in energy management and automation</p>
                        <span class="company-internships">6 internships available</span>
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