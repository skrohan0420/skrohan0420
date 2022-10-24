<?php 
session_start();
include 'dataBase.php';


if (!isset($_SESSION['id'])) {
	header('location:index.php');

}



// echo  	$_SESSION['id'] . '<br>'.
// 	  	$_SESSION['fullName'] . '<br>'.
// 	  	$_SESSION['email'] . '<br>'.
// 		$_SESSION['phone'] . '<br>'.
// 		$_SESSION['password'];



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_SESSION['fullName'] ?> LEARN-IT</title>
	<link rel="icon" href="img/LEARN-IT.png">
	<style type="text/css"><?php include 'style/userHome.css';?></style>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>




	<main>


		<!-- Mobile NavBar -->
		<div class="mobNav">
			<ul>
				<li><a href="">LEARN-IT</a></li>
				<li><i class="fas fa-bars"  id="nav"></i></li>
				<li>
					<a href="userViewPruserViewProfile.php"></a>
					<div class="imgBx">
						<a href="userViewPruserViewProfile.php"><i class="far fa-user"></i></a>
					</div>
				</li>
			</ul>
			<ul id="navList">
				<a href="#contact" onclick="hide()"><li>Contact Me</li></a>
				<a href="userViewProfile.php" onclick="hide()"><li>view Profile</li></a>
				<a href="logOut.php" onclick="hide()"><li>Log Out</li></a>
			</ul>
		</div>


		<!-- Nav Bar -->
		<nav>
			<ul>
				<a href="#course"><li>LEARN-IT</li></a>
			</ul>

			<ul>
				<a href="#contact">
					<li>
						<div class="navBorder up"></div>
						Contact Us
						<div class="navBorder btm"></div>
					</li>
				</a>
				<a href="userViewProfile.php">
					<li>
						<div class="navBorder up"></div>
						 View Profile 
						<div class="navBorder btm"></div>
					</li>
				</a>
				<a href="logOut.php">
					<li>
						<div class="navBorder up"></div>
						 Logout 
						<div class="navBorder btm"></div>
					</li>
				</a>
				
			</ul>


			<ul>
				<a href="userViewProfile.php">
					<li class="userImgBx">
						<?php 
							if ($_SESSION['image'] !== 'not set') {
								echo '<img src="' .$_SESSION['image']. '">'; 
							}
							else{
								
								echo '';
							}	
						?> 
						<i class="far fa-user" id="far"></i>
					</li>
				</a>
				<a href="userViewProfile.php"><li class="navLogin-btn"><?php echo $_SESSION['fullName'];   ?></li></a>
			</ul>
		</nav>


		


		
		<section class="course">




			<h1>Our Courses</h1>
			<hr>


			<div class="alert" id="alert">
				<i class="far fa-times" onclick="hideAlert()"></i>
				<h3>Not available Right Now</h3>
			</div>








			<div class="mainCon">


				<?php 

				include 'dataBase.php';
				$sql = mysqli_query($learnitdb, "SELECT * FROM  coursedata");


				 ?>
				 <?php 
				while ($sql_fetch = mysqli_fetch_assoc($sql)){
				?>
				
				<div class="conBx">
					
					<div class="imgBx">
						<img src="<?php echo 'admin/'.$sql_fetch['img'];?>">
					</div>
					<h3 class="imgH2"><?php echo $sql_fetch['course']; ?></h3>
					<div class="txtBx">
						<h2>
							<?php echo $sql_fetch['course']; ?>
						</h2>			
						<p>
							<?php echo $sql_fetch['details']; ?>
						</p>
						<button onclick="showAlert()">
								View
						</button>
					</div>


				</div>
				
				<?php 
				} 
				?>
			</div>
		</section>





	



		<!-- Contact -->
		<section class="contact" id="contact">
	        <div class="heading white">
	            <h1>Contact Me</h1>
	            <hr>
	        </div>
	        <div class="content">
	            <div class="contactInfo"> 
	                <h3>Contact Info</h3>

	                <div class="contactInfoBx">
	                    <div class="box"> 
	                        <div class="icon">
	                            <i class="fas fa-map-marker-alt"></i>
	                        </div>
	                        <div class="text">
	                            <h3>Address</h3>
	                            <p>
	                                712136  chandannagore,<br>
	                                hooghly,West Bengal<br>
	                                INDIA
	                            </p>
	                        </div>
	                    </div>

	                    <div class="box"> 
	                        <div class="icon">
	                            <i class="fas fa-phone-alt"></i>
	                        </div>
	                        <div class="text">
	                            <h3>Phone</h3>
	                            <p>
	                                6290353314
	                            </p>
	                        </div>
	                    </div>  

	                    <div class="box"> 
	                        <div class="icon">
	                            <i class="fas fa-envelope"></i>
	                        </div>
	                        <div class="text">
	                            <h3>Email</h3>
	                            <p>
	                                skrohan0420@gmail.com
	                            </p>
	                        </div>
	                    </div> 

	                </div>
	            </div>

	            <div class="formBx">
	                <form action="msg.php" method="post">
	                    <h3>Message Me</h3>
	                    <input type="text" required name="name" placeholder="Full Name">
	                    <input type="email" required name="email" placeholder="Email">
	                    <input type="text" required name="msg" placeholder="Your Message"></input>
	                    <input type="submit" required value="send">
	                </form>
	            </div>

	        </div>
    	</section>


    	<!-- CopyRight -->
    	<div class="copyright">
        	<p>Copyright © 2021 Sk Rohan Ali. All Right Reserved</p>
    	</div>
	</main>

	

	
	<script type="text/javascript">
		<?php 
			 include 'js/userHome.js';
		?>
	</script>
</body>
</html>