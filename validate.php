<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = test_email($_POST["email"]);
        $number = test_number($_POST["number"]);

        echo $email;
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
            echo "<script type='text/javascript'>alert('Invalid number must be between 1 and 9999');</script>";
        }
    }

    // function checkEmail($email) {
    //     // Variable to check
    //     $email = "john.doe@example.com";
    //
    //     // Remove all illegal characters from email
    //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    //
    //     // Validate e-mail
    //     if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    //          echo("$email is a valid email address");
    //     } else {
    //          echo("$email is not a valid email address");
    //     }
    // }
?>
