<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <title>Sign Up</title>
    <style>
        .signup-form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .signup-form input {
            width: 90%;
            padding: 10px;
            margin: 10px 0 0 0;
            border-radius: 8px;
            border: 1px solid #FFD700;
            background: #181818;
            color: #FFD700;
            font-size: 1em;
        }
        .signup-form label {
            align-self: flex-start;
            margin-left: 5%;
            margin-top: 15px;
            color: #FFD700;
            font-weight: 600;
        }
        .signup-card {
            min-width: 320px;
            max-width: 400px;
            width: 100%;
            position: relative;
        }
        .signup-actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 18px;
            width: 100%;
        }
        .signup-actions .signup-btn {
            margin-right: 10px;
        }
        @media (max-width: 500px) {
            .signup-card {
                min-width: unset;
                max-width: 95vw;
            }
            .signup-actions {
                flex-direction: column;
                align-items: flex-end;
                gap: 8px;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <br>
    <div style="display: flex; justify-content: center; align-items: center; min-height: 70vh;">
        <div class="card signup-card">
            <h2 style="color: #FFD700; text-align:center;">Sign Up</h2>
            <form class="signup-form" method="post" action="signup_process.php">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">

                <label for="email">Email</label>
                <input type="email" id="email" name="email">

                <label for="password">Password</label>
                <input type="password" id="password" name="password">

                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password">

                <div class="signup-actions">
                    <a href="Login.php"><button type="button" class="button-exploreevents">Back</button></a>
                    <button type="submit" class="button-exploreevents signup-btn">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
