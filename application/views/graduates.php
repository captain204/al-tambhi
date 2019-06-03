	<div class="row">
		<div id="year"class="col-md-12">
		  		<h4 class="text-center">Class of 2016</h4>
		  		<p class="lead text-center">List of this years graduants</p>
		  		<table class="table table-striped">
		  			<thead>
			  			<tr>
			  				<th><button class="btn btn-primary"><a href="#"></a>Download photo book</button></th>
			  				<th>Firstname</th>
			  				<th>Lastname</th>
			  				<th>Hobbies</th>
			  				<th>Age</th>
			  				<th>Favourite Quote</th>
			  				<th>Phone number</th>
			  				<th>Address</th>
			  				<th>Ambition</th>
			  			</tr>
			  		</thead>
			  		<tbody>
			  		<?php foreach($graduates as $grad):?>
			  			<tr>
			  				<td>
				  				<div class="col-md-4" class="thumbnail">
				  					<a href="#m6" data-toggle="modal" class="thumbnail"><img src="<?php echo base_url();?>assets/images/graduates/<?php echo $grad->image?>"></a>
				  					<div class="modal fade" id="m6">
				  						<div class="modal-dialog">
				  							<div class="modal-content">
				  								<div class="modal-header bg-primary">Header</div>
				  								<div class="modal-body">
				  									<img src="images/name"class="img-thumbnail">
				  								</div>
				  								<div class="modal-footer">
				  									<button class="btn btn-primary"><a href="">Save</a></button>
				  								</div>
				  							</div>
				  						</div>
				  					</div>
				  				</div>
			  				</td>
			  				<td><?php echo $grad->first_name;?></td>
			  				<td><?php echo $grad->last_name;?></td>
			  				<td><?php echo $grad->hobbies; ?></td>
			  				<td><?php echo $grad->age;?></td>
			  				<td><?php echo $grad->quote;?></td>
			  				<td><?php echo $grad->phone;?></td>
			  				<td><?php echo $grad->address;?></td>
			  				<td><?php echo $grad->ambition;?></td>
			  			</tr>
			  			<?php endforeach;?>
		  			</tbody>
		  		</table>
		 </div>
</div>


