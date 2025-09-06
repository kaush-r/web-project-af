<?php $pageTitle = 'Sign Up'; include 'header.php'; ?>
<br>
<div style="display: flex; justify-content: center; align-items: center; min-height: 70vh;">
    <div class="card" id="signup-card">
        <h2 style="color: #FFD700; text-align:center;">Sign Up</h2>
        <form id="signup-form" method="post" action="signup_process.php">
            <label for="username">Username</label>
            <input type="text" id="username" name="username">

            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="password">Password</label>
            <input type="password" id="password" name="password">

            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password">

            <div id="signup-actions">
                <a href="Login.php"><button type="button" class="button-exploreevents">Back</button></a>
                <button type="submit" class="button-exploreevents signup-btn">Sign Up</button>
            </div>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>