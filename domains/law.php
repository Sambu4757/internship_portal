<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/internship_portal/logo.jpg" height="50px" width="50px"/>
    <title>Law Internships - InternHub</title>
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
            <h1>Law Internships</h1>
            <p>Explore opportunities in corporate law, litigation, and legal research</p>
        </div>

        <div class="companies-section">
            <div class="companies-grid">
                <a href="../companies/kpmg.html" class="company-card">
                    <img src="https://logo.clearbit.com/kpmg.com" alt="KPMG" class="company-logo">
                    <div class="company-info">
                        <h3>KPMG</h3>
                        <p>Global network of professional firms providing audit, tax, and advisory services</p>
                        <span class="company-internships">8 internships available</span>
                    </div>
                </a>

                <a href="../companies/deloitte.html" class="company-card">
                    <img src="https://logo.clearbit.com/deloitte.com" alt="Deloitte" class="company-logo">
                    <div class="company-info">
                        <h3>Deloitte</h3>
                        <p>Leading professional services network providing audit, consulting, and legal services</p>
                        <span class="company-internships">11 internships available</span>
                    </div>
                </a>

                <a href="../companies/ey.html" class="company-card">
                    <img src="https://logo.clearbit.com/ey.com" alt="EY" class="company-logo">
                    <div class="company-info">
                        <h3>Ernst & Young</h3>
                        <p>Global leader in assurance, tax, transaction, and advisory services</p>
                        <span class="company-internships">6 internships available</span>
                    </div>
                </a>

                <a href="../companies/pwc.html" class="company-card">
                    <img src="https://logo.clearbit.com/pwc.com" alt="PwC" class="company-logo">
                    <div class="company-info">
                        <h3>PricewaterhouseCoopers</h3>
                        <p>Multinational professional services network specializing in audit and assurance</p>
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