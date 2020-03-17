<?php
require './connect.php';

session_start();

$sql = "SELECT * FROM manage WHERE ID = '".$_SESSION['ID']."'";

$result = mysqli_query($connect,$sql);

if($result){
    while($record = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        echo "Product Name : ".$record['ProductName']."      ";
        echo "<br>";

        $sql_2 = "SELECT * FROM status WHERE Status = '".$record['Status']."'";
        $result_2 = mysqli_query($connect,$sql_2);
        $st = mysqli_fetch_array($result_2,MYSQLI_ASSOC);

        echo "Status : ".$st['Name']."      ";
        echo "<br>";
    }
} else {
    echo "-----";
}

mysqli_close();

?>

<html>
<head>
<title>Show</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>

<input type="submit" name="back" value="go back" onclick='location.replace("link.php")'>
</body>
</html>