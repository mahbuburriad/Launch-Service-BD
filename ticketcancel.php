		<?php
		include_once "header.php";

		include_once "connection.php";

		if(!mysqli_connect_errno())
    {
      $ticket = mysqli_query($con, "SELECT * FROM ticket WHERE ticket.tid= {$_GET['tid']}");
      mysqli_close($con);
    }

		foreach($ticket as $tickets)
		

?>



<h1>This is the Sign Up form</h1>
<p>Here you can sign up for every member as you want</p>

<div id="main-content" class="clearfix">
<div class="left">
<br />
<p>
<form name="ticket" method="post" action="ticketc.php">

<p>
	<strong>ID</strong><br />
	<input type="text" name= "tid" value="<?php echo $tickets['tid'];?>" style="width:40px; padding:5px; border-radius: 8px;" />
	</p>
	<p>
		<strong>Why You Cancel</strong><br />
		<textarea name="cancel" cols="60" rows="60" ></textarea>
	<p>
	<input type="submit" name="submit" value="Send" />
</p>
	</form>
	</body>
</html>