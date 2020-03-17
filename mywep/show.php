
<html>

<head>test wow</head>

<body>
    <?php

    require('connect.php');

    $sql = 'SELECT * FROM manage';

    $objQuery = mysql_query($connect,$sql) or die("Error Query[" . $sql . "]");
    ?>

<table border = "1">
    <tr>
        <th while ="50">
            <div align = "conter">No</div>
        </th>
        <th while ="100">
            <div align = "conter">ID</div>
        </th>
        <th while ="100">
            <div align = "conter">FN</div>
        </th>
        <th while ="100">
            <div align = "conter">LN</div>
        </th>
        <th while ="100">
            <div align = "conter">ST</div>
        </th>
    </tr>

    <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        <td>
          <div align="center"><?php echo $i; ?></div>
        </td>
        <td><?php echo $objResult["ID"]; ?></td>
        <td><?php echo $objResult["FName"]; ?></td>
        <td><?php echo $objResult["LName"]; ?></td>
        <td><?php echo $objResult["Status"]; ?></td>
      </tr>
    <?php
      $i++;
    }
    ?>
    </table>
  <?php
  mysqli_close($conn); // ปิดฐานข้อมูล
  echo "<br><br>";
  echo "--- END ---";
  ?>
</body>

</html>