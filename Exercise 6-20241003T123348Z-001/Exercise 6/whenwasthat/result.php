<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Year Calculator - Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php renderHeader(); ?>

<main class="container">
    <h2>Calculation Result</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputDate = $_POST['date'];

        // Convert
        $inputTimestamp = strtotime($inputDate);
        $currentTimestamp = time();

        // Calculate
        $difference = $currentTimestamp - $inputTimestamp;

        // Calculate also
        $yearsPassed = floor($difference / (365*60*60*24));
        $monthsPassed = floor(($difference % (365*60*60*24)) / (30*60*60*24));
        $daysPassed = floor(($difference % (30*60*60*24)) / (60*60*24));
        $hoursPassed = floor(($difference % (60*60*24)) / 3600);
        $minutesPassed = floor(($difference % 3600) / 60);
        $secondsPassed = $difference % 60;

        // result
        echo "<p>Total time passed since <strong>" . date("F j, Y", $inputTimestamp) . "</strong>: </p>";
        echo "<p><strong>$yearsPassed</strong> years, <strong>$monthsPassed</strong> months, <strong>$daysPassed</strong> days, ";
        echo "<strong>$hoursPassed</strong> hours, <strong>$minutesPassed</strong> minutes, and <strong>$secondsPassed</strong> seconds.</p>";
    } else {
        echo "<p>Please enter a valid date.</p>";
    }
    ?>

    <a href="main.php" class="btn">Calculate Again</a>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
