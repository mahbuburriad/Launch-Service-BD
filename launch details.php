    <?php
    include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $launchdetails = mysqli_query($con, "SELECT * FROM launchdetails ORDER BY lid ASC");
      mysqli_close($con);
    }
    ?>

<table>
  <table">
  <thread >
  <th >Sl#</th>
    <th>Launch Name</th>
    <th >Capacity</th>
    <th >Brand Name</th>
    <th >Captain Name</th>
    
    <th>Modify</th>
    <th></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($launchdetails as $launchdetailss)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $launchdetailss['launch_name'];?></td>
    <td><?php echo $launchdetailss['capacity'];?></td>
    <td><?php echo $launchdetailss['brand_name'];?></td>
    <td><?php echo $launchdetailss['captain_name'];?></td>
    <td>
    <a style="vertical-align: middle;" href="editlaunch.php?lid=<?php echo $launchdetailss['lid']; ?>">Edit</a> &nbsp;&nbsp;
    <a style="vertical-align: middle;" href="deletelaunch.php?lid=<?php echo $launchdetailss['lid']; ?>">Delete</a> &nbsp;&nbsp;
    </td>
      </tr>
      <?php
      $sl_no++;
  } ;?>
  
</tbody> 
</table>
</body>
</html>