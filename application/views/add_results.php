
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
                    <?php echo form_open_multipart('results/add_results');?>
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
                            <label>Choose image*</label>
                            <input type="file" class="form-control" name="userfile" required="required">
                          </div>
                          <div class="form-group">
                            <label>Student id*</label>
                            <input type="text" class="form-control" name="student_id" required="required">
                          </div> 
                          <div class="form-group">
                            <label>Student Name*</label>
                            <input type="text" class="form-control" name="student_name" required="required">
                          </div> 
                          <button class="btn btn-primary pull-right" name="submit">Submit</button>
                        </form>
                </div>
           </div>