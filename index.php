<?php
include 'process.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate House Electricity Bill</title>
</head>

<?php
if ($error != "") {
    echo "<h3 style='color: red;'>" . $error . "</h3>";
}
?>

<body>
    <div class="table" style="margin-bottom: 30px">
<h1>Calculate House Electricity Bill</h1>

<table border="1" cellpadding="6">            <tr>
                <th> Block Tariff (per month)</th>
                <th> Unit</th>
                <th> Rate</th>
            </tr>
            <tr>
                <td>For the first 200 kWh (1-200 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.218</td>

            </tr>
            <tr>
                <td>For the next 100 kWh (201 – 300 kWh) per month</td>
                <td> sen/kWh </td>
                <td> 0.344</td>
            </tr>

            <tr>
                <td>For the next 300 kWh (301 – 600 kWh) per month</td>
                <td> sen/kWh </td>
                <td>0.516</td>
            </tr>

            <tr>
                <td>For the next 300 kWh (601 – 900 kWh) per month</td>
                <td> sen/kWh </td>
                <td>0.546</td>
            </tr>

            <tr>
                <td>For the next kWh (901 kWh onwards) per month</td>
                <td> sen/kWh </td>
                <td>0.571</td>
            </tr>
            <tr>
                <td colspan="5"> The minimum monthly chafe is RM300

                </td>
            </tr>

        </table>

        <br>

        <form method="post">
            <label> Enter your first 200 kWh (1-200 kWh) per month <label>
                    <input type="number" name="first">
                    <br>

                    <label>Enter your first 100 kWh (201-300 kWh) per month <label>
                            <input type="number" name="second">
                            <br>

                            <label> Enter your first 300 kWh (301-600 kWh) per month <label>
                                    <input type="number" name="third">
                                    <br>

                                    <label> Enter your first 300 kWh (601-900 kWh) per month <label>
                                            <input type="number" name="fourth">
                                            <br>

                                            <label> Enter your first kWh (901 kWh onwards) per month <label>
                                                    <input type="number" name="fifth"><br>
                                                    <button type="submit" name="calculate">Calculate</button>
                                                    <button type="reset">Reset</button>
        </form>
    </div>

    <?php

    if ($showBill) {
        echo "<hr>";
        echo "<h1>My Electricity Bill</h1>";
        echo "First input: " . $firstkwh . " * 0.218 = RM" . $firstcharge . "<br>";
        echo "Second input: " . $secondkwh . " * 0.344 = RM" . $secondcharge . "<br>";
        echo "Third input: " . $thirdkwh . " * 0.516 = RM" . $thirdcharge . "<br>";
        echo "Fourth input: " . $fourthkwh . " * 0.546 = RM" . $fourthcharge . "<br>";
        echo "Fifth input: " . $fifthkwh . " * 0.571 = RM" . $fifthcharge . "<br>";

        echo "Total kwh:" . $totalkwh . "kwh<br>";
        echo "Total Charge: RM" . $totalcharge . "<br>";
        echo "Total SST: RM" . $sst . "<br>";
        echo "Total Bill : RM" . $totalBill;
    }

    ?>

</body>

</html>