<?php
require './connect.php';

session_start();

$sql = "SELECT * FROM account WHERE ID = '$IDuse'";

$result = mysqli_query($connect,$sql);

if($result){
    while($record = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        echo "ID : ".$record['ID']."<br>";
    }
} else {
    echo "-----";
}

?>