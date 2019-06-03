
    <div class="panel panel-default"> 
        <div class="panel-heading panel-heading-green">
            <h6 class="panel-title text-center"> Add Admin</h6>
        </div>
        <?php if($this->session->flashdata('added')):?>
        <div class="alert alert-success">
            <h4 class="text-center"><?php echo $this->session->flashdata('added');?><h4>
        </div>
        <?php endif;?>
        <div class="panel-body">
         <div class="row">
                <div class="col-md-8 offset-2">
                    <?php echo validation_errors('<div class ="alert alert-danger">','</div>');?>
                    <form method="post" action="<?php echo base_url();?>admin/add">
                          <div class="form-group">
                            <label>First Name*</label>
                            <input type="text" class="form-control" name="firstname" required="required">
                          </div>
                          <div class="form-group">
                            <label>Last Name*</label>
                            <input type="text" class="form-control" name="lastname" required="required">
                          </div>
                          <div class="form-group">
                            <label>Email*</label>
                            <input type="email" class="form-control" name="email" required="required">
                          </div>
                          <div class="form-group">
                            <label>Password*</label>
                            <input type="password" class="form-control" name="password" required="required">
                          </div>
                          <div class="form-group">
                            <label>Confirm Password*</label>
                            <input type="password" class="form-control" name="password1" required="required">
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
                            <input type="text" class="form-control" name="phone" required="required">
                          </div>
                          <button class="btn btn-primary pull-right" name="submit">Submit</button>
                        </form>
                </div>
           </div>