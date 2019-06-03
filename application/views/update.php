<div class="panel panel-default"> 
        <div class="panel-heading panel-heading-green">
            <h6 class="panel-title text-center"> Update admin details</h6>
        </div>
        <?php if($this->session->flashdata('update')):?>
        <div class="alert alert-success">
            <h4 class="text-center"><?php echo $this->session->flashdata('update');?><h4>
        </div>
        <?php endif;?>
        <div class="panel-body">
         <div class="row">
                <?php foreach($update as $updates):?>
                <div class="col-md-8 offset-2">
                    <?php echo validation_errors('<div class ="alert alert-danger">','</div>');?>
                    <form method="post" action="<?php echo base_url();?>admin/update/<?php echo $updates->id;?>">
                          <div class="form-group">
                            <label>First Name*</label>
                            <input type="text" class="form-control" name="firstname" value="<?php echo $updates->firstname;?>">
                          </div>
                          <div class="form-group">
                            <label>Last Name*</label>
                            <input type="text" class="form-control" name="lastname" value="<?php echo $updates->lastname;?>">
                          </div>
                          <div class="form-group">
                            <label>Email*</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $updates->email;?>">
                          </div>
                          <div class="form-group">
                            <label>Password*</label>
                            <input type="password" class="form-control" name="password" value="<?php echo $updates->password;?>">
                          </div>
                          <div class="form-group">
                            <label>Status*</label>
                            <select name="status" id="status" class="form-control">
                                <option>Admin</option>
                                <option>Superadmin</option>
                              </select>
                          </div>
                          <div class="form-group">
                            <label>Phone*</label>
                            <input type="text" class="form-control" name="phone" value="<?php echo $updates->phone;?>">
                          </div>
                          <button class="btn btn-primary pull-right" name="submit">Submit</button>
                        </form>
                </div>
              <?php endforeach;?>
           </div>