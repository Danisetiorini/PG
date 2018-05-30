<?php
  $link = mysqli_connect('localhost', 'root', '', 'primagama1');

  if (!$link) {
    echo "error".mysqli_connect_error();
    exit();
  }

  echo "success";
 ?>
