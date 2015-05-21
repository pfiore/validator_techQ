<?php
// var_dump($_POST);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = test_email($_POST["email"]);
        $number = test_number($_POST["number"]);
        $musicians = $_POST["musicians"];
        // var_dump($_POST["musicians"]);
        all_valid($email, $number, $musicians);
    }
    else {
        echo "<script type='text/javascript'>alert('Invalid Email');</script>";
    }

    function test_email($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function test_number($number) {
        if($number >= 1 && $number < 10000) {
            return $number;
        } else {
            echo '<script type="text/javascript">alert("Invalid number must be between 1 and 9999");</script>';
        }
    }

    function all_valid($email, $number, $musicians) {
        if (isset($email) && isset($number) && isset($musicians)) {
            // echo "<script type='text/javascript'>$('#britney').delay(5000).fadeOut();</script>";
            //wait 5 seconds
            // echo "<script type='text/javascript'>$('.britney').fadeOut();</script>";
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.11.2.js"></script>
    <title>Validator</title>
</head>
<body>

    <header>
        <h1></h1>
    </header>
    <p> hi </p>
    <div class="britney">
        <p>
            "hooray!"
        </p>
    </div>

</body>
</html>
