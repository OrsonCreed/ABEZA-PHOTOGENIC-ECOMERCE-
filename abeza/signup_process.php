<?php
require_once ("dbLogin.php");
//processing data
$data_plugged = FALSE;
if(isset($_POST['Username']) &&
   isset($_POST['email']) &&
   isset($_POST['password']) &&
   isset($_POST['password_retype'])){
    $Username = get_post($conn, 'Username');
    $email = get_post($conn, 'email');
    $password = get_post($conn, 'password');
    $password_retype = $_POST['password_retype'];
    if($password == $password_retype){
        $data_plugged = TRUE;

        $query = "INSERT INTO members VALUES" .
        "('','$Username', '$email', '$password')";
        $result = $conn->query($query);
if (!$result){
    echo "INSERT failed: $query<br>" .
    $conn->error . "<br><br>";
}else{
    echo "
    <body onload = \"redirect_page()\" ></body>
    
    
    <script>
    function redirect_page(){
        window.location.href = \"index.php\";
    }
    </script>
    ";
}


    }}

   //$result->close();                  ** you must close this result
  // $conn->close();                    ** you must close this connection


/*
plese set a user friendly message to the user
*/
?>