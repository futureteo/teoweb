<?php
if (isset($_POST['submit'])) { // Corrected the isset() call
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
        $total = 0; // Default total in case no operation matches
        
        // Check operation
        if ($_POST['operation'] == 'plus') {
            $total = $_POST['number1'] + $_POST['number2'];
        }
        if ($_POST['operation'] == 'minus') {
            $total = $_POST['number1'] - $_POST['number2'];
        }
        if ($_POST['operation'] == 'times') {
            $total = $_POST['number1'] * $_POST['number2'];
        }
        if ($_POST['operation'] == 'divided') {
            if ($_POST['number2'] != 0) {
                $total = $_POST['number1'] / $_POST['number2'];
            } else {
                $total = "Cannot divide by zero";
            }
        }
        if ($_POST['operation'] == 'modulus') {
            $total = $_POST['number1'] % $_POST['number2'];
        }

        echo "<h1>Result = {$total}</h1>";
    } else {
        echo 'Please enter valid numbers!';
    }
} 

echo "MY FIRST EME CALCULATOR";
echo "I'M JUST TRYING RANDOM THINGS";
?>
<!DOCTYPE html>
<html>
<body>
<form method="post" action="calculator.php">
    <br>
    <input name="number1" type="text" class="form-control" placeholder="Enter first number">  
    <input name="number2" type="text" class="form-control" placeholder="Enter second number" style="width: 150px; display: inline">

    <br><br>

    <select name="operation">
        <option value="plus">PLUS</option>
        <option value="minus">MINUS</option>
        <option value="times">TIMES</option>
        <option value="divided">DIVIDE</option>
        <option value="modulus">MODULUS</option>
    </select>

    <br><br>

    <input name="submit" type="submit" value="Calculate" class="btn btn-primary"/>
</form>

<style>
    body {
        background: url('img/hellooo_keyti.png');
        background-repeat: no-repeat;
        background-size: 1350px 700px;
        text-align: center;
    }
</style>
</body>
</html>
