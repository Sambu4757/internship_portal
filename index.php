<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="logo.jpg" height="50px" width="50px"/>
    <title>InternHub - Your Gateway to Opportunities</title>
    <link rel="stylesheet" href="styling/styles.css">
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

    <main>
        <!-- Hero Section -->
        <div class="hero">
            <div class="hero-content">
                <h1>Welcome to InternHub</h1>
                <p>Your gateway to amazing internship opportunities</p>
                <a href="login.php" class="cta-button">Get Started</a>
            </div>
        </div>

        <!-- Domains Section -->
        <div class="domains-section">
            <h2>Explore Domains</h2>
            <div class="domains-grid">
                <a href="domains/cse.php" class="domain-card">
                    <div class="domain-icon">💻</div>
                    <h3>Computer Science</h3>
                    <p>Software development, web development, and more</p>
                </a>

                <a href="domains/ece.php" class="domain-card">
                    <div class="domain-icon">🔌</div>
                    <h3>Electronics</h3>
                    <p>Circuit design, embedded systems, and IoT</p>
                </a>

                <a href="domains/eee.php" class="domain-card">
                    <div class="domain-icon">⚡</div>
                    <h3>Electrical</h3>
                    <p>Power systems, control systems, and automation</p>
                </a>

                <a href="domains/law.php" class="domain-card">
                    <div class="domain-icon">⚖️</div>
                    <h3>Law</h3>
                    <p>Legal internships and judicial clerkships</p>
                </a>

                <a href="domains/agriculture.php" class="domain-card">
                    <div class="domain-icon">🌱</div>
                    <h3>Agriculture</h3>
                    <p>Sustainable farming, agribusiness, and research</p>
                </a>

                <a href="domains/robotics.php" class="domain-card">
                    <div class="domain-icon">🤖</div>
                    <h3>Robotics</h3>
                    <p>Robot design, automation, and AI systems</p>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4>Domains</h4>
                <ul>
                    <li><a href="../internship_portal/domains/cse.php">CSE</a></li>
                    <li><a href="../internship_portal/domains/ece.php">ECE</a></li>
                    <li><a href="../internship_portal/domains/eee.php">EEE</a></li>
                    <li><a href="../internship_portal/domains/mechanical.php">Mechanical</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4>Contact Us</h4>
                <p>Email: interappli@gmail.com</p>
                <p>Phone: +6300000757</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 InternHub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>