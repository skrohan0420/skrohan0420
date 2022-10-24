<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Files</title>
	<style type="text/css">
		
		*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
			/*outline: 1px solid gray;*/
			font-family: sans-serif;
		}
		body{
			width: 100vw;
			display: grid;
			grid-template-columns: repeat(3, 1fr);
		}
		div.gallery {
		  	/*margin: 5px;*/
		  	border: 5px solid #fff;
		  	width: 100%;
		  	overflow: hidden;
		  	/*background: lightblue;*/
		  	
		 }
		 div.gallery:hover {
		  	border: 1px solid gray;

		 }

		div.gallery img {
		  	width: 100%;
		  	height: auto;
			transition: 0.3s;

		}
		div.gallery:hover img{
			transform: scale(0.9);
			/*transition: 0.4s;*/
		}
		div.desc {
		  	padding: 15px;
		  	text-align: center;
		  	background: wheat;
		}
		button{
			height: 30px;
			width: 80px;
			background: rgba(255, 0, 0, 0.7);
			outline: none;
			border: none;
			margin-left: 30px;
			color: white;
			font-size: 15px;
			cursor: pointer;
		}
	</style>
</head>
<body>

	<?php
		$server = "localhost";
		$username = "root";
		$password = "";
		$dbname = "test";

		try {
		    $conn = new PDO(
		        "mysql:host=$server;dbname=$dbname",
		        "$username","$password"
		    );
		      
		    $conn->setAttribute(
		        PDO::ATTR_ERRMODE,
		        PDO::ERRMODE_EXCEPTION
		    );
		}
		catch(PDOException $e) {
		    die('Unable to connect with the database');
		}
	?>






	<?php
      
    	$stmt = $conn->prepare('select * from images');
    	$stmt->execute();
    	$imagelist = $stmt->fetchAll();
   
   		foreach($imagelist as $image) {
    ?>
      

   
		<div class="gallery">
		  	<a target="_blank" href="<?=$image['image']?>">
		    	<img src="<?=$image['image']?>" >
		  	</a>
		  	<div class="desc">
		  		<?php echo  $image['name'] ?>
		  		<a href="del.php?ep=<?php echo $image['id']  ?>">
		  			<button>DELETE</button>
		  		</a>
		  	</div>
		</div>



 





    <?php
    }
    ?> 


</body>
</html>