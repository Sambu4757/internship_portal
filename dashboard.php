<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    echo "<script>
            alert('You need to log in first!');
            window.location.href = 'login.php';
          </script>";
    exit;
}

// Database connection
$host = "localhost"; // Change if needed
$username = "root"; // Your database username
$password = "root"; // Your database password
$dbname = "intern_hub"; // Change this to your actual database name

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user details from database
$email = $_SESSION['email'];
$stmt = $conn->prepare("SELECT fullname, email, college, course FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($fullname, $email, $college, $course);
$stmt->fetch();
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="/internship_portal/logo.jpg" height="50px" width="50px"/>
    <title>Dashboard - Internship Portal</title>
    <link rel="stylesheet" href="styling/styles.css">
    <link rel="stylesheet" href="styling/dash.css">
</head>
<body>
    <div class="min-h-screen bg-gray-100">
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
            <div class="dashboard">
                <div class="dashboard-header">
                    <h1 class="dashboard-title">My Dashboard</h1>
                </div>

                <section class="user-info">
                    <h2>Personal Information</h2>
                    <div class="info-grid">
                        <div class="info-item">
                            <div class="info-label">Name</div>
                            <div class="info-value"><?php echo htmlspecialchars($fullname); ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Email</div>
                            <div class="info-value"><?php echo htmlspecialchars($email); ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">University</div>
                            <div class="info-value"><?php echo htmlspecialchars($college); ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Major</div>
                            <div class="info-value"><?php echo htmlspecialchars($course); ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Graduation Year</div>
                            <div class="info-value">2024</div> <!-- Update this if graduation year is stored in DB -->
                        </div>
                    </div>
                </section>


                <section class="internships">
                    <h2>My Internship Applications</h2>
                    <div class="internship-grid">
                        <div class="internship-card">
                            <div class="internship-company">Tech Corp</div>
                            <div class="internship-position">Software Engineering Intern</div>
                            <div class="flex justify-between items-center">
                                <span class="internship-status status-accepted">
                                    Accepted
                                </span>
                                <span class="text-sm text-gray-500">
                                    Applied: Feb 15, 2024
                                </span>
                            </div>
                        </div>

                        <div class="internship-card">
                            <div class="internship-company">Innovation Labs</div>
                            <div class="internship-position">Full Stack Developer Intern</div>
                            <div class="flex justify-between items-center">
                                <span class="internship-status status-pending">
                                    Pending
                                </span>
                                <span class="text-sm text-gray-500">
                                    Applied: Feb 20, 2024
                                </span>
                            </div>
                        </div>

                        <div class="internship-card">
                            <div class="internship-company">Digital Solutions</div>
                            <div class="internship-position">Frontend Developer Intern</div>
                            <div class="flex justify-between items-center">
                                <span class="internship-status status-rejected">
                                    Rejected
                                </span>
                                <span class="text-sm text-gray-500">
                                    Applied: Feb 10, 2024
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>
</html>