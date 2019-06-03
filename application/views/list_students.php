<div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Manage students</h2>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Firstname</th>
                          <th>Middle name</th>
                          <th>Lastname</th>
                          <th>Student id</th>
                          <th>Parents phone</th>
                          <th>Address</th>
                          <th>class</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  foreach($students as $student):?>
                        <tr>
                          <td><img src="<?php echo base_url();?>assets/images/students/<?php echo $student->image?>" class="thumbnail"></a></td>
                          <td><?php echo $student->firstname;?></td>
                          <td><?php echo $student->middlename;?></td>
                          <td><?php echo $student->lastname;?></td>
                          <td><?php echo $student->student_id;?></td>
                          <td><?php echo $student->parent_phone;?></td>
                          <td><?php echo $student->address;?></td>
                          <td><?php echo $student->class;?></td>
                          <td><a href="update/<?php echo $student->id;?>"><button type="button" class="btn btn-primary">Update</button></a></td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>