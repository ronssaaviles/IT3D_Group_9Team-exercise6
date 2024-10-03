<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Year Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php renderHeader(); ?> <!-- header -->

<main class="container">
    <h2>Calculate Total Years Passed</h2>
    <form action="result.php" method="POST">
        <label for="date">Enter Date:</label><br>
        <input type="date" id="date" name="date" required>
        <br><br>
        <button type="submit">Calculate</button>
    </form>
</main>

<?php include 'footer.php'; ?> <!-- footer -->

</body>
</html>
