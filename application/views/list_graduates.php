<div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Manage Admin</h2>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Firstname</th>
                          <th>Lastname</th>
                          <th>Age</th>
                          <th>Favourite Quote</th>
                          <th>Country</th>
                          <th>Priviledge</th>
                          <th>Email</th>
                          <th>Phone</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  foreach($graduate as $graduates):?>
                        <tr>
                          <td>

                                <div class="col-md-4" class="thumbnail">
                                    <a href="#m6" data-toggle="modal" class="thumbnail"><img src="<?php echo base_url();?>assets/images/graduates/<?php echo $graduates->image?>"></a>
                                    <div class="modal fade" id="m6">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header bg-primary">Header</div>
                                    <div class.="modal-body">
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
                          <td><?php echo $graduates->first_name;?></td>
                          <td><?php echo $graduates->last_name;?></td>
                          <td><?php echo $graduates->age;?></td>
                          <td><?php echo $graduates->quote;?></td>
                          <td><?php echo $graduates->address;?></td>
                          <td><?php echo $graduates->hobbies;?></td>
                          <td><?php echo $graduates->phone;?></td>
                          <td><?php echo $graduates->year;?></td>
                          
                          <td><a href="update_student/<?php echo $graduates->id;?>"><button type="button" class="btn btn-primary">Update</button></a></td>
                          <td><a href="delete_graduate/<?php echo $graduates->id;?>"><button type="button" class="btn btn-primary">Delete</button></a></td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>