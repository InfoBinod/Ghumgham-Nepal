<?php
include "connect.php";
$sql ="CREATE TABLE enquiry(
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(60) NOT NULL,
  email VARCHAR(60) NOT NULL,
  phone VARCHAR(60) NULL,
  adate VARCHAR(60) NULL,
  peoples INT(60) NULL,
  message VARCHAR(460) NOT NULL)";
$conn-> query($sql);

 ?>
