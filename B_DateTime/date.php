
<?php include '../header.php'; ?>

<div class="container">

    <h1>Date & Time</h1>
    <p>Current system date, time and day.</p>

    <?php
    date_default_timezone_set("Asia/Kolkata");
    ?>

    <div class="result">
        <h2>Today's Date</h2>
        <h1><?php echo date("d-m-Y"); ?></h1>
    </div>

    <div class="result">
        <h2>Current Time</h2>
        <h1><?php echo date("h:i:s A"); ?></h1>
    </div>

    <div class="result">
        <h2>Today is</h2>
        <h1><?php echo date("l"); ?></h1>
    </div>

</div>

<?php include '../footer.php'; ?>
