<?php
if(isset($_POST)){
    $data = file_get_contents("php://input");
    $q = json_decode($data, true);
    echo $q['quantity'];
}
?>