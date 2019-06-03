<div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Manage Admin</h2>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Firstname</th>
                          <th>Lastname</th>
                          <th>Username</th>
                          <th>Priviledge</th>
                          <th>Email</th>
                          <th>Phone</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  foreach($admin as $detail):?>
                        <tr>
                          <td><?php echo $detail->firstname;?></td>
                          <td><?php echo $detail->lastname;?></td>
                          <td><?php echo $detail->username;?></td>
                          <td><?php echo $detail->priviledge;?></td>
                          <td><?php echo $detail->email;?></td>
                          <td><?php echo $detail->phone;?></td>
                          <td><a href="update/<?php echo $detail->id;?>"><button type="button" class="btn btn-primary">Update</button></a></td>
                          <td><a href="delete/<?php echo $detail->id;?>"><button type="button" class="btn btn-primary">Update</button></a></td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>