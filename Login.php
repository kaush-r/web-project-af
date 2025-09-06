<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <title>Login</title>
    <style>
        .login-form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .login-form input {
            width: 90%;
            padding: 10px;
            margin: 10px 0 0 0;
            border-radius: 8px;
            border: 1px solid #FFD700;
            background: #181818;
            color: #FFD700;
            font-size: 1em;
        }
        .login-form label {
            align-self: flex-start;
            margin-left: 5%;
            margin-top: 15px;
            color: #FFD700;
            font-weight: 600;
        }
        .login-card {
            min-width: 320px;
            max-width: 400px;
            width: 100%;
            padding: 20px;
        }
        @media (max-width: 500px) {
            .login-card {
                min-width: unset;
                max-width: 95vw;
            }
        }
        .login-bottom-link {
            text-align: center;
            margin-top: 18px;
        }
        .login-bottom-link a {
            color: #FFD700;
            text-decoration: underline;
            font-size: 1em;
        }
        .login-bottom-link a:hover {
            color: #fff176;
        }
        
        .login-button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <br>
    <div style="display: flex; justify-content: center; align-items: center; min-height: 70vh;">
        <div class="card login-card">
            <h2 style="color: #FFD700; text-align:center;">Login</h2>
            <form class="login-form" method="post" action="login_process.php">
                <label for="username">Username or Email</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <div class="login-button-container">
                    <button type="submit" class="button-exploreevents">Login</button>
                </div>
            </form>
        </div>
    </div>
    <div class="login-bottom-link">
        <span style="color: aliceblue;">Don't have an account? <a href="signup.php">Sign up</a></span>
    </div>
</body>
</html>
