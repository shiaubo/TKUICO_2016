<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php   
 $dbhost = '127.0.0.1';   
 $dbuser = 'root';   
 $dbpass = '';   
 $dbname = 'ico';

 $teachid =$_REQUEST['teachid'];
 $name = $_REQUEST['name'];
 $room = $_REQUEST['room'];
 $location = $_REQUEST['location'];
 
 $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
  
  mysql_query("SET NAMES 'utf8'");
  mysql_select_db($dbname);   
  
  $sql_insert = "INSERT INTO computerrepairment(teacherName, teacherID, buildingCode , location) VALUES ('$name','$teachid','$room','$location')";
  $result = mysql_query($sql_insert) or die('MySQL insert error');
  
  $sql_query = "select * from computerrepairment";
  $result = mysql_query($sql_query) or die('MySQL query error');
  
  while($row = mysql_fetch_array($result))
  {
   echo $row['teacherName']."<br>";
   echo $row['teacherID']."<br>";
   echo $row['buildingCode']."<br>";
   echo $row['location']."<br><br>"; 
  }
?>
</body>
</html>