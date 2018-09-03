    <?php
    include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $launchdetails = mysqli_query($con, "SELECT * FROM launchdetails WHERE launchdetails.lid= {$_GET['lid']}");
      mysqli_close($con);
    }

    foreach($launchdetails as $launchdetailss)
    ?>
<div id="main-content" class="clearfix">
<div class="left">
<br />
<p>
<form name="launchdetails" method="post" action="savelaunchedit.php?lid=<?php echo "{$_GET['lid']}" ?>">
<p>
  <strong>Launch Name</strong><br />
  <select name="launch_name" value = "<?php echo $launchdetailss['launch_name'];?>" style="width:80px; padding:3px; border-radius: 8px;">
  <option value="A" selected>A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">D</option>
<option value="F">D</option>
</select>

  <p>
  <strong>Capacity</strong><br />
  <input type="text" value="<?php echo $launchdetailss['capacity'];?>" name= "capacity" />
  </p>
  <p>
  <strong>Brand Name</strong><br />
  <input type="text" value = <?php echo $launchdetailss['brand_name'];?> name= "brand_name"/>
  </p>
  <p>
  <strong>Captain name</strong><br />
  <input type="text" value = "<?php echo $launchdetailss['launch_name'];?>" name= "captain_name"/>
  </p>
<p>

<input type="submit" name="submit" value="Submit" />
<input type="reset" name="reset"  value="Reset" /><br />
</select>
</p>
  

</body>
</html>
