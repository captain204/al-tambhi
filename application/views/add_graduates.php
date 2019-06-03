
    <div class="panel panel-default"> 
        <div class="panel-heading panel-heading-green">
            <h6 class="panel-title text-center"> Add Graduate</h6>
        </div>
        <?php if($this->session->flashdata('success')):?>
        <div class="alert alert-success">
            <h4 class="text-center"><?php echo $this->session->flashdata('success');?><h4>
        </div>
        <?php endif;?>
        <div class="panel-body">
        <?php if($this->session->flashdata('success')):?>
        <div class="danger alert-danger">
            <h4 class="text-center"><?php echo $this->session->flashdata('success');?><h4>
        </div>
        <?php endif;?>
  
         <div class="row">
                <div class="col-md-8 offset-2">
                    <?php echo validation_errors('<div class ="alert alert-danger">','</div>');?>
                    <?php echo form_open_multipart('admin/add_graduates');?>
                          <div class="form-group">
                            <label>First Name*</label>
                            <input type="text" class="form-control" name="firstname" required="required">
                          </div>
                          <div class="form-group">
                            <label>Last Name*</label>
                            <input type="text" class="form-control" name="lastname" required="required">
                          </div>
                          <div class="form-group">
                            <label>Hobbies*</label>
                            <input type="text" class="form-control" name="hobbies" required="required">
                          </div>
                          <div class="form-group">
                            <label>Choose image*</label>
                            <input type="file" name="image" size="20" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Age*</label>
                            <input type="text" class="form-control" name="age" required="required">
                          </div>
                          <div class="form-group">
                            <label>Favourite Quote*</label>
                            <input type="text" class="form-control" name="quote" required="required">
                          </div>
                          <div class="form-group">
                            <label>Phone*</label>
                            <input type="text" class="form-control" name="phone" required="required">
                          </div>
                          <div class="form-group">
                            <label>Address*</label>
                            <input type="text" class="form-control" name="address" required="required">
                          </div>
                          <div class="form-group">
                            <label>Ambition*</label>
                            <input type="text" class="form-control" name="ambition" required="required">
                          </div>
                          <div class="form-group">
                            <label>Year*</label>
                            <select name="year" class="form-control" required="required">
                              <option>2018</option>
                              <option>2019</option>
                              <option>2020</option>
                            </select>
                          </div>  
                          */
                        </form>
                </div>
           </div>