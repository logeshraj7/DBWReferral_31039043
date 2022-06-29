<?php
	//starting the session
	session_start();
	//including the database connection
	require_once 'conn.php';
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM student");
    $stmt->execute();
    $users = $stmt->fetchAll();
	// foreach($users as $user)
	{
		if(($user['username'] != $username) &&
			($user['password'] != $password)) {
				$_SESSION['error'] = "Invalid username or password";
			header('location:adminpage.php');
            die();
				// header("location: adminpage.php");
			}
		else{
			echo "<script language = 'javascript'>;
				echo window.alert ('Login Sucessfully');
				window.location.href='adminpage.php';
				echo</script>";
			}
	}
}

?>
















 
// 	if(ISSET($_POST['home'])){
// 		// Setting variables
// 		$username = $_POST['username'];
// 		$password = $_POST['password'];
 
// 		// Select Query for counting the row that has the same value of the given username and password. This query is for checking if the access is valid or not.
// 		$query = "SELECT COUNT(*) as count FROM `student` WHERE `username` = :username AND `password` = :password";
// 		$stmt = $conn->prepare($query);
// 		$stmt->bindParam(':username', $username);
// 		$stmt->bindParam(':password', $password);
// 		$stmt->execute();
// 		$row = $stmt->fetch();
 
// 		$count = $row['count'];
// 		if($count > 0){
// 			header('location:home.php');
// 		}else{
// 			$_SESSION['error'] = "Invalid username or password";
// 			header('location:login.php');
// 		}
// 	}
//