<?php
session_start();
//$con = mysqli_connect("innodb.endora.cz","spalet1646394871","78+nYc*C%!sH6+YI","spalet1646394871");
$con = mysqli_connect("localhost","root","","rada");
if(isset($_POST['TurnON'])){
    $query = "UPDATE comments SET ID='1'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: dashboard.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: dashboard.php");
    }
}







?>