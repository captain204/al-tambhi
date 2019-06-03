<div class="panel panel-default"> 
        <div class="panel-heading panel-heading-green">
            <h6 class="panel-title text-center"> Update Student profile</h6>
        </div>
        <?php if($this->session->flashdata('update_student')):?>
        <div class="alert alert-success">
            <h4 class="text-center"><?php echo $this->session->flashdata('update');?><h4>
        </div>
        <?php endif;?>
        <div class="panel-body">
         <div class="row">
                <?php foreach($update_student as $updates):?>
                <div class="col-md-8 offset-2">
                    <?php echo validation_errors('<div class ="alert alert-danger">','</div>');?>
                    <?php echo form_open_multipart('admin/update_student/<?php echo $updates->id;');?>
                          <div class="form-group">
                            <label>First Name*</label>
                            <input type="text" class="form-control" name="firstname" value="<?php echo $updates->first_name;?>">
                          </div>
                          <div class="form-group">
                            <label>Last Name*</label>
                            <input type="text" class="form-control" name="lastname" value="<?php echo $updates->last_name;?>">
                          </div>
                          <div class="form-group">
                            <label>Hobbies*</label>
                            <input type="text" class="form-control" name="hobbies" value="<?php echo $updates->hobbies;?>">
                          </div>
                          <div class="form-group">
                            <label>Choose image*</label>
                            <input type="file" class="form-control" name="image" value="<?php echo $updates->image;?>">
                          </div>
                          <div class="form-group">
                            <label>Age*</label>
                            <input type="text" class="form-control" name="age" value="<?php echo $updates->age;?>">
                          </div>
                          <div class="form-group">
                            <label>quote*</label>
                            <input type="text" class="form-control" name="quote" value="<?php echo $updates->quote;?>">
                          </div>
                          <div class="form-group">
                            <label>Address*</label>
                            <input type="text" class="form-control" name="address" value="<?php echo $updates->address;?>">
                          </div>
                          <div class="form-group">
                            <label>Phone*</label>
                            <input type="text" class="form-control" name="phone" value="<?php echo $updates->phone;?>">
                          </div>
                          <div class="form-group">
                            <label>Ambition*</label>
                            <input type="text" class="form-control" name="ambition" value="<?php echo $updates->ambition;?>">
                          </div>
                          <div class="form-group">
                            <lab
                            el>Year*</label>
                            <select name="year" class="form-control" required="required">
                              <option>2018</option>
                              <option>2019</option>
                              <option>2020</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $updates->id;?>">
                          </div>
                          <button class="btn btn-primary pull-right" name="submit">Submit</button>
                        </form>
                </div>
              <?php endforeach;?>
           </div>