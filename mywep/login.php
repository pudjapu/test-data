<?php

require('connect.php');

session_start();

$UseName = trim($_POST["txtUsername"]);
$PassWord = trim($_POST["txtPassword"]);



if(trim($_POST["txtUsername"]) == "")
	{
        echo "Please input Username!";
        echo "<br>";
        echo "<br><a href='index.php'>Go Back</a>";
		exit();	
	}
	
	if(trim($_POST["txtPassword"]) == "")
	{
        echo "Please input Password!";
        echo "<br>";
        echo "<br><a href='index.php'>Go Back</a>";
		exit();	
    }

    if(trim($_POST["txtUsername"]) == "admin"){
        $sql_2="SELECT * FROM account WHERE ID='admin'AND Password='".$password."";

        $result_2=mysqli_query($connect,$sql_2);
        $row_2 = mysqli_fetch_array($result_2);

        if($row_2['Password'] == $password){
            header("Location:manage.php");
        }
        else{
            echo "Password Worn";
        }

        header("Location:manage.php");
    }

    else if(isset($_POST['txtUsername'])){
        $uname=$_POST['txtUsername'];
        $password=$_POST['txtPassword'];

        $uname = stripcslashes($uname);
        $password = stripcslashes($password);
        $uname = mysqli_real_escape_string($uname);
        $password = mysqli_real_escape_string($password);

        $sql="SELECT * FROM account WHERE ID='".$uname."'AND Password='".$password."";

        $result=mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($result);
        
        if($row['ID'] == $uname && $row['Password'] == $password){
            $_SESSION['ID']= trim($_POST["txtUsername"]);   
            header("Location:link.php");
        }
        else{
            echo "Password Worn";
        }
    }

    mysqli_close();
?>