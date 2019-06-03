
<div class="container">
<?php foreach($students as $student):?>
	<div class="row">
			<div class="myprofile">
					<div class="row">			
						<div class="col-md-12">
							<h4 class="text-center"><img src="<?php echo base_url();?>assets/images/students/19228198_444961775872193_2182414342140461056_n.jpg" class="img-circle" id="image"></a></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-8-offset-3 panel-group text-center">
								<div class="panel panel-defaul">
									<div class="panel panel-heading">
										<h4>My profile</h4>
									</div>
									<div class="panel panel body">
										<ul class="list-group">
											<li class="list-group-item text-warning"><?php echo $student->firstname;?></li>
											<li class="list-group-item text-warning"><?php echo $student->lastname;?></li>
											<li class="list-group-item text-warning"><?php echo $student->student_id;?></li>
											<li class="list-group-item text-warning"><?= $student->class;?></li>
											<?php foreach($results as $result):?>
											<li class="list-group-item"><a href="<?php echo base_url();?>download/result/<?php echo $result->file;?>"download><button type="submit" id="button" class="btn btn-primary">My result</button></a></li>
											<?php endforeach;?>
										</ul>
									</div>
								 </div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
	</div>
  <?php endforeach;?>
</div>
