<?php $pageTitle = 'Events'; include 'header.php'; ?>
<br>
<h1 style="text-align: center; color: #FFD700;">Events Page</h1>
<p style="text-align: center; color: white;">Discover upcoming events and activities happening around you.</p>
<br>
<div style="text-align: center;">
    <a href="index.php"><button class="button-backtohome">Back to Home</button></a>
</div>
<div style="display: flex; justify-content: center; margin-top: 40px;">
    <div class="card">
        <h2 style="margin-bottom: 20px;">Upcoming Events</h2>
        <ul id="event-list" style="list-style: none; padding: 0; margin: 0;">
            <li>
                <label>
                    <input type="checkbox" class="event-checkbox"> Cultural Fest 2025
                </label>
                <div class="event-details">
                    <strong>Price:</strong> Rs. 500<br>
                    <strong>Date:</strong> 2025-10-12<br>
                    <strong>Time:</strong> 6:00 PM - 10:00 PM
                </div>
            </li>
            <li>
                <label>
                    <input type="checkbox" class="event-checkbox"> Tech Expo 2025
                </label>
                <div class="event-details">
                    <strong>Price:</strong> Rs. 250<br>
                    <strong>Date:</strong> 2025-11-05<br>
                    <strong>Time:</strong> 10:00 AM - 5:00 PM
                </div>
            </li>
            <li>
                <label>
                    <input type="checkbox" class="event-checkbox"> Summer Hackathon
                </label>
                <div class="event-details">
                    <strong>Price:</strong> Rs. 1000<br>
                    <strong>Date:</strong> 2025-08-20<br>
                    <strong>Time:</strong> 9:00 AM - 9:00 PM
                </div>
            </li>
        </ul>
        <a href="booking.php">
            <button id="book-now-btn" style="display:none; margin-top: 25px;" class="button-exploreevents">Book Now</button>
        </a>
    </div>
</div>
<?php include 'footer.php'; ?>
