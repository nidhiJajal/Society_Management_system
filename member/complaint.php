<?php
	include "header.php";
?>
<div class="container">
<br>
	<h2>Complaint</h2>            
	<table class="table table-striped">
	
    <thead>
      <tr>
        <th>Title</th>
		<th>Date</th>
        <th>Description</th>
		<th>Reply</th>
		<th>Status</th>
      </tr>
    </thead>
	<?php
		$cn= mysqli_connect("localhost","root","","sms_admin_db");
		$q="select * from complain_info";
		
		$r=mysqli_query($cn,$q);
		while($row=mysqli_fetch_array($r))
		{
			$title = $row['c_title'] ;
			$date = $row['c_date'];
			$des = $row['c_description'] ;
			$reply = $row['c_reply'];
			$status = $row['c_status'];
	?>
    <tbody>
      <tr>
		<td><?php echo $title ?></td>
        <td><i class="fas fa-calendar-alt"></i>    <?php echo $date ?></td>
		 <td><?php echo $des ?></td>
		<td><?php echo $reply ?></td>
		<td><?php echo $status ?></td>
		 
      </tr>
    </tbody>
		<?php } ?>
  </table>
</div>
<?php

	if(isset($_POST["btnok"]))
	{
		
		$uid=$_SESSION['user_id'];
		
		$title = $_POST['title'];
		$date = $_POST['date'];
		$complaint= $_POST['complaint'];

		$cn = mysqli_connect("localhost","root","","sms_admin_db");
		
		$q = "INSERT INTO complain_info values (' ','$title','$date','$complaint','','','$uid')";
		$r = mysqli_query($cn,$q);
		if($r)
		{
			?>
			<script>
				alert('succesful');
				
			</script>
			<?php
		} 
		else
		{
			?>
			<script>
				alert('error');
			</script>
			<?php
			
		}
		
	}
   
?>
<div class="form-group text-center">
		<a href="mycomplaint.php">
          view only my complaint
		  </a>
        </div>
<section class="appoinment-section section">
  <div class="container">

    <div class="row">
      
      <div class="col-lg-6">
        <div class="contact-area pl-0 pl-lg-5">
  <div class="section-title">
    <h3>Complain
    </h3>
  </div>
  
  <form name="contact_form" class="default-form contact-form" action="#" method="post">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <input class="form-control" type="text" name="title" placeholder="Title" required="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <input class="form-control" type="date" name="date" placeholder="Date" required="" id="datepicker" autocomplete="off">
          
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <textarea class="form-control" name="complaint" placeholder="Your Message" required=""></textarea>
        </div>
        <div class="form-group text-center">
		<a href="#">
          <button type="submit" class="btn-style-one" name="btnok">submit now</button>
		  </a>
        </div>
      </div>
    </div>
  </form>
</div>
      </div>
    </div>
  </div>
</section>
<?php
	include "footer.php";
?>