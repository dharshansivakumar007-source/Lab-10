
<?php include '../header.php'; ?>

<div class="container">
    <h1>Session Management</h1>
    <p>Enter your name to start your session.</p>

    <form action="hello.php" method="post">
        <input type="text" name="name"
               placeholder="Enter your name" required>

        <input type="submit" value="Start Session">
    </form>
</div>

<?php include '../footer.php'; ?>
