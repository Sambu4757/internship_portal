<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/internship_portal/logo.jpg" height="50px" width="50px"/>
    <title>Agriculture Internships - InternHub</title>
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
            <h1>Agriculture Internships</h1>
            <p>Explore opportunities in sustainable farming, agribusiness, and research</p>
        </div>

        <div class="companies-section">
            <div class="companies-grid">
                <a href="../companies/monsanto.html" class="company-card">
                    <img src="https://logo.clearbit.com/bayer.com" alt="Bayer Crop Science" class="company-logo">
                    <div class="company-info">
                        <h3>Bayer Crop Science</h3>
                        <p>Global leader in agricultural innovation and sustainable farming solutions</p>
                        <span class="company-internships">7 internships available</span>
                    </div>
                </a>

                <a href="../companies/cargill.html" class="company-card">
                    <img src="https://logo.clearbit.com/cargill.com" alt="Cargill" class="company-logo">
                    <div class="company-info">
                        <h3>Cargill</h3>
                        <p>International provider of food, agriculture, and industrial products</p>
                        <span class="company-internships">10 internships available</span>
                    </div>
                </a>

                <a href="../companies/syngenta.html" class="company-card">
                    <img src="https://logo.clearbit.com/syngenta.com" alt="Syngenta" class="company-logo">
                    <div class="company-info">
                        <h3>Syngenta</h3>
                        <p>Leading agriculture company helping to improve global food security</p>
                        <span class="company-internships">8 internships available</span>
                    </div>
                </a>

                <a href="../companies/corteva.html" class="company-card">
                    <img src="https://logo.clearbit.com/corteva.com" alt="Corteva Agriscience" class="company-logo">
                    <div class="company-info">
                        <h3>Corteva Agriscience</h3>
                        <p>Pure-play agriculture company delivering solutions for sustainable agriculture</p>
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