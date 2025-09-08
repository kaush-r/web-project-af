<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/main.css">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Event Watch'; ?></title>
</head>
<body>
<div style="display: flex; align-items: center; justify-content: space-between; width: 90%; max-width: 1100px; margin: 30px auto 0 auto;">
    <div class="navbar" style="margin: 0; flex: 1;">
        <nav>
            <ul style="margin:0;">
                <li><a href="index.php">Home</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </div>
    <a href="login.php">
        <button class="button-exploreevents" style="margin-left: 24px;">Login</button>
    </a>
</div>