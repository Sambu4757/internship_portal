<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/internship_portal/logo.jpg" height="50px" width="50px"/>
    <title>Mechanical Engineering Internships - InternHub</title>
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
            <h1>Mechanical Engineering Internships</h1>
            <p>Explore opportunities in automotive, manufacturing, and industrial design</p>
        </div>

        <div class="companies-section">
            <div class="companies-grid">
                <a href="../companies/bmw.html" class="company-card">
                    <img src="https://logo.clearbit.com/bmw.com" alt="BMW" class="company-logo">
                    <div class="company-info">
                        <h3>BMW Group</h3>
                        <p>Leading manufacturer of premium automobiles and motorcycles</p>
                        <span class="company-internships">9 internships available</span>
                    </div>
                </a>

                <a href="../companies/bosch.html" class="company-card">
                    <img src="https://logo.clearbit.com/bosch.com" alt="Bosch" class="company-logo">
                    <div class="company-info">
                        <h3>Bosch</h3>
                        <p>Global supplier of technology and services in mobility, industrial technology, and energy</p>
                        <span class="company-internships">12 internships available</span>
                    </div>
                </a>

                <a href="../companies/caterpillar.html" class="company-card">
                    <img src="https://logo.clearbit.com/caterpillar.com" alt="Caterpillar" class="company-logo">
                    <div class="company-info">
                        <h3>Caterpillar Inc.</h3>
                        <p>World's leading manufacturer of construction and mining equipment</p>
                        <span class="company-internships">7 internships available</span>
                    </div>
                </a>

                <a href="../companies/toyota.html" class="company-card">
                    <img src="https://logo.clearbit.com/toyota.com" alt="Toyota" class="company-logo">
                    <div class="company-info">
                        <h3>Toyota Motor Corporation</h3>
                        <p>Global automotive manufacturer known for quality and innovation</p>
                        <span class="company-internships">10 internships available</span>
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