s<?php
	include "header.php";
?>
<?php
	if(isset($_POST["btnok"]))
	{
		
		$date = $_POST['n_date'];
		$n_news = $_POST['news'];

		$cn = mysqli_connect("localhost","root","","sms_admin_db");
		
		$q = "INSERT INTO news_info values (' ','$date','$n_news')";
		$r = mysqli_query($cn,$q);
		
		if($r)
		{
			?>
			<script>
				alert('successful');
				window.location.replace("viewNews.php");
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
                                <h1>Add News</h1>
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
                                                <label class="col-lg-4 col-form-label" for="n_date">Date <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="date" class="form-control" id="n_date" name="n_date">
                                                </div>
                                            </div>	                                                  
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="news"> enter News <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="news" name="news" placeholder="Daily updates..">
                                                </div>
                                            </div>

                                                                
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <input type="submit" class="btn btn-primary" value="Submit" name="btnok" />
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