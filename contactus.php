<?php
// Start session if you want to use flash messages
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Variables for error/success messages
$successMessage = "";
$errorMessage = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data
    $organizer = trim($_POST['organizer'] ?? '');
    $company   = trim($_POST['company'] ?? '');
    $region    = trim($_POST['region'] ?? '');
    $genre     = trim($_POST['genre'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $mobile    = trim($_POST['mobile'] ?? '');
    $remark    = trim($_POST['remark'] ?? '');

    // Validate required fields
    if ($organizer && $company && $email && $mobile) {
        // TODO: Replace this with database insert (example shown below)
        /*
        include 'db_connect.php';
        $stmt = $pdo->prepare("INSERT INTO applications 
            (organizer, company, region, genre, email, mobile, remark) 
            VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$organizer, $company, $region, $genre, $email, $mobile, $remark]);
        */

        $successMessage = "✅ Application submitted successfully!";
    } else {
        $errorMessage = "⚠️ Please fill in all required fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Form</title>
  <link rel="stylesheet" href="style.css"> <!-- External CSS -->
</head>
<body>
  <div class="form-container">
    <h2>Application Form</h2>

    <?php if ($successMessage): ?>
      <div class="message success"><?= htmlspecialchars($successMessage) ?></div>
    <?php elseif ($errorMessage): ?>
      <div class="message error"><?= htmlspecialchars($errorMessage) ?></div>
    <?php endif; ?>

    <form action="" method="post">
      <div class="form-group">
        <label for="organizer">Organizer Name *</label>
        <input type="text" id="organizer" name="organizer" required value="<?= htmlspecialchars($organizer ?? '') ?>">
      </div>
      <div class="form-group">
        <label for="company">Company Name *</label>
        <input type="text" id="company" name="company" required value="<?= htmlspecialchars($company ?? '') ?>">
      </div>
      <div class="form-group">
        <label for="region">Region Name</label>
        <input type="text" id="region" name="region" value="<?= htmlspecialchars($region ?? '') ?>">
      </div>
      <div class="form-group">
        <label for="genre">Event Genre</label>
        <input type="text" id="genre" name="genre" value="<?= htmlspecialchars($genre ?? '') ?>">
      </div>
      <div class="form-group">
        <label for="email">Email ID *</label>
        <input type="email" id="email" name="email" required value="<?= htmlspecialchars($email ?? '') ?>">
      </div>
      <div class="form-group">
        <label for="mobile">Mobile Number *</label>
        <input type="tel" id="mobile" name="mobile" required value="<?= htmlspecialchars($mobile ?? '') ?>">
      </div>
      <div class="form-group">
        <label for="remark">Event Remark</label>
        <textarea id="remark" name="remark"><?= htmlspecialchars($remark ?? '') ?></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
</body>
</html>
