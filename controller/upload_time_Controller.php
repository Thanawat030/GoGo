<?php
include 'db.php';

function fetchUpload($conn){
  $sql = "SELECT filename , upload_time FROM upload ORDER BY upload_time DESC ";
  $result = $conn->query($sql);
  $uploads = [];

  if($result->num_row > 0){
    while($row = $result->fetch_assoc()){
      $uploads[] = $row;
    }
  }

  return $uploads;
}
?>