<?php
// signup.php
include 'connect.php';

if (isset($_POST['signup'])) {
    $teamname = $_POST['teamname'];
    $teamemail = $_POST['teamemail'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO tblteam (team_name, team_email, password) VALUES ('$teamname', '$teamemail', '$hashed_password')";
        if ($conn->query($sql) === TRUE) {
            echo "Signup successful!";
            header("Location: signin.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Passwords do not match!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Your Team</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .team-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            padding: 45px 40px;
            border-radius: 24px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
            width: 100%;
            max-width: 480px;
            animation: floatIn 0.8s ease-out;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        @keyframes floatIn {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .header {
            text-align: center;
            margin-bottom: 35px;
        }

        .header i {
            font-size: 60px;
            color: #2a5298;
            margin-bottom: 15px;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .header h2 {
            font-size: 30px;
            color: #1e3c72;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .header p {
            color: #555;
            font-size: 15px;
        }

        .form-group {
            margin-bottom: 22px;
            position: relative;
        }

        label {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 10px;
            color: #2c3e50;
            font-weight: 600;
            font-size: 15px;
        }

        label i {
            color: #2a5298;
            font-size: 16px;
        }

        input {
            width: 100%;
            padding: 16px 18px;
            border: 2px solid #ddd;
            border-radius: 14px;
            font-size: 16px;
            background: #f8fbff;
            transition: all 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: 2px solid #2a5298;
            background: white;
            box-shadow: 0 0 0 5px rgba(42, 82, 152, 0.15);
            transform: scale(1.02);
        }

        .submit-btn {
            width: 100%;
            padding: 17px;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            border: none;
            border-radius: 14px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 15px;
            transition: all 0.4s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .submit-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px rgba(30, 60, 114, 0.4);
        }

        .submit-btn i {
            font-size: 20px;
        }

        .footer-text {
            text-align: center;
            margin-top: 30px;
            color: #666;
            font-size: 14px;
        }

        .footer-text a {
            color: #2a5298;
            font-weight: 600;
            text-decoration: none;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .team-card { padding: 35px 25px; }
            .header h2 { font-size: 26px; }
        }
    </style>
</head>
<body>

    <div class="team-card">
        <div class="header">
            <i class="fas fa-users"></i>
            <h2>Create Your Team</h2>
            <p>Register your team and start collaborating today!</p>
        </div>

        <form action="" method="post">
            <div class="form-group">
                <label for="teamname"><i class="fas fa-flag"></i> Username</label>
                <input type="text" name="teamname" id="teamname" placeholder="e.g. Thunder Bolts" required>
            </div>

            <div class="form-group">
                <label for="teamemail"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" name="teamemail" id="teamemail" placeholder="team@domain.com" required>
            </div>

            <div class="form-group">
                <label for="password"><i class="fas fa-lock"></i> Password</label>
                <input type="password" name="password" id="password" placeholder="Create a strong password" required>
            </div>

            <div class="form-group">
                <label for="confirm_password"><i class="fas fa-lock"></i> Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Type password again" required>
            </div>

            <button type="submit" name="signup" class="submit-btn">
                <i class="fas fa-arrow-right"></i> Create Account
            </button>
        </form>

        <div class="footer-text">
            Already have a team? <a href="signin.php">Sign In Here</a>
        </div>
    </div>

</body>
</html>