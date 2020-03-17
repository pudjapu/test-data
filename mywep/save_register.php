<?php
    require('connect.php');
	
	if(trim($_POST["txtUsername"]) == "")
	{
        echo "Please input Username!";
        echo "<br>";
        echo "<br><a href='register.php'>Back to Register</a>";
		exit();	
	}
	
	if(trim($_POST["txtPassword"]) == "")
	{
        echo "Please input Password!";
        echo "<br>";
        echo "<br><a href='register.php'>Back to Register</a>";
		exit();	
	}	
		
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
        echo "Password not Match!";
        echo "<br>";
        echo "<br><a href='register.php'>Back to Register</a>";
		exit();
	}
	
	if(trim($_POST["txtName"]) == "")
	{
        echo "Please input Name!";
        echo "<br>";
        echo "<br><a href='register.php'>Back to Register</a>";
		exit();	
    }
    
    if(trim($_POST["txtFamily"]) == "")
	{
        echo "Please input Family!";
        echo "<br>";
        echo "<br><a href='register.php'>Back to Register</a>";
		exit();	
	}
    $IDuse = $_POST['txtUsername'];
    $SQL = "SELECT * FROM account WHERE ID = '$IDuse'";
    $objQuery = mysqli_query($connect,$SQL);
    $objResult = mysqli_fetch_array($objQuery);
    if($objResult){
        echo "Username already exists!";
    } else {
		$SQL = "INSERT INTO account (`ID`, `Password`, `FName`, `LName`) VALUES ('".$_POST["txtUsername"]."', 
		'".$_POST["txtPassword"]."','".$_POST["txtName"]."','".$_POST["txtFamily"]."')";
		$objQuery = mysqli_query($connect,$SQL);
		
		echo "Register Completed!<br>";		
	
		echo "<br> Go to <a href='index.php'>Login page</a>";

    mysqli_close();
    }
?>