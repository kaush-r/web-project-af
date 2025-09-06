<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <title>User Dashboard</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <br>
    <h1 style="text-align: center; color: #FFD700;">User Dashboard</h1>
    <p style="text-align: center; color: white;">View and manage your booked events below.</p>
    <br>
    <div style="display: flex; justify-content: center;">
        <div class="card" style="width: 600px; align-items: stretch;">
            <h2 style="margin-bottom: 20px; text-align:center;">Booked Events</h2>
            <div id="booked-events">
                <!--booked events -->
                <div class="booked-event" style="border-bottom:1px solid #FFD700; padding: 16px 0; display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <strong>Cultural Fest 2025</strong><br>
                        <span>Date: 2025-10-12</span><br>
                        <span>Location: City Hall</span>
                    </div>
                    <button class="button-exploreevents cancel-btn" style="width:90px;">Cancel</button>
                </div>
                <div class="booked-event" style="border-bottom:1px solid #FFD700; padding: 16px 0; display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <strong>Tech Expo 2025</strong><br>
                        <span>Date: 2025-11-05</span><br>
                        <span>Location: Expo Center</span>
                    </div>
                    <button class="button-exploreevents cancel-btn" style="width:90px;">Cancel</button>
                </div>
                <div class="booked-event" style="padding: 16px 0; display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <strong>Summer Hackathon</strong><br>
                        <span>Date: 2025-08-20</span><br>
                        <span>Location: Innovation Hub</span>
                    </div>
                    <button class="button-exploreevents cancel-btn" style="width:90px;">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>