<?php
  $sql1 ="SELECT count(id) As total FROM users";
      $result1=mysqli_query($mysqli,$sql1);
      $values=mysqli_fetch_assoc($result1);
      $users=$values['total'];
  $sql2 ="SELECT count(id) As total2 FROM reports ";
      $result2=mysqli_query($mysqli,$sql2);
      $values=mysqli_fetch_assoc($result2);
      $reports=$values['total2'];
  $sql1 ="SELECT count(id) As total3 FROM archives";
      $result1=mysqli_query($mysqli,$sql1);
      $values=mysqli_fetch_assoc($result1);
      $archives=$values['total3'];
  $sql2 ="SELECT count(id) As total4 FROM requests ";
      $result2=mysqli_query($mysqli,$sql2);
      $values=mysqli_fetch_assoc($result2);
      $requests=$values['total4'];   

?>