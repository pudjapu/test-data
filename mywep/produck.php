<?php
    require('connect.php');
    session_start();
    

	if(trim($_POST["ProductName"]) == "")
	{
        echo "Please input ProductName!";
        echo "<br>";
        echo "<br><a href='registerproduck.php'>Back to registerproduck</a>";
		exit();	
	}
	
	if(trim($_POST["ProductID"]) == "")
	{
        echo "Please input Password!";
        echo "<br>";
        echo "<br><a href='registerproduck.php'>Back to registerproduck</a>";
		exit();	
	}	
    
    
    $sql="SELECT * FROM account WHERE ID='".$_SESSION['ID']."'";
    $obj = mysqli_query($connect,$sql);
    $OR = mysqli_fetch_array($obj,MYSQLI_ASSOC);
    
    $uid = $OR['ID'];
    $FN = $OR['FName'];
    $LN = $OR['LName'];

    $IDuse = $_POST['ProductID'];
    $SQL = "SELECT * FROM manage WHERE ProductID = '$IDuse'";
    $objQuery = mysqli_query($connect,$SQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    if($objResult){
        echo "ProductID already exists!";
    } else {
        
        $FN = $OR['FName'];

		$SQL = "INSERT INTO `manage` (`ID`, `FName`, `LName`, `ProductName`, `ProductID`, `Status`) VALUES ('".$uid."', '".$FN."', '".$LN."', '".$_POST["ProductName"]."', '".$_POST["ProductID"]."', 'W')";
		$objQuery = mysqli_query($connect,$SQL);
		
		echo "Register Completed!<br>";		
	
		echo "<br> Go to <a href='registerproduck.php'>Login page</a>";

    
    }

    mysqli_close();
?>