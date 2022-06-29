<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sqlstudent = "SELECT * FROM student WHERE username='$username' AND password='$password'";
$sqlstaff = "SELECT * FROM staff WHERE username='$username' AND password='$password'";
$result = $conn->query($sqlstudent);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $loginStatus = "true";
    $_SESSION["firstName"] = $row["firstName"];
    $_SESSION["lastName"] = $row["lastName"];
    $_SESSION["roles"] = "Student";
  }
} else {
  $resultstaff = $conn->query($sqlstaff);
  if ($resultstaff->num_rows > 0) {
    while ($rowstaff = $resultstaff->fetch_assoc()) {
      $loginStatus = "true";
      $_SESSION["firstName"] = $rowstaff["firstName"];
      $_SESSION["lastName"] = $rowstaff["lastName"];
       $r='Staff: '.$rowstaff["role"];
      $_SESSION["roles"] = $r;
    }
  } else {
    $loginStatus = "false";
  }
}
$conn->close();
?>
<html>

<body style="background-color: #FFFDD0">

  <script>
    <?php if ($loginStatus == "true") { ?>
      var answer = confirm("Login Successfully")
      if (answer) {
        window.location = "home.php";
      }
    <?php } ?>
  </script>

</html>