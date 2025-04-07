<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        .team img {
            width: 150px;
            border-radius: 50%;
        }
        .team {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        .team-member {
            text-align: center;
            flex: 1;
            min-width: 200px;
        }
        footer {
            text-align: center;
            padding: 10px;
            background: #333;
            color: white;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>About Us</h1>
        <p>
            Our Internship Application Portal is designed to simplify the application process for students and recent graduates seeking hands-on experience in their field. With an easy-to-use interface, applicants can browse available internship opportunities, submit their resumes, and track their application status in real time. The portal also enables employers to post openings, review applications, and connect with potential candidates. Whether you're looking to gain industry experience or find the right intern for your team, our platform streamlines the process for both applicants and recruiters.
        </p>

        <h2>Meet Our Team</h2>
        <div class="team">
            <div class="team-member">
                <img src="..\internship_portal\download1.png" alt="Team Member 1">
                <h3>Sambasivarao</h3>
                <p>Founder </p>
            </div>
            <div class="team-member">
                <img src="..\internship_portal\download.png" alt="Team Member 2">
                <h3>Bhavana</h3>
                <p>Lead Developer</p>
            </div>
            <div class="team-member">
                <img src="..\internship_portal\download.jpeg" alt="Team Member 3">
                <h3>Vijay</h3>
                <p>Lead Developer</p>
            </div>
        </div>

        <h2>Contact Us</h2>
        <p>Email: internappli@gmail.com</p>
        <p>Phone: 6300000757</p>
    </div>

    <footer>
        &copy; 2024 InternHub. All rights reserved.
    </footer>
</body>
</html>
