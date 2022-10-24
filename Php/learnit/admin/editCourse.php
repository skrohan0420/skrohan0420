<?php 
// session_start();
// include 'dataBase.php';


// if (isset($_SESSION['id'])) {
// 	header('location:userHome.php');

// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Course</title>
	<link rel="icon" href="img/LEARN-IT.png">
	<style type="text/css"><?php include 'style/editCourse.css';?></style>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>


	<main>


		<!-- Mobile NavBar -->
		<div class="mobNav">
			<ul>
				<li><a href="adminHome/adminHome.php">LEARN-IT</a></li>
				<li><i class="fas fa-bars"  id="nav"></i></li>
				<li>
					<a >admin</a>
					<div class="imgBx">
						<a><i class="far fa-user"></i></a>
					</div>
				</li>
			</ul>
			<ul id="navList">
				<a href="adminHome.php/#users" onclick="hide()"><li>All Users</li></a>
				<a href="adminHome.php/#topics" onclick="hide()"><li>Course</li></a>
				<a href="adminHome.php/#msg" onclick="hide()"><li>Masseges</li></a>
			</ul>
		</div>


		<!-- Nav Bar -->
		<nav>
			<ul>
				<a href="adminHome.php"><li>LEARN-IT</li></a>
			</ul>

			<ul>
				<a href="adminHome.php/#users">
					<li>
						<div class="navBorder up"></div>
						All Users 
						<div class="navBorder btm"></div>
					</li>
				</a>
				<a href="adminHome.php/#topics">
					<li>
						<div class="navBorder up"></div>
						Courses 
						<div class="navBorder btm"></div>
					</li>
				</a>
				<a href="adminHome.php/#msg">
					<li>
						<div class="navBorder up"></div>
						Masseges
						<div class="navBorder btm"></div>
					</li>
				</a>
			</ul>


			<ul>
				<a href=""><li class="userImgBx"><i class="far fa-user"></i></li></a>
				<a href=""><li class="navLogin-btn">Admin</li></a>
			</ul>
		</nav>




















		<!-- New Courses -->
		<section class="course" id="course">
			
			

			<h2>Creat a New Topic</h2>
				
			<div class="mainCon">
				

					<form autocomplete="off" action="editCourseAction.php" method="post" enctype='multipart/form-data'>
						<?php 
							include 'dataBase.php';

							$uid = $_REQUEST['ep'];

							$sql = mysqli_query($learnitdb, "SELECT * FROM coursedata WHERE id ='$uid'");

							$sql_fetch = mysqli_fetch_assoc($sql);

						?>
						<div class="con1">
							<input type="text" name="id" value=" <?php echo $sql_fetch['id'] ?> " hidden>
							<input type="text" name="name" placeholder="Course Name" value=" <?php echo $sql_fetch['course']; ?> " required>
							<input type="text" name="details" placeholder="Course Description" value=" <?php echo $sql_fetch['details']; ?> " required>

						</div >
						<div class="con2">
							<h3>Add a Course Image</h3>
							<input type="file" name="img" required >

							<input type="submit" name="" value="Save Changes" >

						</div>

					</form>

					<a href="deleteCrs.php?id=<?php echo $sql_fetch['id'] ?>">
						<button>Delete</button>
					</a>
				
			</div>


		</section>


		








		


    	<!-- CopyRight -->
    	<div class="copyright">
        	<p>Copyright © 2021 Sk Rohan Ali. All Right Reserved</p>
    	</div>
	</main>

	

	
	<script type="text/javascript">
		<?php 
			 include 'js/adminHome.js';
		?>
	</script>
</body>
</html>