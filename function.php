<?php 
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

//conect database
$conn = mysqli_connect("localhost","root","","stokbarang");
if ($conn){


}
?>
