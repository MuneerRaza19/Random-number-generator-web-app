<!DOCTYPE html>
<html>
<head>
    <title>Random Number Generator</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Random Number Generator</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numDice = $_POST["numDice"];
            $diceType = $_POST["diceType"];
            
            echo "<p>Rolling $numDice $diceType-sided dice:</p>";
            echo "<ul>";
            
            $total = 0;
            for ($i = 1; $i <= $numDice; $i++) {
                $roll = rand(1, $diceType);
                $total += $roll;
                echo "<li>Roll $i: $roll</li>";
            }
            
            echo "</ul>";
            echo "<p>Total: $total</p>";
        } else {
            echo "<p>Please use the form to submit the number of dice and dice type.</p>";
        }
        ?>
    </div>
</body>
</html>
