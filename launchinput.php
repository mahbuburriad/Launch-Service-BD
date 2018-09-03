<?php
include_once "header.php"
?>
<div id="main-content" class="clearfix">
<div class="left">
<br />

<p>
<form name="launchdetails" method="post" action="savelaunch.php">
<p>
  <strong>Launch Name</strong><br />
  <select name="launch_name" style="width:80px; padding:3px; border-radius: 8px;">
  <option value="A" selected>A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">D</option>
<option value="F">D</option>
</select>

  <p>
  <strong>Capacity</strong><br />
  <input type="text" name= "capacity" />
  </p>
  <p>
  <strong>Brand Name</strong><br />
  <input type="text" name= "brand_name"/>
  </p>
  <p>
  <strong>Captain name</strong><br />
  <input type="text" name= "captain_name"/>
  </p>
<p>

<input type="submit" name="submit" value="Submit" />
<input type="reset" name="reset"  value="Reset" /><br />
</select>
</p>
  

</body>
</html>
