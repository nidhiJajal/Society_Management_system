<?php 
include "header.php";
?>
    <div class="content-wrap">
        <div class="main"
            <div class="container-fluid">
                
                <!-- /# row -->
					<section id="main-content">
                    <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4> Maintainance Report </h4>
                                    <a style="float:right; color:blue" href="addMaintainance.php">Add Maintainance</a>
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">

                                            <thead>
                                                <tr>
													<th>Date</th>
													<th>title</th>
													<th>type</th>
                                                    <th>Bill_Image</th>
													<th>Notes</th>
													<th>action</th>
                                                </tr>
                                            </thead>
											<?php
												$cn= mysqli_connect("localhost","root","","sms_admin_db");
												$q="select * from maintenance_info";
												
												$r=mysqli_query($cn,$q);
												while($row=mysqli_fetch_array($r))
												{
											?>
													
												<tbody>
												<tr>
													<?php $date = $row['m_date'] ?>
													<?php $title = $row['m_title'] ?>
													<?php $type = $row['m_type'] ?>
													<?php $bill_image = $row['m_bill_image'] ?>
													<?php $notes = $row['m_notes'] ?>
													<td><?php echo $date ?></td>
													<td><?php echo $title ?></td>
													<td><?php echo $type ?></td>
													<td><img src="uploaded_img/<?php echo $bill_image?>" height=100 width=100/></td>
													<td><?php echo $notes ?></td>
													<td>
													<a onclick="return confirm('Are you sure you want to remove this record?')" href="deleteMaintainance.php?id=<?php echo $row['ma_id']; ?>">delete</a>
													<a onclick="return confirm('Are you sure you want to update this record?')" href="updateMaintainance.php?id=<?php echo $row['ma_id']; ?>">update</a>
													</td>
													</a>
												</tr>
												</tbody>
												<?php
												}?>                                           
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    
                </section>
					<?php
include "footer.php";
?>


                    