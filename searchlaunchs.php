    <?php
    include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $launchsedule = mysqli_query($con, "SELECT * FROM launchsedule WHERE launchsedule.station_from LIKE '%{$_POST['station_from']}%' AND launchsedule.station_to LIKE '%{$_POST['station_to']}%' ORDER BY lid ASC");
      mysqli_close($con);
    }
    ?>

<p>
<form name="launchsedule" method="post" action="searchlaunchs.php">
  <p>
  <strong>Sation From</strong>
  <input type="text" name= "station_from" />

  <strong>Station To</strong>
  <input type="text" name= "station_to"/>

  <input type="submit" name="submit" value="Search" />
  </p>

<table>
  <table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Sl#</th>
    <th style = "color: blue; background-color: orange; ">Launch Name</th>
    <th style = "color: blue; background-color: orange; ">Station From</th>
    <th style = "color: blue; background-color: orange; ">Station To</th>
    <th style = "color: blue; background-color: orange; ">Departure Time</th>
    <th style = "color: blue; background-color: orange; ">Arrival Time</th>
    <th style = "color: blue; background-color: orange; ">Price</th>
    <th style = "color: blue; background-color: orange; ">Catagory</th>
    
    <th style = "color: blue; background-color: orange; ">Modify</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($launchsedule as $launchsedules)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $launchsedules['launch_name'];?></td>
    <td><?php echo $launchsedules['station_from'];?></td>
    <td><?php echo $launchsedules['station_to'];?></td>
    <td><?php echo $launchsedules['departure_time'];?></td>
    <td><?php echo $launchsedules['arrival_time'];?></td>
    <td><?php echo $launchsedules['price'];?></td>
    <td><?php echo $launchsedules['catagory'];?></td>
    <td>
    <a style="vertical-align: middle;" href="editlauncha.php?lid=<?php echo $launchsedules['lid']; ?>">Edit</a> &nbsp;&nbsp;
    <a style="vertical-align: middle;" href="ld.php?lid=<?php echo $launchsedules['lid']; ?>">Delete</a> &nbsp;&nbsp;
    </td>
      </tr>
      <?php
      $sl_no++;
  } ;?>
  
</tbody> 
</table>
</body>
</html>