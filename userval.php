<?php 
session_start();
function valuser($session_val){
if (isset($session_val)){
  echo"zalogowany na konto: ".$session_val;
}
else{
    echo 'nie jestes zalogowany';

}
}

?>