
<?php include '../header.php'; ?>

<div class="container">

    <h1>Age Validation</h1>
    <p>Enter your details to check your eligibility.</p>

    <form action="check.php" method="post">

        <input type="text" name="name"
               placeholder="Enter your name" required>

        <input type="number" name="age"
               placeholder="Enter your age" min="1" required>

        <input type="submit" value="Check Eligibility">

    </form>

</div>

<?php include '../footer.php'; ?>
