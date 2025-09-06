<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <title>Events</title>
</head>
<body>
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="Events.php">Events</a></li>
                <li><a href="Dashboard.php">Dashboard</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </div>
    <br>
    <h1 style="text-align: center; color: #FFD700;">Events Page</h1>
    <p style="text-align: center; color: white;">Discover upcoming events and activities happening around you.</p>
    <br>
    <div style="text-align: center;">
        <a href="homepage.php"><button class="button-backtohome">Back to Home</button></a>
    </div>
    <div style="display: flex; justify-content: center; margin-top: 40px;">
        <div class="card" style="min-width: 320px;">
            <h2 style="margin-bottom: 20px;">Upcoming Events</h2>
            <ul id="event-list" style="list-style: none; padding: 0; margin: 0;">
                <li>
                    <label>
                        <input type="checkbox" class="event-checkbox"> Cultural Fest 2025
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox" class="event-checkbox"> Tech Expo 2025
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox" class="event-checkbox"> Summer Hackathon
                    </label>
                </li>
            </ul>
            <button id="book-now-btn" style="display:none; margin-top: 25px;" class="button-exploreevents">Book Now</button>
        </div>
    </div>
    <script>
        // script to show book button
        const checkboxes = document.querySelectorAll('.event-checkbox');
        const bookBtn = document.getElementById('book-now-btn');
        checkboxes.forEach(cb => {
            cb.addEventListener('change', () => {
                const anyChecked = Array.from(checkboxes).some(c => c.checked);
                bookBtn.style.display = anyChecked ? 'block' : 'none';
            });
        });
    </script>
</body>
</html>