<?php
session_start();
date_default_timezone_set("Asia/Kolkata");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['time'] = time();
}

if (!isset($_SESSION['name'])) {
    header("Location: index.php");
    exit;
}

$name = $_SESSION['name'];
$startTime = $_SESSION['time'];
?>

<?php include '../header.php'; ?>

<div class="container">

    <div class="time">
        Start Time: <?php echo date("h:i:s A", $startTime); ?>
    </div>

    <h1>Hello, <?php echo htmlspecialchars($name); ?>!</h1>

    <p>Welcome to our PHP Lab application.</p>
    <p>Your session has started successfully.</p>

    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>

</div>

<?php include '../footer.php'; ?>