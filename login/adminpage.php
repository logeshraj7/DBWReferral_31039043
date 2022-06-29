<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Bootstrap -->
		<link rel ="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<script>
			function fun(){
				let uni = document.getElementById('uni').value
				let pwi = document.getElementById('pwi').value
				if(uni == ''){
					if(!document.getElementById('unt')){
						var ele = document.getElementById("uni");
						var text = document.createElement('p')
						text.innerHTML='<p id="unt" style="color:red;">Please provide valid UserName</p>'
						ele.after(text);
					}
				} else {
					if(document.getElementById('unt')){
						document.getElementById('unt').remove()
					}	
				}
				if(pwi == ''){
					if(!document.getElementById('pwt')){
						var ele = document.getElementById("pwi");
						var text = document.createElement('p')
						text.innerHTML='<p id="pwt" style="color:red;">Please provide valid Password</p>'
						ele.after(text);
					}
				} else {
					if(document.getElementById('pwt')){
						document.getElementById('pwt').remove()
					}		
				}
			}
				
		</script>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
footer {
    display: flex;
    justify-content: Left;
    padding: 2px;
    background-color: #DE3163;
    color: #fff;
}
.button{
	background-color:#DE3163;
}
</style>
</head>
<body style="background-color: #FFFDD0">
<form action="login_query.php" method = "post">
<ul>
  <li><h2>Mini Blackboard Sheffield Hallam University</h2></li>
  <li><img class="logo" src="logo.png" height = 75px width = 75px></li>
  
  <li><a href="logout.php"><h3>logout</h3></a></li>
</ul>
<div class="container-fluid">

<?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <?php  if (isset($_SESSION['username'])) : ?>

		<p>Hello
            <strong>
            <?php echo $_SESSION['username']; ?>
            </strong>
        </p>
		
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
        <p>© May 2022- Mohd Zairul Mazwan Jilani</p>
    </footer>
	</form>
</body>
</html>