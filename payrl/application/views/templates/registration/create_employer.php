<!-- Create employer and employee details view page held here
    ================================================== -->

<div class="span10">
<ul class="nav nav-tabs">
  <li><a href="add_employee">Create Employer</a></li>
  <li class="active"><a href="create_employer">Create Employee</a></li>     
</ul> 

<div class="well">
  <div class="tab-content" style="padding-top: 0px;">
<!-- Create Employee navigation bar here-->
    <div class="tab-pane active">
       <form class="form-horizontal" action="create_employer" method="post">
          <div class = "span3">
            <div class="control-group">
              <label for="inputEmp_code" class="control-label" >Emp Code <span style="color:red;">*</span>:</label>
              <div class="controls" >
                <input type="text" name="emp_code" id="inputEmp_code" value="<?php echo set_value('emp_code'); ?>"/>
                <?php echo form_error('emp_code'); ?> 
              </div>
            </div>
            <div class="control-group">
              <label for="inputName" class="control-label" >Name <span style="color:red;">*</span>:</label>
              <div class="controls" >
                  <input type="text" name="name" id="inputName" value="<?php echo set_value('name'); ?>"/>
                  <?php echo form_error('name'); ?>
              </div>
            </div>
            <div class="control-group">
              <label for="inputBankName" class="control-label" >Bank Name <span style="color:red;">*</span>:</label>
              <div class="controls" >
                <input type="text" name="bankname" id="inputBankName" value="<?php echo set_value('bankname'); ?>"/>
               <?php echo form_error('bankname'); ?>
              </div>
            </div>
            <div class="control-group">
              <label for="inputDesignation" class="control-label" >Designation <span style="color:red;">*</span>:</label>
              <div class="controls" >
                <input type="text" name="emp_designation" id="inputDesignation" value="<?php echo set_value('emp_designation'); ?>"/>
                <?php echo form_error('emp_designation'); ?>
              </div>  
            </div>
            <div class="control-group">
              <label for="inputEmailId" class="control-label" >Email ID <span style="color:red;">*</span>:</label>
              <div class="controls" >
                <input type="text" name="emailid" id="inputEmailId" value="<?php echo set_value('emailid'); ?>"/>
              <?php echo form_error('emailid'); ?>
              </div>  
            </div>
            <div class="control-group">
              <label for="inputBankACNo" class="control-label" >Bank A/C No <span style="color:red;">*</span>:</label>
              <div class="controls" >
                <input type="text" name="bankacno" id="inputBankACNo" value="<?php echo set_value('bankacno'); ?>"/>
                <?php echo form_error('bankacno'); ?>
              </div>
            </div>
        </div>

        <!-- Create Employee Right Contents here-->
        <div class = "span2 offset1">
          <div class="control-group">
            <label for="inputZone" class="control-label" >Zone <span style="color:red;">*</span>:</label>
            <div class="controls" >
              <!-- <input type="text" name="zone" id="inputZone" value="<?php //echo set_value('zone'); ?>"/> -->
              <select id="zone" name="zone" style="text-align:center;width:226px">
                <option value="">-- Select zone --</option> 
                <?php  $test = $this->registration_model->insert_zone();
                  foreach($test as $row => $option): ?>
                    <option value="<?= $option->zonal_id;?>"><?= $option->zonal_name;?></option>
                <?php endforeach;?> 
              </select>
                <?php echo form_error('zone'); ?>
            </div>
          </div>

          <div class="control-group">
            <label for="inputDistrict" class="control-label" >District <span style="color:red;">*</span>:</label>
            <div class="controls" >
              <!-- <input type="text" name="district" id="inputDistrict" value="<?php //echo set_value('district'); ?>"/> -->
              <select  id="district" style="text-align:center;width:226px">
                <option value="">-- Select district --</option>  
              </select>
              <?php echo form_error('district'); ?>
            </div>
          </div>

          <div class="control-group">
            <label for="inputTaluk" class="control-label" >Taluk <span style="color:red;">*</span>:</label>
            <div class="controls" >
              <!-- <input type="text" name="taluk" id="inputTaluk" value="<?php //echo set_value('taluk'); ?>"/>   -->
              <select  id="taluk" style="text-align:center;width:226px">
                <option value="">-- Select taluk --</option>                  
              </select>
                <?php echo form_error('taluk'); ?>
            </div>
          </div>
          
          <div class="control-group">
            <label for="inputKioskid" class="control-label" >Kiosk Id <span style="color:red;">*</span>:</label>
            <div class="controls" >
              <!-- <input type="text" name="kioskid" id="inputKioskid" value="<?php //echo set_value('kioskid'); ?>"/> -->
              <select  id="kiosk" style="text-align:center;width:226px">
                <option value="">-- Select kiosk --</option>                  
              </select>
                <?php echo form_error('kiosk'); ?>
            </div>  
          </div>

          <div class="control-group">
            <label for="datepicker" class="control-label" >Joining Date <span style="color:red;">*</span>:</label>
              <div class="controls">
                <?php $now = date('d-m-Y');?>
                <div class="input-append date" id="datepicker" data-date='<?php echo $now;?>' data-date-format="dd-mm-yyyy">
                  <input name="join" class="span2" size="16" type="date" readonly="" style="width:183px;"  value=""/>
                    <span class="add-on"><i class="icon-th"></i></span>
                </div>
                <?php echo form_error('join'); ?>
              </div>
          </div>
      
          <div class="control-group">
            <div class="controls">  
              <div class="span3">
                <input class="btn" type="submit" value ="Create" />
                <input class="btn" type="reset" value ="Reset"  />
              </div>
            </div>
          </div>
        </div>
      </form>  
    </div>
  </div>
 </div>
</div>

<!-- Javascripts, Ajax  and other call are held here for this page -->

<script>
  

/* This is used to pick date value in create employer */
   $('#datepicker').datepicker(); 


/* This function is mainly used to change dropdown select values in create employer */
   
   $('#zone,#district,#taluk').change(function(){
    var parent = this.id;
    var selected = $(this).val(); 
    var child = (parent=='zone')?'district':((parent=='district')?'taluk':((parent=='taluk')?'kiosk':''));
 
     $.getJSON("/registration/ajax_val", {sel: selected,parent:parent,child:child}, function(data){ 
     
      var select = $('#'+child).empty().append("<option value=''>--Select "+child+"--</option>");
      $.each(data, function(i, value) {
         select.append('<option value="'+ value.id+'">'+ value.name+ '</option>' );
      });
     }); 
   });

</script>