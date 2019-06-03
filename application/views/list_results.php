<div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Results</h2>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Firstname</th>
                          <th>Student id</th>
                          <th>Class</th>
                          <th>Download</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  foreach($results as $result):?>
                        <tr>
                          <td><?php echo $result->firstname;?></td>
                          <td><?php echo $result->student_id;?></td>
                          <td><?php echo $result->class;?></td>
                          <td><a href="<?php echo base_url();?>download/result/<?php echo $result->file;?>"download><button type="submit" id="button" class="btn btn-primary"><span class="glyphicon glyphicon-download">Download</span> </button></a></td>
                          <td><a href="update/<?php echo $result->id;?>"><button type="button" class="btn btn-primary">Update</button></a></td>
                          <td><a href="update/<?php echo $result->id;?>"><button type="button" class="btn btn-primary">Delete</button></a></td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>