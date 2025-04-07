<?php
session_start(); // Start session at the beginning

// Check if a session is already active
if (isset($_SESSION['fullname'])) {
    echo "<script>
            alert('You are already logged in!');
            window.location.href = 'index.php';
          </script>";
    exit;
}


// Database connection settings
$host = "localhost"; // Change if needed
$username = "root"; // Your database username
$password = "root"; // Your database password
$dbname = "intern_hub"; // Change this to your actual database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute SQL query to fetch user details
    $stmt = $conn->prepare("SELECT fullname, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($fullname, $hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Start session and store user details
            $_SESSION['fullname'] = $fullname;
            $_SESSION['email'] = $email;
            echo "<script>
                    alert('Login successful! Welcome, $fullname');
                    window.location.href = 'index.php'; // Redirect to home page
                  </script>";
            exit;
        } else {
            // Incorrect password
            echo "<script>
                    alert('Invalid password. Please try again.');
                    window.location.href = 'login.php'; // Redirect back to login page
                  </script>";
            exit;
        }
    } else {
        // Email not found
        echo "<script>
                alert('No account found with this email.');
                window.location.href = 'login.php'; // Redirect back to login page
              </script>";
        exit;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
