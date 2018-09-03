    <?php
    include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $ticket = mysqli_query($con, "SELECT * FROM ticket ORDER BY tid DESC");
      mysqli_close($con);
    }
    ?>

<table>
  <table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Sl#</th>
  <th style = "color: blue; background-color: orange; ">ID</th>
  <th style = "color: blue; background-color: orange; ">Name</th>
  <th style = "color: blue; background-color: orange; ">Contact Number</th>
  <th style = "color: blue; background-color: orange; ">Email</th>
  <th style = "color: blue; background-color: orange; ">Password</th>

    <th style = "color: blue; background-color: orange; ">Launch Name</th>
    <th style = "color: blue; background-color: orange; ">Catagory</th>
    <th style = "color: blue; background-color: orange; ">Station From</th>
    <th style = "color: blue; background-color: orange; ">Station To</th>
    <th style = "color: blue; background-color: orange; ">Departure Time</th>
    <th style = "color: blue; background-color: orange; ">Arrival Time</th>
    
    <th style = "color: blue; background-color: orange; ">Modify</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($ticket as $tickets)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $tickets['tid'];?></td>
    <td><?php echo $tickets['name'];?></td>
    <td><?php echo $tickets['contactnumber'];?></td>
    <td><?php echo $tickets['email'];?></td>
    <td><?php echo $tickets['password'];?></td>
    <td><?php echo $tickets['launch_name'];?></td>
    <td><?php echo $tickets['catagory'];?></td>
    <td><?php echo $tickets['station_from'];?></td>
    <td><?php echo $tickets['station_to'];?></td>
    <td><?php echo $tickets['departure_time'];?></td>
    <td><?php echo $tickets['arrival_time'];?></td>
    
    <td>
    <a style="vertical-align: middle;" href="dl.php?tid=<?php echo $tickets['tid']; ?>">Delete</a> &nbsp;&nbsp;
    </td>
      </tr>
      <?php
      $sl_no++;
  } ;?>
  
</tbody> 
</table>
</body>
</html>