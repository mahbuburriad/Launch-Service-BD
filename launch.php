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
  <table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Sl#</th>
    <th style = "color: blue; background-color: orange; ">Launch Name</th>
    <th style = "color: blue; background-color: orange; ">Capacity</th>
    <th style = "color: blue; background-color: orange; ">Brand Name</th>
    <th style = "color: blue; background-color: orange; ">Captain Name</th>
    
    <th style = "color: blue; background-color: orange; "></th>
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
      </tr>
      <?php
      $sl_no++;
  } ;?>
  
</tbody> 
</table>
</body>
</html>