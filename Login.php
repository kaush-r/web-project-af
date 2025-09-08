<?php $pageTitle = 'Login'; include 'includes/header.php'; include 'includes/db_connect.php'; ?>
<br>
<div style="display: flex; justify-content: center; align-items: center; min-height: 70vh;">
    <div class="card" id="login-card">
        <h2 style="color: #FFD700; text-align:center;">Login</h2>
        <form id="login-form" method="post" action="login_process.php">
            <label for="username">Username or Email</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <div id="login-button-container">
                <button type="submit" class="button-exploreevents">Login</button>
            </div>
        </form>
    </div>
</div>
<div id="login-bottom-link">
    <span style="color: aliceblue;">Don't have an account? <a href="signup.php">Sign up</a></span>
</div>
<?php include 'includes/footer.php'; ?>
