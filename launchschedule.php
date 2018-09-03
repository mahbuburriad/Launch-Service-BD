<?php
include_once "header.php"
?>
<div id="main-content" class="clearfix">
<div class="left">
<br />

<p>
<form name="launchsedule" method="post" action="savelaunchs.php">
<p>
  <strong>Launch Name</strong>
  <select name="launch_name" style="width:80px; padding:3px; border-radius: 8px;">
  <option value="A" selected>A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">D</option>
<option value="F">D</option>
</select>

  <p>
  <strong>Sation From</strong>
  <input type="text" name= "station_from" />
  </p>
  <p>
  <strong>Station To</strong>
  <input type="text" name= "station_to"/>
  </p>
  <p>
  <strong>Departure Time</strong>
  <input type="text" name= "departure_time"/>
  </p>
  <p>
  <strong>Arrival Time</strong>
  <input type="text" name= "arrival_time"/>
  </p>
  <p>
  <strong>Price</strong>
  <input type="text" name= "price"/>
  </p>
  <p>
  
  <strong>Catagory</strong>
  <select name="catagory" style="width:80px; padding:3px; border-radius: 8px;">
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
