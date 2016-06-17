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

 $c =$_REQUEST['c'];
 $java = $_REQUEST['java'];
 $python = $_REQUEST['python'];
 $swift = $_REQUEST['swift'];
 $mssql = $_REQUEST['mssql'];
 $mysql = $_REQUEST['mysql'];
 $nb = $_REQUEST['nb'];
 $pc = $_REQUEST['pc'];
 $ios = $_REQUEST['ios'];
 $android = $_REQUEST['android'];
 $agree = $_REQUEST['agree'];
 $stuid = $_REQUEST['stuid'];

 
 $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
  
  mysql_query("SET NAMES 'utf8'");
  mysql_select_db($dbname);   
  
  $sql_insert = "INSERT INTO course(c, java, python , swift, mssql, mysql, nb, pc, ios, android, agree, stuid) VALUES ('$c','$java','$python','$swift','$mssql','$mysql','$nb','$pc','$ios','$android','$agree', '$stuid')";
  $result = mysql_query($sql_insert) or die('MySQL insert error');

  
  $sql_query = "select * from course";
  $result = mysql_query($sql_query) or die('MySQL query error');
  
  while($row = mysql_fetch_array($result))
  {
   echo $row['c']."<br>";
   echo $row['java']."<br>";
   echo $row['python']."<br>";
   echo $row['swift']."<br><br>"; 
   echo $row['mssql']."<br><br>"; 
   echo $row['mysql']."<br><br>"; 
   echo $row['nb']."<br><br>"; 
   echo $row['pc']."<br><br>"; 
   echo $row['ios']."<br><br>"; 
   echo $row['android']."<br><br>"; 
   echo $row['agree']."<br><br>"; 
  }
?>
</body>
</html>