  
<div class="span10">
  <ul class="nav nav-tabs">
      <li class="active"><a href="add_employee">Create Employer</a></li>
      <li><a href="create_employer">Create Employee</a></li>     
  </ul> 

<div class="well">
  <div class="tab-content">
    <!-- Create Employer navigation bar here-->
    <div class="tab-pane active">
        <form class="form-horizontal" action="add_employee" method="post">
          <div class="control-group">
            <label for="inputFullname" class="control-label" style="margin-right: 20px;">FullName <span style="color:red;">*</span>:</label>
            <div class="controls" >
              <input type="text" name="fullname" id="inputFullname" value="<?php echo set_value('fullname');?>"/>
            <?php echo form_error('fullname'); ?> 
            </div>
          </div>  
          <div class="control-group">
            <label for="inputUsername" class="control-label" style="margin-right: 20px;">UserName <span style="color:red;">*</span>:</label>
            <div class="controls" >
              <input type="text" name="username" id="inputUsername" value="<?php echo set_value('username'); ?>" />
              <?php echo form_error('username'); ?>
            </div>
          </div>
          <div class="control-group">
            <label for="inputPassword" class="control-label" style="margin-right: 20px;">Password <span style="color:red;">*</span>:</label>
            <div class="controls" >
              <input type="password" name="password" id="inputPassword" value="<?php echo set_value('password'); ?>"/>
              <?php echo form_error('password'); ?>
            </div>
          </div>
          <div class="control-group">
            <label for="inputDesignation" class="control-label" style="margin-right: 20px;">Designation <span style="color:red;">*</span>:</label>
            <div class="controls" >
              <input type="text" name="designation" id="inputDesignation" value="<?php echo set_value('designation'); ?>"/>
              <?php echo form_error('designation'); ?>
            </div>
          </div>
          <div class="control-group">
            <label for="inputDepartment" class="control-label" style="margin-right: 20px;">Department <span style="color:red;">*</span>:</label>
            <div class="controls" >
              <input type="text" name="department" id="inputDepartment" value="<?php echo set_value('department'); ?>"/>
              <?php echo form_error('department'); ?>
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <?php 
                  if ($this->session->flashdata('login_error1')){
                    echo "Wrong Username or Password";
                  }               
              ?>  
              <input class="btn" type="submit" value ="Create" />
              <input class="btn" type="reset" value ="Reset" />
            </div>
          </div>    
        </form>       
      </div>
    </div>   
  </div>
</div>

<!-- Javascripts, Ajax  and other call are held here for this page -->

 <script>
   $('#datepicker').datepicker(); 
   </script>