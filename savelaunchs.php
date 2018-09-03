<?php
		include_once "header.php";

		include_once "connection.php";


		$sql = "INSERT INTO launchsedule
		(launch_name,station_from,station_to,departure_time,arrival_time,price,catagory)
		VALUES('".$_POST['launch_name']."','".$_POST['station_from']."','".$_POST['station_to']."','".$_POST['departure_time']."','".$_POST['arrival_time']."','".$_POST['price']."','".$_POST['catagory']."');";
		

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