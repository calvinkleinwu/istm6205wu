<?php 
require_once ('config.php');
/* use PDO method to connect with MySQL*/
try { 
  $conn = new PDO("mysql:dbname=" .DATABASE .";host=" .SERVER, USERNAME, PASSWORD);
  $sql = "SELECT * FROM JobPosts";
  $result = $conn->query($sql);
  $result->setFetchMode(PDO::FETCH_ASSOC);
  $rows = array(); 

  foreach ($result as $row) {
     $rows[] = $row;
   } 
}
   /* another way to fetch data into $rows[] 

   while($row = $result->fetch(PDO::FETCH_ASSOC)){
   $rows[] = $row;}
   */
catch (Exception $e) {
  echo "<br>" . "YOU SHOULD KNOW THAT: " . "<br>" .$e->getMessage();
}
  
  echo json_encode($rows);

?>
