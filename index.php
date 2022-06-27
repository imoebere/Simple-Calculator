<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <title>Calculator</title>
</head>
<body class="bg-success">
    <form action="" method="POST">
    <?php
        if (isset($_POST['sub'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['sub'];
            if($operator == "+"){
                $result = $num1 + $num2;
            }elseif($operator == "-"){
                $result = $num1 - $num2;
            }elseif($operator == "X"){
                $result = $num1 * $num2;
            }elseif($operator == "/"){
                $result = $num1 / $num2;
            }else {
                $result = "Select an Operator";
            }
        }
    ?>
        <div class="container">
        <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
            <h3 class="text-center text-primary font-monospace">SIMPLE CALCULATOR</h3>
            <div class="col-6">
                <label>First Number</label>
                <input type="text" required name="num1" value="" class="form-control"/>
            </div>
            <div class="col-6">
                <label>Second Number</label>
                <input type="text" required name="num2" value="" class="form-control"/>
            </div>
        </div>
        <div class="row justify-content-center m-auto shadow bg-white mt-1 py-3 col-md-6">
            <div class="col-3">
                <input type="submit" value="+" name="sub"  class="form-control btn btn-outline-success"/>
            </div>
            <div class="col-3">
                <input type="submit" value="-" name="sub" class="form-control btn btn-outline-success"/>
            </div>
            <div class="col-3">
                <input type="submit" value="X" name="sub" class="form-control btn btn-outline-success"/>
            </div>
            <div class="col-3">
                <input type="submit" value="/" name="sub" class="form-control btn btn-outline-success"/>
            </div>
        </div>
        <div class="row justify-content-center m-auto shadow bg-white mt-1 py-3 col-md-6">
            <div class="col-8">
                <label>ANSWER</label>
                <input type="text" value="<?php echo $result; ?>" readonly name="result" class="form-control"/>
                <?php echo $num1. " " .$operator. " ".$num2." = ". $result; ?>
            </div>
        </div>
        </div>
    </form>
</body>
</html>