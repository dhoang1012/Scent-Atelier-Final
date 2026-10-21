<?php
//start a session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
//set session variables
  $_SESSION["myuniversity"] = "Rutgers";
  S_SESSION["status"] = "Junior";
  echo "Session variables are set.";
?>

</body>
</html>