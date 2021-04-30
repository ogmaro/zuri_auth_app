<?php
include_once("./layouts/header.php");
?>
<?php
echo ("Welcome " . $_SESSION['name']) . " ";
?>
<a href="logout.php"> Logout</a>
<?php
include_once("./layouts/footer.php");
?>