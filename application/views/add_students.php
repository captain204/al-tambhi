
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
                    <?php echo form_open_multipart('students/add_student');?>
                          <div class="form-group">
                            <label>First name*</label>
                            <input type="text" class="form-control" name="firstname" required="required">
                          </div>
                          <div class="form-group">
                            <label>Middle name*</label>
                            <input type="text" class="form-control" name="middlename" required="required">
                          </div>
                          <div class="form-group">
                            <label>Last name*</label>
                            <input type="text" class="form-control" name="lastname" required="required">
                          </div>
                          <div class="form-group">
                            <label>Parents phone*</label>
                            <input type="text" class="form-control" name="phone" required="required">
                          </div>
                          <div class="form-group">
                            <label>Address*</label>
                            <input type="text" name="address" class="form-control" required="required">
                          </div>
                          <div class="form-group">
                            <label>Date of birth*</label>
                            <input type="text" class="form-control" name="dob" required="required" value="e.g 2-10-2000">
                          </div>
                          <div class="form-group">
                            <label>Student id*</label>
                            <input type="text" class="form-control" name="student_id" required="required" value="eg TH3456">
                          </div>
                          <div class="form-group">
                            <label>Blood group*</label>
                            <select name="bg" class="form-control" required="required">
                              <option>O</option>
                              <option>B</option>
                              <option>AB</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Class*</label>
                            <select name="class" class="form-control" required="required">
                              <option>JSS1</option>
                              <option>JSS2</option>
                              <option>JSS3</option>
                              <option>SS1</option>
                              <option>SS2</option>
                              <option>SS3</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label>Genotype*</label>
                            <select name="genotype" class="form-control" required="required">
                              <option>AA</option>
                              <option>AS</option>
                              <option>SS</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Choose image*</label>
                            <input type="file" class="form-control" name="image" required="required">
                          </div>  
                          <button class="btn btn-primary pull-right" name="submit">Submit</button>
                        </form>
                </div>
           </div>