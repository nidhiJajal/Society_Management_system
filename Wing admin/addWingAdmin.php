<?php
	include "header.php";
?>
<?php
	if(isset($_POST["btnok"]))
	{
		
		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$email= $_POST['email'];
		$password= $_POST['password'];
		$birth_date= $_POST['birth_date'];
		$mem_name= $_POST['mem_name'];
		$wing_no= $_POST['wing_no'];
		$flat_no= $_POST['flat_no'];

		$cn = mysqli_connect("localhost","root","","sms_admin_db");
		
		$q = "INSERT INTO member_info values (' ','$name','$contact','$email','$birth_date','$password','$mem_name','$wing_no','$flat_no')";
		$r = mysqli_query($cn,$q);
		
		if($r)
		{
			?>
			<script>
				alert('successful');
                window.location.replace("viewWingAdmin.php");
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

<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Add Member</h1>
                            </div>
                        </div>
                    </div>                    
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form class="form-valide" action="#" method="post">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="name">Name <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter a name..">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Your valid email..">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="password">Password <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Choose a safe one..">
                                                </div>
                                            </div>                                            
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="contact">contact <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <textarea class="form-control" id="contact" name="contact" rows="5" placeholder="Enter your contact no..."></textarea>
                                                </div>
                                            </div>                                            
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="birth_date">DOB <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="date" class="form-control" id="birth_date" name="birth_date">
                                                </div>
                                            </div>												 
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="mem_name">Member Name <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="mem_name" name="mem_name" placeholder="Enter member name....">
                                                </div>
												
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="wing_no">Wing no <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="wing_no" name="wing_no" placeholder="Enter wing no....">
                                                </div>
												
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="flat_no">Flat no. <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="flat_no" name="flat_no" placeholder="enter flat no....">
                                                </div>
                                            </div> 
                                                                            
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <input type="submit" name="btnok" class="btn btn-primary" value="add" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </section>
            
	<?php
		include "footer.php"
	?>