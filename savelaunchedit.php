<?php
		include_once "header.php";

		include_once "connection.php";


		$sql = "UPDATE launchdetails SET launch_name = '{$_POST['launch_name']}', capacity = '{$_POST['capacity']}', brand_name = '{$_POST['brand_name']}', captain_name = '{$_POST['captain_name']}'
		WHERE launchdetails.lid= {$_GET['lid']}";


		if(mysqli_query($con, $sql))
		{
			?>

			<div style="width: 100%;">
			<img src="img\1.jpg" alt="Success Icon" style="margin: 200px; height: 400px; width: 400px; margin-left: 750px;"/>
			<h1 style="color: red; margin-left: 900px; margin-bottom: -900px">Update Successfull </h1>
				
			</div>



			<?php
		}

		else
		{
			echo "Error: ". $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con); ?>

			</body>
</html>