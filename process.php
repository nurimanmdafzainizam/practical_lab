<?php

$error = "";
$showBill = false;
//validation 1
if (isset($_POST['calculate'])) {
    // echo "The input for the first kwh: " . $_POST['first'];

    $firstkwh = $_POST['first'];
    $secondkwh = $_POST['second'];
    $thirdkwh = $_POST['third'];
    $fourthkwh = $_POST['fourth'];
    $fifthkwh = $_POST['fifth'];

    //validation 2
    // if user did not input any value, set the charge to 0
    if ($firstkwh == "")
        $firstkwh = 0;
    if ($secondkwh == "")
        $secondkwh = 0;
    if ($thirdkwh == "")
        $thirdkwh = 0;
    if ($fourthkwh == "")
        $fourthkwh = 0;
    if ($fifthkwh == "")
        $fifthkwh = 0;

    //check if the user input a negative number, if yes, display an error message
    if ($firstkwh < 0 || $secondkwh < 0 || $thirdkwh < 0 || $fourthkwh < 0 || $fifthkwh < 0) {
        $error = "Please enter a valid number.";
    } else if ($firstkwh > 200) {
        $error = "<br> Invalid input. The first kwh should not exceed 200.";
    } else if ($secondkwh > 100) {
        $error = "<br> Invalid input. The second kwh should not exceed 100.";
    } else if ($thirdkwh > 300) {
        $error = "<br> Invalid input. The third kwh should not exceed 300.";
    } else if ($fourthkwh > 300) {
        $error = "<br> Invalid input. The fourth kwh should not exceed 300.";
    } else if ($firstkwh + $secondkwh + $thirdkwh + $fourthkwh + $fifthkwh == 0) {
    $error = "Please enter at least one value";
}
    else {

        $firstcharge = $firstkwh * 0.218;
        $secondcharge = $secondkwh * 0.344;
        $thirdcharge = $thirdkwh * 0.516;
        $fourthcharge = $fourthkwh * 0.546;
        $fifthcharge = $fifthkwh * 0.571;

        //totalkwh
        $totalkwh = $firstkwh + $secondkwh + $thirdkwh + $fourthkwh + $fifthkwh;
        //total rm
        $totalcharge = $firstcharge + $secondcharge + $thirdcharge + $fourthcharge + $fifthcharge;
        //total sst; 6% if above 600kwh
        if ($totalkwh > 600) {
            $sst = $totalcharge * 0.06;


        } else {
            $sst = 0;
        }

        $totalBill = $totalcharge + $sst;

        $showBill = true;

    }
}
?>