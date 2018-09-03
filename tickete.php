    <?php
    include_once "header.php";

    include_once "connection.php";

    if(!mysqli_connect_errno())
    {
      $ticket = mysqli_query($con, "SELECT * FROM cancelticket ");
      mysqli_close($con);
    }
    ?>

<table>
  <table style="background-color: white;">
  <thread >
  <th style = "color: blue; background-color: orange; ">Sl#</th>
  <th style = "color: blue; background-color: orange; ">ID</th>
  <th style = "color: blue; background-color: orange; ">Cancel</th>
    <th style = "color: blue; background-color: orange; "></th>
  </thread>

<tbody style="color: red">
  <?php
  $sl_no=1;
  foreach($ticket as $tickets)
    { ?>
    <tr>
    <td style = "color: orange; background-color: blue; "><?php echo $sl_no;?></td>
    <td><?php echo $tickets['id'];?></td>

    <td><?php echo $tickets['cancel'];?></td>
    
      </tr>
      <?php
      $sl_no++;
  } ;?>
  
</tbody> 
</table>
</body>
</html>