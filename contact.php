<?php include 'components/head.php'; ?>

<?php 

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST(['name']));
    $email = htmlspecialchars($_POST(['email']));
    $message = htmlspecialchars($_POST(['message']));

    echo $name . "," . $email . "," . $message;
}

?>

<body>
    <?php include 'components/nav.php'; ?>

    <main>
        <form action="./contact.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
</html>
