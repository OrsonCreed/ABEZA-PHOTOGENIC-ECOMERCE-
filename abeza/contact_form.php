<?php
require_once("dbLogin.php");

//receiving data

if(isset($_POST['w3lName']) &&
    isset($_POST['w3lSender']) && 
    isset($_POST['w3lSubject'])&& 
    isset($_POST['w3lMessage'])){
        $name    = get_post($conn, 'w3lName');
        $email   = get_post($conn, 'w3lSender');
        $subject = get_post($conn, 'w3lSubject');
        $message = get_post($conn, 'w3lMessage');

        $query   = "INSERT INTO contacts values(\"\",'$name','$email','$subject','$message')";
        $result = $conn->query($query);
        if (!$result) {
            //here will go the exeption
            die("$conn->error");
            
        }else{
            echo "
            <body onload = \"redirect_page();\"></body>
            <script>
            function redirect_page(){
                window.location.href = \"contact.php\";
            };
            </script>
            ";
        }

    }

?>