    <?php
    include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $launchsedule = mysqli_query($con, "SELECT * FROM launchsedule WHERE launchsedule.lid= {$_GET['lid']}");
      mysqli_close($con);
    }

    foreach($launchsedule as $launchsedules)
    ?>


<div id="main-content" class="clearfix">
<div class="left">
<br />

<p>
<form name="launchsedule" method="post" action="savelaunchsedit.php?lid=<?php echo "{$_GET['lid']}" ?>">
<p>
  <strong>Launch Name</strong>
  <select name="launch_name" value = "<?php echo $launchsedules['launch_name'];?>" style="width:80px; padding:3px; border-radius: 8px;">
  <option value="A" selected>A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">D</option>
<option value="F">D</option>
</select>

  <p>
  <strong>Sation From</strong>
  <input type="text" value = "<?php echo $launchsedules['station_from'];?>" name= "station_from" />
  </p>
  <p>
  <strong>Station To</strong>
  <input type="text" value = "<?php echo $launchsedules['station_to'];?>" name= "station_to"/>
  </p>
  <p>
  <strong>Departure Time</strong>
  <input type="text" value = "<?php echo $launchsedules['departure_time'];?>" name= "departure_time"/>
  </p>
  <p>
  <strong>Arrival Time</strong>
  <input type="text" value = "<?php echo $launchsedules['arrival_time'];?>" name= "arrival_time"/>
  </p>
  <p>
  <strong>Price</strong>
  <input type="text" value = "<?php echo $launchsedules['price'];?>" name= "price"/>
  </p>
  <p>
  
  <strong>Catagory</strong>
  <select name="catagory"  value = "<?php echo $launchsedules['catagory'];?>" style="width:80px; padding:3px; border-radius: 8px;">
  <option value="VIP" selected>VIP</option>
<option value="Class_A">Class A</option>
<option value="Class_B">Class B</option>
<option value="Class_C">Class C</option>
</select>
</p>
<p>

<input type="submit" name="submit" value="Submit" />
<input type="reset" name="reset"  value="Reset" /><br />
</select>
</p>
  

</body>
</html>
