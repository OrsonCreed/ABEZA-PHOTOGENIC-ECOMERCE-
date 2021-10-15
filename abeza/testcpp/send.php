<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    
    echo "$name";
    echo shell_exec("./say-hello");
}else{
    echo "failed1";
}
?>
