
<?php
$name = $_POST['name'];
$age = $_POST['age'];

include '../header.php';
?>

<div class="container">

    <?php if ($age < 18) { ?>

        <h1>Hello, <?php echo htmlspecialchars($name); ?>!</h1>

        <div class="result">
            <h2>You are not authorized to visit the site.</h2>
        </div>

    <?php } else { ?>

        <h1>Welcome, <?php echo htmlspecialchars($name); ?>!</h1>

        <div class="result">
            <h2>Welcome to this site.</h2>
        </div>

    <?php } ?>

    <div class="card">
        <a href="index.php">Go Back →</a>
    </div>

</div>

<?php include '../footer.php'; ?>
