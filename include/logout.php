<?php 
session_start();
session_destroy();
echo "<script> location.href = '/bandienmay/index.php'</script>";
?>