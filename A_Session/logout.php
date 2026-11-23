<?php
session_start();
date_default_timezone_set("Asia/Kolkata");

if (!isset($_SESSION['name'])) {
    header("Location: index.php");
    exit;
}

$name = $_SESSION['name'];
$duration = time() - $_SESSION['time'];

session_destroy();
?>

<?php include '../header.php'; ?>

<div class="container">

    <h1>Thank You, <?php echo htmlspecialchars($name); ?>!</h1>

    <div class="result">
        <h2>You have logged out successfully.</h2>

        <p>Duration of Usage:</p>

        <h1><?php echo $duration; ?> seconds</h1>
    </div>

    <div class="card">
        <a href="index.php">Start New Session →</a>
    </div>

</div>

<?php include '../footer.php'; ?>